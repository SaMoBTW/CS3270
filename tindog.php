<?php

// Variables and arrays | Data
include_once 'src/data.view.php';

// Head section
include_once 'src/head.view.php';
?>

  <body id="body-pd">
    
    <header class="header" id="header">
      <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
      <h1 id="course-title">Tindog</h1>
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

<section id="about-section" class="pt-5 pb-5 rounded">
    <div class="container wrapabout">
        <div class="red"></div>
        <div class="row">
            <div class="col-lg-6 align-items-center justify-content-left d-flex mb-5 mb-lg-0 rounded">
                <div class="blockabout rounded">
                    <div class="blockabout-inner text-center text-sm-start rounded">
                        <div class="title-big pb-3 mb-3">
                            <h3>About Tindog</h3>
                        </div>
                        <p class="description-p text-muted pe-0 pe-lg-0">Welcome to Tindog, a sleek single-page website crafted to showcase the power and simplicity of the Bootstrap framework. With its modern layout and playful gradient design, Tindog invites users to explore the versatility of Bootstrap's grid system.</p>
                        <p class="description-p text-muted pe-0 pe-lg-0">Featuring a minimalist approach, Tindog highlights a charming touch: a picture of a dog's Tindog profile. This whimsical element adds a delightful flair to the website, making it both engaging and endearing.</p>
                        <p class="description-p text-muted pe-0 pe-lg-0">Whether you're a developer honing your skills or a dog lover seeking a smile, Tindog offers a brief yet delightful journey into the world of Bootstrap and the timeless bond between humans and their furry companions.</p>

                        <div class="sosmed-horizontal pt-3 pb-3">
                          <p>HTML, CSS, Bootstrap</p>
                        </div>
                        <a href="https://github.com/SaMoBTW/Tindog" class="btn rey-btn mt-3 live-page">github Repo</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <figure class="potoaboutwrap">
                    <img src="images/tindogSS.PNG" alt="potoabout" class="rounded screenshot"/>
                </figure>
            </div>
        </div>
    </div>
</section>

    </main>
    <!--Content Container end-->

    <!-- Navbar Specific Scripts -->
    <?php include_once 'src/navbar.scripts.view.php'; ?>
  </body>

</html>