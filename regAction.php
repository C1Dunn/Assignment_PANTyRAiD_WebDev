<?php
session_start();
include('connect.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') 
   {
    $submittedEmail = $conn -> real_escape_string($_POST["email"]);
    $submittedPassword = $conn -> real_escape_string($_POST["password"]);
    $hashedPasswordBCRYPT= password_hash ( $submittedPassword, PASSWORD_BCRYPT);
   }

    if(isset($submittedEmail) && $submittedEmail != NULL)
    {
    //Inserts into database
    //$sql = "INSERT INTO users (email,password)
    //VALUES ('$submittedEmail','$hashedPasswordBCRYPT')";
    $sql = $conn->prepare("INSERT INTO users (email,password) VALUES (?,?)");
    $sql -> bind_param('ss',$submittedEmail,$hashedPasswordBCRYPT);

        if ($sql -> execute()) 
        {
            echo "New record created successfully";
             header("Location:index.php");
            $_POST = array();
            exit;
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
            header("Location:index.php");
            $_POST = array();
        }
    }
    else 
    {
        echo" ERROR WITH EMAIL";
        header("Location:index.php");
    }
mysqli_close($conn);
?>