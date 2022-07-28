<?php
include_once "/xampp/htdocs/Hospital_Management/src/db_inc.php";
$inputName = $_POST['name'];
$inputEmail = $_POST['email'];
$inputPassword = $_POST['passcode'];

if(empty($inputName) || empty($inputEmail) || empty($inputPassword)){
    die("All fields required");
}
if(! filter_var($inputEmail, FILTER_VALIDATE_EMAIL)){
    die("Invalid email");
}
if(strlen($inputPassword) < 8){
    die("Passcode must not be less than 8 characters");
}
if(! preg_match("/[a-z]/i", $inputPassword) || !preg_match("/[0-9]/", $inputPassword)){
    die("Password must contain atleast one letter and one number");
}

if($dbConnection->connect_error){
    echo "$dbConnection->connect_error";
    die("Connection failed" . $dbConnection->connect_error);
}else{
    $sqlStatement = "SELECT * FROM employees
        WHERE Email = '$inputEmail'AND EmployeePassword = '$inputPassword'";

    $result = mysqli_query($dbConnection, $sqlStatement);
    $row = mysqli_fetch_array($result);
    if($row['Email'] == $inputEmail && $row['EmployeePassword'] == $inputPassword){
        print_r($row);
        header("Location: phakathi.html");
    }
    else{
        header("Location: index.html");
        die("Login Failed");
    }
}













// =========================================
// ========TO USE IN SIGN UP FORM===========
// =========================================
mysqli_close($dbConnection);
?>