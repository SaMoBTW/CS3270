<?php
// Variables and arrays | Data
include_once 'src/data.view.php';

// Head section
include_once 'src/head.view.php';
?>

<body className='snippet-body'>

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
            <div class="height-100 bg-light">
                <h4>Main Components</h4>
            </div>
        </main>
        <!--Container Main end-->

        <!-- Navbar Specific Scripts -->
        <?php include_once 'src/navbar.scripts.view.php'; ?>

    </body>

</html>