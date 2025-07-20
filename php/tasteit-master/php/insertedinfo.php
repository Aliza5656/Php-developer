<?php

session_start();
if (isset($_POST['Rbtnregister'])) {

    $name = $_POST['Rname'];
    $email = $_POST['Remail'];
    $password = base64_encode($_POST['Rpassword']);
    $number = $_POST['RNumber'];
    $DOB = $_POST['RDOB'];
    $country = $_POST['Rcountry'];
    $gender = $_POST['Rgender'];

    $userimages = $_FILES['Rimages']['name'];
    $tempname = $_FILES['Rimages']['tmp_name'];

    $path = "Userimages/";
    $savimage = $path . $userimages;
 (move_uploaded_file($tempname, $savimage)) ;

$checkQuery = "SELECT * FROM signin WHERE email = '$email'";
$checkResult = mysqli_query($con, $checkQuery);

if (mysqli_num_rows($checkResult) ) {
    echo "<script>alert('Email already registered');</script>";
} 


    $query = "INSERT INTO `signin` (`name`, `email`, `password`, `Number`, `date of birth`, `country`, `Gender`, `image` , `role`)
              VALUES ('$name', '$email', '$password', '$number', '$DOB', '$country', '$gender', '$userimages' , 'user')";

    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>alert('Registration Successful');</script>";
        header('location:login.php');
    } else {
        echo "<script>alert('Registration Failed');</script>";
    }
}

?>
