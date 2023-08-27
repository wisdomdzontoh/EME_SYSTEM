<?php
// Connect to the database
$host = "sql109.epizy.com";
$username = "epiz_33722902";
$password = "DgRYDMrBI3RPg";
$dbname = "epiz_33722902_hims";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the search query from the AJAX request
if (isset($_POST['search'])) {
    $filtervalues = $_POST['search'];

    // Prepare the SQL statement with a WHERE clause for searching
    $query = "SELECT * FROM patientregistration WHERE CONCAT(fullName, DOB, email, phoneNumber, gender, Occupation, opdNumber, age, ageGroup, clientStatus, NHISnumber, dateOfVisit, address, nationality, houseNumber, clientType, nameOfGuardian, phoneOfGuardian) LIKE '%$filtervalues%'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Display search results
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['fullName'] . "</td>";
            echo "<td>" . $row['DOB'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phoneNumber'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['Occupation'] . "</td>";
            echo "<td>" . $row['opdNumber'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['ageGroup'] . "</td>";
            echo "<td>" . $row['clientStatus'] . "</td>";
            echo "<td>" . $row['NHISnumber'] . "</td>";
            echo "<td>" . $row['dateOfVisit'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['nationality'] . "</td>";
            echo "<td>" . $row['houseNumber'] . "</td>";
            echo "<td>" . $row['clientType'] . "</td>";
            echo "<td>" . $row['nameOfGuardian'] . "</td>";
            echo "<td>" . $row['phoneOfGuardian'] . "</td>";
            // Add other table cells here
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='18'>No Record Found</td></tr>";
    }
}

// Close the database connection
mysqli_close($conn);
?>
