<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {

  function logout()
  {

    $_SESSION = array();

    // Destroy the session cookie
    if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
      );
    }


    session_destroy();

    // Redirect to the login page
    header("location: admin.php");
    exit;
  }

  if (isset($_POST['logout'])) {
    logout();
  }
}


// Variables and arrays | Data
include_once 'src/data.view.php';

// Head section
include_once 'src/head.view.php';
?>

  <body id="body-pd">
    
    <header class="header" id="header">
      <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
      <h1 id="course-title"><?php echo ucfirst($_SESSION["username"]); ?>'s Admin page</h1>
      <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
      <div class="header_img">
        <img src="images/duckimg.png" alt="">
      </div>
      </a>
    </header>

    <!-- navigation bar  -->
    <?php include_once 'src/navbar.view.php'; ?>

    <!--Content Container start-->
    <main>
      <?php
      $projectManager = new ProjectTitleManager($conn);
      $projectManager->displayTitles();

      $messageManager = new MessageManager($conn);
      $messageManager->displayMessages();
      ?>
 <div class="container">
    <div class="row">
      <!-- Create Form -->
      <div class="col admin-forms">
        <form method="post" action="./src/createpost.php">
          <h3 class="text-center">Create Post</h3>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Project Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Languages</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="languages">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
          </div>

          <div class="mb-3">
            <div class="input-group">
              <span class="input-group-text" id="basic-addon3">Project URL</span>
              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4" name="project-url">
            </div>
          </div>

          <div class="mb-3">
            <input class="form-control" type="file" id="formFile" name="project-image">
          </div>

          <button type="submit" class="btn btn-primary" name="submit">Post</button>
        </form>
      </div>

      <!-- Delete Form -->
      <div class="col admin-forms">
        <form method="post" action="./src/deletepost.php">
          <h3 class="text-center">Delete Post</h3>
          <div class="mb-3">
            <label for="nothing" class="form-label">Project Title</label>
            <input type="text" class="form-control"  aria-describedby="emailHelp" name="title">
          </div>

          <button type="submit" class="btn btn-primary">Delete</button>
        </form>
            <!-- Submission Delete Form -->
        <form method="post" action="./src/deletesubmission.php">
          <h3 class="text-center">Delete Submission</h3>
          <div class="mb-3">
            <label for="nothing" class="form-label">Sender's Name</label>
            <input type="text" class="form-control"  aria-describedby="emailHelp" name="sender-name">
          </div>
          <button type="submit" class="btn btn-primary">Delete</button>
        </form>
      </div>
      <!-- Update Form -->
      <div class="col admin-forms">
        <form method="post" action="./src/updatepost.php">
          <h3 class="text-center">Update Post</h3>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Target project</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="target-project">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Project Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Languages</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="languages">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="description"></textarea>
          </div>

          <div class="mb-3">
            <div class="input-group">
              <span class="input-group-text" id="basic-addon3">Project URL</span>
              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4" name="project-url">
            </div>
          </div>
                    <div class="mb-3">
            <input class="form-control" type="file" id="formFile" name="project-image">
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>

  <!-- Contact me submissions -->
  <div class="feedback-input ">
    <h3 class="text-center">Contact me submissions</h3>
    <p class="feedback-input"></p>
  </div>
  <!-- Contact me submissions -->

    </main>
    <!--Content Container end-->

    <!-- Navbar Specific Scripts -->
    <?php include_once 'src/navbar.scripts.view.php'; ?>
  </body>
</html>