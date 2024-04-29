<?php

// Variables and arrays | Data
include_once 'src/data.view.php';

// Head section
include_once 'src/head.view.php';
?>

  <body id="body-pd">
    
    <header class="header" id="header">
      <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
      <h1 id="course-title">Simon</h1>
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
                            <h3>About Simon</h3>
                        </div>
                        <p class="description-p text-muted pe-0 pe-lg-0">Challenge your memory with the Simon Memory Game, a modern twist on the classic children's toy. Featuring four vibrant squares that light up and emit distinctive sounds, this game is all about putting your recall abilities to the test.</p>

                        <p class="description-p text-muted pe-0 pe-lg-0">The gameplay is straightforward yet addictive. As the game kicks off, the squares illuminate in a random sequence, each accompanied by its own unique sound. Your objective? Mimic the sequence by clicking on the squares in the exact order they were activated.</p>

                        <p class="description-p text-muted pe-0 pe-lg-0">With every successful replication, the difficulty ramps up, adding a new layer of challenge as the sequence grows longer. Can you keep pace with the ever-expanding pattern, or will you stumble under the pressure?</p>

                        <div class="sosmed-horizontal pt-3 pb-3">
                          <p>HTML, CSS, JavaScript</p>
                        </div>
                        <a href="https://github.com/SaMoBTW/Simon-Game" class="btn rey-btn mt-3 live-page">github Repo</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <figure class="potoaboutwrap">
                    <img src="images/simon.PNG" alt="potoabout" class="rounded screenshot"/>
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