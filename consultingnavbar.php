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
                <span class="navlink">Home</span>
                <i class="bx bx-chevron-right arrow-left"></i>
              </div>
              <ul class="menu_items submenu">
                <a href="consultingroomclientsearch.php" class="nav_link sublink">Search for clients</a>
                <a href="" class="nav_link sublink">Lab results</a>
                <a href="#" class="nav_link sublink">Nav Sub Link</a>
                <a href="#" class="nav_link sublink">Nav Sub Link</a>
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
                <span class="navlink">Overview</span>
                <i class="bx bx-chevron-right arrow-left"></i>
              </div>
              <ul class="menu_items submenu">
                <a href="#" class="nav_link sublink">Nav Sub Link</a>
                <a href="#" class="nav_link sublink">Nav Sub Link</a>
                <a href="#" class="nav_link sublink">Nav Sub Link</a>
                <a href="#" class="nav_link sublink">Nav Sub Link</a>
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
                <span class="navlink">Magic build</span>
              </a>
            </li>
            <!-- End -->
            <li class="item">
              <a href="#" class="nav_link">
                <span class="navlink_icon">
                  <i class="bx bx-loader-circle"></i>
                </span>
                <span class="navlink">Filters</span>
              </a>
            </li>
            <li class="item">
              <a href="#" class="nav_link">
                <span class="navlink_icon">
                  <i class="bx bx-filter"></i>
                </span>
                <span class="navlink">Filter</span>
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