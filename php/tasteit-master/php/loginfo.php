<?php
session_start();

if (isset($_POST["loginBtn"])) {
    $userInputemail = trim($_POST['loginemail']);
    $userInputpassword = base64_encode(trim($_POST['loginpassword']));

    $sql = "SELECT * FROM `signin` WHERE email = '$userInputemail' AND password = '$userInputpassword'";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($con));
    }

    $count = mysqli_num_rows($result);

    if ($count > 0) {
        $row = mysqli_fetch_array($result);

        if ($row['role'] == 'user') {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['useremail'] = $row['email'];
            header("Location: index.php");
            exit;
        } else {
            $_SESSION['adminemail'] = $row['email'];
            header("Location:dashboard/userinfo.php");
            exit;
        }
    } else {
        echo "<script>alert('Login failed'); window.location.href='login.php';</script>";
        exit;
    }
}
?>
