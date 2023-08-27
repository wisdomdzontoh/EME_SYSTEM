<?php include('dbconfig.php') ?>
<?php

// Retrieve the search query from the AJAX request
if (isset($_POST['search'])) {
    $filtervalues = $_POST['search'];

    // Prepare the SQL statement with a WHERE clause for searching
    $query = "SELECT * FROM consulting_room WHERE CONCAT(fullName, opdNumber, NHISnumber, dateOfVisit, age, ageGroup, phoneNumber, address, gender, Provisional, TypeOfTest, testResults, PrincipalDiagnosis, statusOfPrincipal, Additional1, statusOfAdditional1, Additional2, statusOfAdditional2, Additional3, statusOfAdditional3, clientStatus, medicinePrescribed, medicineDispensed, notes) LIKE '%$filtervalues%'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Display search results
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['fullName'] . "</td>";
            echo "<td>" . $row['opdNumber'] . "</td>";
            echo "<td>" . $row['NHISnumber'] . "</td>";
            echo "<td>" . $row['dateOfVisit'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['ageGroup'] . "</td>";
            echo "<td>" . $row['phoneNumber'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['Provisional'] . "</td>";
            echo "<td>" . $row['TypeOfTest'] . "</td>";
            echo "<td>" . $row['testResults'] . "</td>";
            echo "<td>" . $row['PrincipalDiagnosis'] . "</td>";
            echo "<td>" . $row['Additional1'] . "</td>";
            echo "<td>" . $row['statusOfAdditional1'] . "</td>";
            echo "<td>" . $row['Additional2'] . "</td>";
            echo "<td>" . $row['statusOfAdditional2'] . "</td>";
            echo "<td>" . $row['Additional3'] . "</td>";
            echo "<td>" . $row['statusOfAdditional3'] . "</td>";
            echo "<td>" . $row['clientStatus'] . "</td>";
            echo "<td>" . $row['medicinePrescribed'] . "</td>";
             echo "<td>" . $row['medicineDispensed'] . "</td>";
            echo "<td>" . $row['notes'] . "</td>";
            // Add other table cells here
            echo "</tr>";
                    }
    } else {
        echo "<tr><td colspan='25'>No Record Found</td></tr>";
    }
}

// Close the database connection
mysqli_close($conn);
?>
                                                
                                                    
                                                   