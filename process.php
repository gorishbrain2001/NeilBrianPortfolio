<?php
include('config.php');
if (isset($_POST["create"])) {
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $subject = mysqli_real_escape_string($conn, $_POST["subject"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);
    $sqlInsert = "INSERT INTO contact_us(fname , email , subject , message) VALUES ('$fname','$email','$subject', '$message')";
    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Book Added Successfully!";
        header("Location:index.php");
    }else{
        die("Something went wrong");
    }
}
?>