<?php
session_start();

// Check if the user is already logged in, redirect to the home page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  header("location: home.php");
  exit;
}
// Variables and arrays | Data
include_once 'src/data.view.php';

// Head section
include_once 'src/head.view.php';
?>

  <body id="body-pd">
    
    <header class="header" id="header">
      <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
      <h1 id="course-title">Admin</h1>
      <div class="header_img">
        <img src="images/duckimg.png" alt="">
      </div>
    </header>

    <!-- navigation bar  -->
    <?php include_once 'src/navbar.view.php'; ?>

    <!--Content Container start-->
    <main>
            <form class="form-signin" data-bitwarden-watching="1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
                <img class="mb-4" src="images/duckimg.png" alt="" width="72" height="72">
            <div class="<?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span><?php echo $username_err; ?></span>
            </div>    
            <div class="<?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span><?php echo $password_err; ?></span>
            </div>
            <div>
                <input type="submit" class="btn btn-primary login-btn" value="Login">
            </div>
            </form>
    </main>
    <!--Content Container end-->

    <!-- Navbar Specific Scripts -->
    <?php include_once 'src/navbar.scripts.view.php'; ?>
  </body>

</html>