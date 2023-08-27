<?php
session_start(); // Start the session to access session variables

// Check if the user is logged in
if(isset($_SESSION['username'])) {
    $loggedInUsername = $_SESSION['username'];
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: login.php");
    exit();
}
?>
  <link rel="icon" type="image/x-icon" href="house.png">
    <nav class="navbar">
        <div class="logo_item">
          <i class="bx bx-menu" id="sidebarOpen"></i>
          <img src="programmer.png" alt=""></i>GLOBAL HEALTH TECHNOLOGY
        </div>
        <div class="navbar_content">
          <i class="bi bi-grid"></i>
          <i class='bx bx-sun' id="darkLight"></i>
          <i class='bx bx-bell' ></i>
          <div class="top-right">
        Welcome, <?php echo $loggedInUsername; ?>! <!-- Display the logged-in username -->
        <a href="logout.php">Logout</a> <!-- Provide a link to log out -->
    </div>
          <img src="programmer.png" alt="" class="profile" />
          <button class="sumbit">
        <span> <a href="logout.php" class="btnText" id = "logout-button" type="submit" class="btnText" onclick="return confirmlogout();">Logout</a></span>
        <i class="uil uil-navigator"></i>
</button>
        </div>
      </nav>
      <!-- sidebar -->
      <nav class="sidebar">
        <div class="menu_content">
          <ul class="menu_items">
            <div class="menu_title menu_dahsboard" ></div>
            <!-- duplicate or remove this li tag if you want to add or remove navlink with submenu -->
            <!-- start -->
            <li class="item">
              <div href="#" class="nav_link submenu_item">
                <span class="navlink_icon">
                  <i class="bx bx-home-alt"></i>
                </span>
                <span class="navlink">Patient</span>
                <i class="bx bx-chevron-right arrow-left"></i>
              </div>
              <ul class="menu_items submenu">
                <a href="patientsearch.html" class="nav_link sublink">Search clients</a>
                <a href="#" class="nav_link sublink">Add patient</a>
                <a href="#" class="nav_link sublink">patient details</a>
                <a href="#" class="nav_link sublink">Total patient</a>
              </ul>
            </li>
            <!-- end -->
            <!-- duplicate this li tag if you want to add or remove  navlink with submenu -->
            <!-- start -->
            <li class="item">
              <div href="#" class="nav_link submenu_item">
                <span class="navlink_icon">
                  <i class="bx bx-grid-alt"></i>
                </span>
                <span class="navlink">Consultation</span>
                <i class="bx bx-chevron-right arrow-left"></i>
              </div>
              <ul class="menu_items submenu">
                <a href="consultingroom.php" class="nav_link sublink">add diagnosis</a>
                <a href="#" class="nav_link sublink">axamine</a>
                <a href="#" class="nav_link sublink">lab results</a>
                <a href="#" class="nav_link sublink">History</a>
              </ul>
            </li>
            <!-- end -->
          </ul>
          <ul class="menu_items">
            <div class="menu_title menu_editor"></div>
            <!-- duplicate these li tag if you want to add or remove navlink only -->
            <!-- Start -->
            <li class="item">
              <a href="#" class="nav_link">
                <span class="navlink_icon">
                  <i class="bx bxs-magic-wand"></i>
                </span>
                <span class="navlink">Laboratory</span>
              </a>
            </li>
            <!-- End -->
            <li class="item">
              <a href="#" class="nav_link">
                <span class="navlink_icon">
                  <i class="bx bx-loader-circle"></i>
                </span>
                <span class="navlink">Lab tests</span>
              </a>
            </li>
            <li class="item">
              <a href="#" class="nav_link">
                <span class="navlink_icon">
                  <i class="bx bx-filter"></i>
                </span>
                <span class="navlink">Accounts</span>
              </a>
            </li>
            <li class="item">
              <a href="#" class="nav_link">
                <span class="navlink_icon">
                  <i class="bx bx-cloud-upload"></i>
                </span>
                <span class="navlink">Upload new</span>
              </a>
            </li>
          </ul>
          <ul class="menu_items">
            <div class="menu_title menu_setting"></div>
            <li class="item">
              <a href="#" class="nav_link">
                <span class="navlink_icon">
                  <i class="bx bx-flag"></i>
                </span>
                <span class="navlink">Notice board</span>
              </a>
            </li>
            <li class="item">
              <a href="#" class="nav_link">
                <span class="navlink_icon">
                  <i class="bx bx-medal"></i>
                </span>
                <span class="navlink">Award</span>
              </a>
            </li>
            <li class="item">
              <a href="#" class="nav_link">
                <span class="navlink_icon">
                  <i class="bx bx-cog"></i>
                </span>
                <span class="navlink">Setting</span>
              </a>
            </li>
            <li class="item">
              <a href="#" class="nav_link">
                <span class="navlink_icon">
                  <i class="bx bx-layer"></i>
                </span>
                <span class="navlink">Features</span>
              </a>
            </li>
          </ul>
          <!-- Sidebar Open / Close -->
          <div class="bottom_content">
            <div class="bottom expand_sidebar">
              <span> Expand</span>
              <i class='bx bx-log-in' ></i>
            </div>
            <div class="bottom collapse_sidebar">
              <span> Collapse</span>
              <i class='bx bx-log-out'></i>
            </div>
          </div>
        </div>
      </nav>
<script>
includeHTML();
</script>