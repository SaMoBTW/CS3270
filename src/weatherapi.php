<?php

class WeatherAPI
{
    private $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getWeather($city)
    {
        // Initialize cURL session
        $curl = curl_init();

        // Set API URL
        $url = "http://api.openweathermap.org/data/2.5/weather?q=" . urlencode($city) . "&appid=" . $this->apiKey;

        // Set cURL options
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Return the response as a string instead of outputting it

        // Execute cURL session
        $response = curl_exec($curl);

        // Check for errors
        if ($response === false) {
            $error = curl_error($curl);
            return "cURL Error: " . $error;
        } else {
            // Decode the JSON response
            $data = json_decode($response, true);

            // Check if API call was successful
            if ($data && isset($data['main'])) {
                // Extract weather information
                $temperature = $data['main']['temp'] - 273.15; // Convert temperature from Kelvin to Celsius
                $humidity = $data['main']['humidity'];
                $description = $data['weather'][0]['description'];

                // Construct weather information
                $weatherInfo = [
                    'temperature' => $temperature,
                    'humidity' => $humidity,
                    'description' => $description
                ];

                return $weatherInfo;
            } else {
                // Handle API call failure
                return "Failed to retrieve weather data. Check your API key or city name.";
            }
        }

        // Close cURL session
        @curl_close($curl);
    }
}

