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
      <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
      <div class="header_img">
        <img src="images/duckimg.png" alt="">
      </div>
      </a>
    </header>
    
    <!-- navigation bar  -->
    <?php include_once 'src/navbar.view.php'; ?>

    <!--Container Main start-->

        <!-- Project's object -->
       <?php
        $projectManager = new ProjectManager($conn);
        $projectManager->displayProjects();
       ?>
       <!-- Project's object -->
       
    <!--Container Main end-->
    
    <!-- Navbar Specific Scripts -->
    <?php include_once 'src/navbar.scripts.view.php'; ?>
</body>

</html>