<?php
include_once ("weatherapi.php");
$apiKey = "031008642bdc0fedc09b5630072ce65e";
$weatherAPI = new WeatherAPI($apiKey);

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $city = htmlspecialchars($_POST["city"]);

    if (!empty($city)) {
        $weatherInfo = $weatherAPI->getWeather($city);

        if (is_array($weatherInfo)) {
            echo '<div class="d-flex justify-content-center">';
            echo '  <div class="card bold" style="width: 18rem;">';
            echo '    <div class="card-body">';
            echo '      <h5 class="card-title fs-2">' . ucfirst($city) . '</h5>';
            echo '      <p class="card-text">Current Temperature: <span class="purple-text fs-5">' . $weatherInfo['temperature'] . '° C</span></p>';
            echo '      <p class="card-text">Humidity: <span class="purple-text fs-7">' . $weatherInfo['humidity'] . '%</span></p>';
            echo '      <p class="card-text">Description: <span class="purple-text fs-7">' . $weatherInfo['description'] . '</span></p>';
            echo '    </div>';
            echo '  </div>';
            echo '</div>';
        } else {
            echo $weatherInfo;
        }
    }
}