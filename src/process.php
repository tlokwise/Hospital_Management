<?php
require "db_inc.php";
session_start();
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$btn = $_POST['submit'];

if(empty($username) || empty($email) || empty($password)){
    die("Fill in All fields");
}
// if(filter_var($email, FILTER_VALIDATE_EMAIL)){
//     die("Invalid email address");
// }
if($conn->connect_error){
    die("Connection failed" . $conn->connect_error);
}else {
    $sql = "SELECT * FROM employees WHERE Username = '$username' AND Email = '$email' AND EmployeePassword = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if($row['Username'] == $username && $row['Email'] == $email && $row['EmployeePassword'] == $password){
        $_SESSION["username"] = $row['username'];
        $_SESSION['name'] = $row['EmployeeName'];
        $_SESSION['surname'] = $row['EmployeeSurname'];
        $_SESSION['profession'] = $row['Profession'];
        header("Location: home.php");
    }
    else {
        header("Location: index.html");
    }
}


mysqli_close($conn);