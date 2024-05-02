
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

                  <a href="resume.php" class="nav_link"> <i class='bx bx-spreadsheet nav_icon'></i><span
                  class="nav_name"><?php echo $navArray[5]; ?></span></a>

                  <a href="contact.php" class="nav_link"> <i class='bx bx-envelope nav_icon'></i><span
                  class="nav_name"><?php echo $navArray[6]; ?></span></a>

                  <a href="admin.php" class="nav_link"> <i class='bx bx-log-in-circle nav_icon' ></i><span
                  class="nav_name"><?php echo $navArray[7]; ?></span></a>

                  <a href="weather.php" class="nav_link"> <i class='bx bx-cloud nav_icon'></i><span
                  class="nav_name"><?php echo $navArray[8]; ?></span></a>

                  <a href="experience.php" class="nav_link"> <i class='bx bx-briefcase-alt-2'></i><span
                  class="nav_name"><?php echo $navArray[9]; ?></span></a>
          </div>
          

          </div>  
          <a href= <?php echo $personalGitHub; ?> target="_blank" class="nav_link"> 
          <i class='bx bxl-github nav_icon'></i> <span class="nav_name">My GitHub</span>
          </a>

      </nav>
    </div>