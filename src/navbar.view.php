
    <!-- nav bar when closed  -->
    <div class="l-navbar" id="nav-bar">
      <nav class="nav">

          <div> 
            <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">
                <?php echo $name; ?></span> </a>
                          
                <!-- Nav bar links  -->
          <div class="nav_list">

            <a href="index.php" class="nav_link active"> <i class='bx bx-home nav_icon'></i> <span
                class="nav_name"><?php echo $navArray[0]; ?></span></a>

            <a href="assignments.php" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span
                class="nav_name"><?php echo $navArray[1]; ?></span>

              <a href="aboutme.php" class="nav_link"> <i class='bx bx-user nav_icon'></i><span class="nav_name"><?php echo $navArray[2]; ?></span></a>

              <a href="personalprojects.php" class="nav_link"> <i class='bx bx-cube nav_icon'></i><span
                  class="nav_name"><?php echo $navArray[3]; ?></span></a>

          </div>

          </div>  
          <a href= <?php echo $personalGitHub; ?> target="_blank" class="nav_link"> 
          <i class='bx bxl-github nav_icon'></i> <span class="nav_name">My GitHub</span>
          </a>

      </nav>
    </div>