<?php


if(isset($_POST['Fbtnsubmit'])){

  $name = $_POST['Fname'];
  $email = $_POST['Femail'];
  $feedback = $_POST['Fmessage'];
  $userid = $_SESSION['user_id'];


  $query = "INSERT INTO `testimonals`( `name`, `email`, `feedback` , `userid`) VALUES ('$name','$email','$feedback', '$userid')";


  $result = mysqli_query($con, $query);
  if($result){
    echo "<script> alert('Feedback submitted successfully Thanks you.....')</script>";
  }
  else{
    echo "<script> alert('Feedback submitted UNsuccessfully')</script>";

}


  

    
}


