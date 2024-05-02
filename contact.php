<?php

// Variables and arrays | Data
include_once 'src/data.view.php';

// Head section
include_once 'src/head.view.php';
?>

  <body id="body-pd">
    
    <header class="header" id="header">
      <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
      <h1 id="course-title">Contact Me</h1>
      <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
      <div class="header_img">
        <img src="images/duckimg.png" alt="">
      </div>
      </a>
    </header>

    <!-- navigation bar  -->
    <?php include_once './src/navbar.view.php'; ?>

    <!--Content Container start-->
    <main>
          <form action="./src/sendmessage.php" method="post">
            <input name="sender-name" type="text" class="feedback-input" placeholder="Name" />   
            <input name="sender-email" type="email" class="feedback-input" placeholder="Email" />
            <textarea name="sender-message" class="feedback-input" placeholder="Message"></textarea>
            <button type="submit" class="btn btn-primary" name="submit">send</button>
          </form>
    </main>
    <!--Content Container end-->

    <!-- Navbar Specific Scripts -->
    <?php include_once 'src/navbar.scripts.view.php'; ?>
  </body>

</html>