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
      <a href="weather.php">
      <div class="header_img">
        <img src="images/duckimg.png" alt="">
      </div>
      </a>
    </header>

    <!-- navigation bar  -->
    <?php include_once 'src/navbar.view.php'; ?>

    <!--Content Container start-->
    <main>

<div class="container my-5 index-page">
  <div class="p-5 text-center rounded-3 index-page">
    <img width="100" height="100"src="images/rubberduck.svg" alt="" class="index-page">
    <h1 class="index-h1">Hi there! I'm Samir Mahmoud,</h1>
    <p class="col-lg-8 mx-auto intro-p">
 an aspiring web developer with a passion for crafting immersive online experiences. Currently honing my skills in frontend technology, I'm on a journey to bring creative ideas to life in the digital world.
    </p>
    <!-- <div class="d-inline-flex gap-2 mb-5">
      <button class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="button">
        Call to action
        <svg class="bi ms-2" width="24" height="24"><use xlink:href="#arrow-right-short"></use></svg>
      </button>
      <button class="btn btn-outline-secondary btn-lg px-4 rounded-pill" type="button">
        Secondary link
      </button>
    </div> -->
  </div>
</div>

    </main>
    <!--Content Container end-->

    <!-- Navbar Specific Scripts -->
    <?php include_once 'src/navbar.scripts.view.php'; ?>
  </body>

</html>