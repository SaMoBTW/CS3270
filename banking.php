<?php

// Variables and arrays | Data
include_once 'src/data.view.php';

// Head section
include_once 'src/head.view.php';
?>

  <body id="body-pd">
    
    <header class="header" id="header">
      <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
      <h1 id="course-title">Banking</h1>
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
                            <h3>About Banking</h3>
                        </div>
                        <p class="description-p text-muted pe-0 pe-lg-0">a simple three-page banking app designed for effortless money management. Begin by logging in securely to access your personal accounts.</p>

                        <p class="description-p text-muted pe-0 pe-lg-0">Once logged in, view all your accounts on the main page for a quick overview of your balances and transactions. Easily navigate between your accounts to stay on top of your finances.</p>

                        <p class="description-p text-muted pe-0 pe-lg-0">Need to transfer money between accounts? Head to the transfer page, where you can move funds with just a few clicks. It's that simple.</p>

                        <div class="sosmed-horizontal pt-3 pb-3">
                          <p>HTML, CSS, Bootstrap, PHP</p>
                        </div>
                        <a href="https://github.com/SaMoBTW/Banking-App" class="btn rey-btn mt-3 live-page">github Repo</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <figure class="potoaboutwrap">
                    <img src="images/banking.PNG" alt="potoabout" class="rounded screenshot"/>
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