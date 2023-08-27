<?php
include('dbconfig.php');

// Retrieve form data
$fullName = $_POST['fullName'];
$DOB = $_POST['DOB'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$gender = $_POST['gender'];
$Occupation = $_POST['Occupation'];
$opdNumber = $_POST['opdNumber'];
$age = $_POST['age'];
$ageGroup = $_POST['ageGroup'];
$clientStatus = $_POST['clientStatus'];
$NHISnumber = $_POST['NHISnumber'];
$dateOfVisit = $_POST['dateOfVisit'];
$address = $_POST['address'];
$nationality = $_POST['nationality'];
$houseNumber = $_POST['houseNumber'];
$clientType = $_POST['clientType'];
$nameOfGuardian = $_POST['nameOfGuardian'];
$phoneOfGuardian = $_POST['phoneOfGuardian'];

// Prepare and bind the SQL statement
$stmt = mysqli_prepare($conn, "INSERT INTO patientregistration (fullName, DOB, email, phoneNumber, gender, Occupation, opdNumber, age, ageGroup, clientStatus, NHISnumber, dateOfVisit, address, nationality, houseNumber, clientType, nameOfGuardian, phoneOfGuardian) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

mysqli_stmt_bind_param($stmt, "sssssssissssssssss", $fullName, $DOB, $email, $phoneNumber, $gender, $Occupation, $opdNumber, $age, $ageGroup, $clientStatus, $NHISnumber, $dateOfVisit, $address, $nationality, $houseNumber, $clientType, $nameOfGuardian, $phoneOfGuardian);

if (mysqli_stmt_execute($stmt)) {
    // Display the success message if available
    $message = $_GET['message'] ?? '';
    if ($message === 'success') {
        // JavaScript code to display the pop-up
        ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal({
                title: "Success",
                text: "Client registered successfully",
                icon: "success",
                button: "Okay",
            });
        </script>
        <?php
    }

    // Redirect or perform any other actions
    header("Location: registrationpatient.php");
    exit();
} else {
    // Form submission failed
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
