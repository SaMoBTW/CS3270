<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  // Function to logout
  function logout()
  {
    // Unset all of the session variables
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

    // Destroy the session
    session_destroy();

    // Redirect to the login page
    header("location: admin.php");
    exit;
  }

  // Check if logout button is clicked
  if (isset($_POST['logout'])) {
    logout();
  }
}

// session_start();

// // Check if the user is not logged in, redirect to the login page
// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
//   header("location: admin.php");
//   exit;
// }
?>

<?php

// Variables and arrays | Data
include_once 'src/data.view.php';

// Head section
include_once 'src/head.view.php';
?>

  <body id="body-pd">
    
    <header class="header" id="header">
      <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
      <h1 id="course-title"><?php echo ucfirst($_SESSION["username"]); ?>'s Admin page</h1>
      <div class="header_img">
        <img src="images/duckimg.png" alt="">
      </div>
              <!-- <form method="post" class="logout-form">
          <button type="submit" name="logout">Logout</button>
        </form> -->
    </header>

    <!-- navigation bar  -->
    <?php include_once 'src/navbar.view.php'; ?>

    <!--Content Container start-->
    <main>
      
        <!-- <p><a href="admin.php">Logout</a></p> -->
        <!-- <form method="post" class="logout-form">
          <button type="submit" name="logout">Logout</button>
        </form> -->
        <!-- <button id="submitButton">Submit</button> -->
        
 <div class="container">
    <div class="row">
      <!-- Create Form -->
      <div class="col">
        <form method="post" action="/src/create.post.php">
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
      <div class="col">
        <form>
          <h3 class="text-center">Delete Post</h3>
          <div class="mb-3">
            <label for="exampleInputEmail2" class="form-label">PLACEHOLDER</label>
            <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail2" class="form-label">PLACEHOLDER</label>
            <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlTextarea2" class="form-label">PLACEHOLDER</label>
            <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
          </div>

          <div class="mb-3">
            <div class="input-group">
              <span class="input-group-text" id="basic-addon4">PLACEHOLDER</span>
              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
            </div>
          </div>

          <div class="mb-3">
            <input class="form-control" type="file" id="formFile">
          </div>

          <button type="submit" class="btn btn-primary">Delete</button>
        </form>
      </div>
    </div>
  </div>

    </main>
    <!--Content Container end-->

    <!-- Navbar Specific Scripts -->
    <?php include_once 'src/navbar.scripts.view.php'; ?>
  </body>

</html>