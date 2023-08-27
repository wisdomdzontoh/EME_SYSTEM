<?php include('dbconfig.php') ?>
<?php
// Retrieve form data
$fullName = $_POST['fullName'];
$opdNumber = $_POST['opdNumber'];
$NHISnumber = $_POST['NHISnumber'];
$dateOfVisit = $_POST['dateOfVisit'];
$age = $_POST['age'];
$ageGroup = $_POST['ageGroup'];
$phoneNumber = $_POST['phoneNumber'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$Provisional = $_POST['Provisional'];
$TypeOfTest = $_POST['TypeOfTest'];
$testResults = $_POST['testResults'];
$PrincipalDiagnosis = $_POST['PrincipalDiagnosis'];
$statusOfPrincipal = $_POST['statusOfPrincipal'];
$Additional1 = $_POST['Additional1'];
$statusOfAdditional1 = $_POST['statusOfAdditional1'];
$Additional2 = $_POST['Additional2'];
$statusOfAdditional2 = $_POST['statusOfAdditional2'];
$Additional3 = $_POST['Additional3'];
$statusOfAdditional3 = $_POST['statusOfAdditional3'];
$clientStatus = $_POST['clientStatus'];
$medicinePrescribed = $_POST['medicinePrescribed'];
$medicineDispensed = $_POST['medicineDispensed'];
$notes = $_POST['notes'];


// Prepare and bind the SQL statement
$sql = "INSERT INTO consulting_room (fullName, opdNumber, NHISnumber, dateOfVisit, age, ageGroup, phoneNumber, address, gender, Provisional, TypeOfTest, testResults, PrincipalDiagnosis, statusOfPrincipal, Additional1, statusOfAdditional1, Additional2, statusOfAdditional2, Additional3, statusOfAdditional3, clientStatus, medicinePrescribed, medicineDispensed, notes) 
VALUES ('$fullName', '$opdNumber', '$NHISnumber', '$dateOfVisit', '$age', '$ageGroup', '$phoneNumber', '$address', '$gender', '$Provisional', '$TypeOfTest', '$testResults', '$PrincipalDiagnosis', '$statusOfPrincipal', '$Additional1', '$statusOfAdditional1', '$Additional2', '$statusOfAdditional2', '$Additional3', '$statusOfAdditional3', '$clientStatus', '$medicinePrescribed', '$medicineDispensed', '$notes')";

// check if the user was successfully inserted
if (mysqli_query($conn, $sql)) {
	header("Location: consultingroom.php");
  exit();
} else {
  // display an error message
  echo "Error: " . mysqli_error($conn);
}


    
// Close the database connection
mysqli_close($conn);
?>
 