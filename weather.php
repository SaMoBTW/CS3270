<?php

// Variables and arrays | Data
include_once 'src/data.view.php';

// Head section
include_once 'src/head.view.php';
?>

<body id="body-pd">
  
  <header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <h1 id="course-title">Weather</h1>
    <a href="index.php">
    <div class="header_img">
      <img src="images/duckimg.png" alt="">
    </div>
    </a>
  </header>

  <!-- navigation bar  -->
  <?php include_once 'src/navbar.view.php'; ?>

  <!--Content Container start-->
  <main>
    
    <?php
    // Usage
// Include the WeatherAPI class
    include_once 'src/weatherapi.php';
    include_once 'src/weatherhandler.php';
    ?>
        <div class="col weather-form">
          <form method="post" action="weather.php">
            <h3 class="text-center">Check weather</h3>
            <div class="mb-3">
              <input type="text" class="form-control"  aria-describedby="emailHelp" name="city" placeholder="City">
            </div>
            <button type="submit" class="btn btn-primary">GO</button>
          </form>
        </div>
  </main>
  <!--Content Container end-->

  <!-- Navbar Specific Scripts -->
  <?php include_once 'src/navbar.scripts.view.php'; ?>
</body>

</html>