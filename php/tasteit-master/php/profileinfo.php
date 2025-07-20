<?php


// First, get the user ID from the session
if (isset($_SESSION['user_id'])) {
  $userid = $_SESSION['user_id'];
} else {
  echo "<script>alert('User not logged in!');</script>";
  exit();
}

// Fetch the user data
$query = "SELECT * FROM `signin` WHERE id = '$userid'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

// Handle form submission
if (isset($_POST['profilebtn'])) {
  $name = $_POST['pname'];
  $email = $_POST['pemail'];
  $password = base64_encode($_POST['ppassword']);
  $number = $_POST['pNumber'];
  $date = $_POST['pDOB'];
  $country = $_POST['pcountry'];
  $gender = $_POST['pgender'];

  $userimages = $_FILES["udfile"]["name"];
  $tempname = $_FILES["udfile"]["tmp_name"];

  // If new image is uploaded
  if ($userimages != "") {
    $path = "Userimages/";
    $saveimg = $path . $userimages;
    if (move_uploaded_file($tempname, $saveimg)) {
      $update = "UPDATE `signin` SET 
        `image`='$userimages',
        `name`='$name',
        `email`='$email',
        `password`='$password',
        `Number`='$number',
        `date of birth`='$date',
        `country`='$country',
        `Gender`='$gender' 
        WHERE id = '$userid'";

      if (mysqli_query($con, $update)) {
        echo "<script>alert('Record Updated with new image'); window.location='profile.php';</script>";
      } else {
        echo "<script>alert('Record Update Failed');</script>";
      }
    } else {
      echo "<script>alert('Error uploading image');</script>";
    }
  } else {
    // If no new image is uploaded
    $update = "UPDATE `signin` SET 
      `name`='$name',
      `email`='$email',
      `password`='$password',
      `Number`='$number',
      `date of birth`='$date',
      `country`='$country',
      `Gender`='$gender' 
      WHERE id = '$userid'";

    if (mysqli_query($con, $update)) {
      echo "<script>alert('Record Updated'); window.location='profile.php';</script>";
    } else {
      echo "<script>alert('Record Update Failed');</script>";
    }
  }
}
?>