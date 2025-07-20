<?php
include '../php/connection.php';

if (isset($_GET['userid']) && is_numeric($_GET['userid'])) {
    $userid = intval($_GET['userid']); // sanitizing input

    $query = "DELETE FROM signin WHERE id = $userid";
    $result = mysqli_query($con, $query);

    if ($result) {
        header("Location: delete.php"); // adjust path if needed
        exit;
    } else {
        echo "Delete failed: " . mysqli_error($con);
    }
}
?>
