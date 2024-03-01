<?php
// Variables and arrays | Data
include_once 'src/data.view.php';

// Head section
include_once 'src/head.view.php';
?>


<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <h1 id="course-title">Personal Projects</h1>
        <div class="header_img">
            <img src="images/duckimg.png" alt="">
        </div>
    </header>
    
    <!-- navigation bar  -->
    <?php include_once 'src/navbar.view.php'; ?>
    <!--Container Main start-->
    <main>

        <div class="card" style="width: 18rem;">
          <img src="images/tindogss.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">TinDog</h5>
            <p class="card-text">Simple webpage made with bootstrap</p>
            <p class="card-text">HTML, CSS, BootStrap</p>
            <div class="container">
                <div class="row">
                        <div class="col text-center">
            <a href="https://samobtw.github.io/Tindog/" target="_blank" class="btn btn-primary card-btn"><i class='bx bxl-github nav_icon'></i></a>
            <a href="https://samobtw.github.io/Tindog/" target="_blank" class="btn btn-primary card-btn"><i class='bx bx-desktop nav_icon'></i></a>
                        </div>
                    </div>
                </div>
          </div>
        </div>

        

        

    </main>
    <!--Container Main end-->
    
    <!-- Navbar Specific Scripts -->
    <?php include_once 'src/navbar.scripts.view.php'; ?>
</body>

</html>