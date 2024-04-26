<?php

// Variables and arrays | Data
include_once 'src/data.view.php';

// Head section
include_once 'src/head.view.php';
?>

  <body id="body-pd">
    
    <header class="header" id="header">
      <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
      <h1 id="course-title">CS3270 Advanced Web Programming</h1>
      <a href="admin.php">
      <div class="header_img">
        <img src="images/duckimg.png" alt="">
      </div>
      </a>
    </header>

    <!-- navigation bar  -->
    <?php include_once 'src/navbar.view.php'; ?>

    <!--Content Container start-->
    <main>
      <h1 class="Assignment-title">Latest Assignment</h1>
    </main>
    <!--Content Container end-->

    <!-- Navbar Specific Scripts -->
    <?php include_once 'src/navbar.scripts.view.php'; ?>
  </body>

</html>