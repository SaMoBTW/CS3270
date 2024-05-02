<?php

// Variables and arrays | Data
include_once 'src/data.view.php';

// Head section
include_once 'src/head.view.php';
?>

  <body id="body-pd">
    
    <header class="header" id="header">
      <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
      <h1 id="course-title">Experience</h1>
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
<div class="accordion my-accordion row d-flex justify-content-center" id="accordionPanelsStayOpenExample">
  <div class="accordion-item col-md-8">
    <h2 class="accordion-header">
      <button class="accordion-button experience-titles" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Bemidji State University (Department of Public Safety)
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
      <div class="accordion-body">
        <strong>Dispatcher <small>(Jan 2024 - Current)</small></strong>
        <ul>
            <li>Answering Calls: Gathering vital information, responding accordingly</li>
            <li>Maintain Communication: Ensure continuous updates and coordination between dispatch and responders.</li>
            <li>Record Details: Meticulously document all pertinent information for future reference and analysis.</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item col-md-8">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed experience-titles" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        University of technology Bahrain
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
      <div class="accordion-body">
        <strong>Social Media Manager (Intern) <small>(Aug 2019 – Aug 2020)</small></strong>
        <ul>
            <li>Content Creation on YouTube and Instagram</li>
            <li>Community engagement focusing on bringing more students to the university</li>
            <li>Scheduling, controlling the flow, and analytics of content</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item col-md-8">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed experience-titles" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        Watchmen eSports
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
      <div class="accordion-body">
        <strong>Head Video editor & Content Manager <small>(Sep 2019 – Feb 2023)</small></strong>
        <ul>
            <li>
                Project management: Coming up with ideas for content and controlling scheduling.
            </li>
            <li>
                Team coordination: Assigning tasks task/ portions of the projects to my team.
            </li>
            <li>
            Quality assurance: checking off on completed projects or giving feedback for adjustments to be made
        </li>
        </ul>
      </div>
    </div>
  </div>
</div>
    </main>
    <!--Content Container end-->

    <!-- Navbar Specific Scripts -->
    <?php include_once 'src/navbar.scripts.view.php'; ?>
  </body>

</html>