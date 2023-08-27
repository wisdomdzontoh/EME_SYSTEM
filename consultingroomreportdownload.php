<?php include('dbconfig.php') ?>
<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];

    // Create the SQL query
    $sql = "SELECT * FROM consulting_room WHERE dateOfVisit BETWEEN '$startDate' AND '$endDate'";

    // Execute the query
    $result = $conn->query($sql);

    // Check if any rows are returned
    if ($result->num_rows > 0) {
        // Set the response headers for CSV file download
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="data.csv"');

        // Create a file pointer connected to the output stream
        $output = fopen('php://output', 'w');

        // Write the CSV column headers
        $columnHeaders = array('id', 'Full name', 'OPD number', 'NHIS number', 'Date of visit', 'Age', 'Age Group', 'Phone Number', 'Address', 'Gender', 'Provisional Diagnosis', 'Type Of Test requested', 'Test Results', 'Principal Diagnosis', 'status Of Principal Diagnosis', '1st Additional diagnosis', 'status Of 1st Additional diagnosis', '2nd Additional diagnosis', 'status Of 2nd Additional diagnosis', '3rd Additional diagnosis', 'status Of 3rd Additional diagnosis', 'NHIS Status', 'medicine Prescribed', 'medicine Dispensed', 'notes'); // Replace with your actual column names
        fputcsv($output, $columnHeaders);

        // Iterate over the result set and write data to the CSV file
        while ($row = $result->fetch_assoc()) {
            // Adjust the column names based on your table structure
            $rowData = array($row['id'], $row['fullName'], $row['opdNumber'], $row['NHISnumber'], $row['dateOfVisit'], $row['age'],$row['ageGroup'], $row['phoneNumber'], $row['address'],$row['gender'], $row['Provisional'], $row['TypeOfTest'],$row['testResults'], $row['PrincipalDiagnosis'], $row['statusOfPrincipal'], $row['Additional1'],$row['statusOfAdditional1'], $row['Additional2'], $row['statusOfAdditional2'], $row['Additional3'], $row['statusOfAdditional3'], $row['clientStatus'], $row['medicinePrescribed'], $row['medicineDispensed'], $row['notes'],); // Replace with your actual column names
            fputcsv($output, $rowData);
        }

        // Close the file pointer
        fclose($output);
    } else {
        echo "No data found for the selected date range.";
    }
}

// Close the database connection
$conn->close();
?>











