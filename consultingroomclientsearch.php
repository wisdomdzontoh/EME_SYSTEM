<?php include('dbconfig.php') ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="tables.css">
        
     <!-- ===== Boxicons CSS ===== -->
     <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
     <!--CSS SIDE NAV BAR-->
     <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>Search patients</title>
</head>
<style>

</style>
<body>
 
  
<!--NAVBAR-->

    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen' ></i>
            <span class="logo navLogo"><a href="#">CONSULTING ROOM SEARCH</a></span>
            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="#">CONSULTING ROOM SEARCH</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>
                <ul class="nav-links">
                    <li><a href="#">Search</a></li>
                    <li><a href="consultingroom.php">consulting</a></li>
                    <li><a href="#">lab</a></li>
                    <li><a href="#">Pharmacy</a></li>
                    <li><a href="#">ANC</a></li>
                </ul>
            </div>
            <div class="darkLight-searchBox">
                <div class="dark-light">
                    <i class='bx bx-moon moon'></i>
                    <i class='bx bx-sun sun'></i>
                </div>
                <div class="searchBox">
                   <div class="searchToggle">
                    <i class='bx bx-x cancel'></i>
                    <i class='bx bx-search search'></i>
                   </div>
                    <div class="search-field">
                        <input type="text" id="search" placeholder="Search...">
                        <i class='bx bx-search'></i>
                    </div>
                </div>



            </div>
        </div>
    </nav>
<!---->

<br>

</br>
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-body">
                    <table id="customers" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full name</th>
                            <th>Opd Number</th>
                            <th>NHIS number</th>
                            <th>Date of visit</th>
                            <th>Age</th>
                            <th>Age group</th>
                            <th>Phone number</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>Provisional Diagnosis</th>
                            <th>Type of test</th>
                            <th>Test results</th>
                            <th>Principal Diagnosis</th>
                            <th>Status of Principal diagnosis</th>
                            <th>1st Additional Diagnosis</th>
                            <th>Status of 1st Additional diagnosis</th>
                            <th>2nd Additional Diagnosis</th>
                            <th>Status of 2nd Additional diagnosis</th>
                            <th>3rd Additional Diagnosis</th>
                            <th>Status of 3rd Additional diagnosis</th>
                            <th>NHIS status</th>
                            <th>Medicines prescribed</th>
                            <th>Medicines dispensed</th>
                            <th>Food Notes</th>
                            <!-- Add other table headers here -->
                        </tr>
                        </thead>
                        <tbody id="search-results">
                        <!-- Display search results here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<form action="generate_report.php" method="POST">
  <label for="start_date">Start Date:</label>
  <input type="date" id="start_date" name="start_date" required>

  <label for="end_date">End Date:</label>
  <input type="date" id="end_date" name="end_date" required>

  <button type="submit">Generate Report</button>
</form>-->

<!-- HTML form for selecting the start and end date -->
<form method="post" action="consultingroomreportdownload.php">
    <label for="start_date">Start Date:</label>
    <input type="date" name="start_date" required>
    <label for="end_date">End Date:</label>
    <input type="date" name="end_date" required>
    <input type="submit" name="submit" value="Download CSV">
</form>
 

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    $(document).ready(function () {
        // Trigger search on keyup event
        $('#search').keyup(function () {
            var filtervalues = $(this).val();

            // Send AJAX request to search.php
            $.ajax({
                url: 'consultingroomsearch.php',
                method: 'POST',
                data: {search: filtervalues},
                success: function (response) {
                    $('#search-results').html(response);
                }
            });
        });
    });
    /*NAVBAR JS CODE*/

const body = document.querySelector("body"),
      nav = document.querySelector("nav"),
      modeToggle = document.querySelector(".dark-light"),
      searchToggle = document.querySelector(".searchToggle"),
      sidebarOpen = document.querySelector(".sidebarOpen"),
      siderbarClose = document.querySelector(".siderbarClose");
      let getMode = localStorage.getItem("mode");
          if(getMode && getMode === "dark-mode"){
            body.classList.add("dark");
          }
// js code to toggle dark and light mode
      modeToggle.addEventListener("click" , () =>{
        modeToggle.classList.toggle("active");
        body.classList.toggle("dark");
        // js code to keep user selected mode even page refresh or file reopen
        if(!body.classList.contains("dark")){
            localStorage.setItem("mode" , "light-mode");
        }else{
            localStorage.setItem("mode" , "dark-mode");
        }
      });
// js code to toggle search box
        searchToggle.addEventListener("click" , () =>{
        searchToggle.classList.toggle("active");
      });
 
      
//   js code to toggle sidebar
sidebarOpen.addEventListener("click" , () =>{
    nav.classList.add("active");
});
body.addEventListener("click" , e =>{
    let clickedElm = e.target;
    if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){
        nav.classList.remove("active");
    }
});

</script>
</body>
</html>