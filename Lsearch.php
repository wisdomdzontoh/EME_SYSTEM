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
    $query = "SELECT * FROM consulting_room WHERE CONCAT(fullName, opdNumber, NHISnumber, dateOfVisit, age, ageGroup, phoneNumber, address, gender, Provisional, TypeOfTest, testResults, PrincipalDiagnosis, statusOfPrincipal, Additional1, statusOfAdditional1, Additional2, statusOfAdditional2, Additional3, statusOfAdditional3, clientStatus, medicinePrescribed, medicineDispensed, notes) LIKE '%$filtervalues%'";
    $result = mysqli_query($conn, $query);

    // Generate an array of client data
    $clients = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $clients[] = $row;
        }
    }

    // Return the client data as a JSON response
    echo json_encode($clients);
}

// Close the database connection
$conn->close();
?>
