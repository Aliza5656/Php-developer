

<?php



if(isset($_POST['contactbtn'])){
$name = $_POST['Ctname'];
$email = $_POST['Ctemail'];
$subject = $_POST['Ctsubject'];
$message = $_POST['Ctmessage'];
$userid = $_SESSION['user_id'];




$query = "INSERT INTO contact (`name`, email, `subject`, `message` , `user_id`) VALUES ('$name', '$email', '$subject', '$message' , '$userid')";
$result = mysqli_query($con, $query);
if($result){

    echo "
    <script> alert('Your message has been sent successfully')</script>";
    }else{
        echo 
        " <script> alert('Your message has not been sent')</script>";
        }
}