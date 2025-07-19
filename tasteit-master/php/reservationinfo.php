<?php


if(isset($_POST['Reservationbtn'])){
    
    $name = $_POST['Rname'];
    $email = $_POST['Remail'];
    $phone = $_POST['Rphone'];
    $date = $_POST['Rdate'];
    $time = $_POST['Rtime'];
    $userid = $_SESSION['user_id']; // This must exist in session!

    
    $query = "INSERT INTO `reservation` (`name`, `email`, `phone`, `date`, `time`, `user_id`) 
              VALUES ('$name', '$email', '$phone', '$date', '$time', '$userid')";

    $result = mysqli_query($con, $query);

    if($result){
        echo "<script> alert('Your reservation has been sent successfully.')</script>";
    } else {
        echo "<script> alert('Your reservation has not been sent.')</script>";
    }
}
?>
