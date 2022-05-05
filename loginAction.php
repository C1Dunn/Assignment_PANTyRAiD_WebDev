<?php
session_start();
  include('connect.php');

  if($_SERVER['REQUEST_METHOD'] === 'POST') 
  {
    $submittedEmail = $conn -> real_escape_string($_POST['email']);
    $submittedPassword = $conn -> real_escape_string($_POST['password']);
  }

  if(isset($submittedEmail) && $submittedEmail != NULL)
  {
    $sql = $conn->prepare("SELECT id,password FROM users WHERE email =?");
    $sql -> bind_param('s',$submittedEmail);
    $sql -> execute();
    $sql -> store_result();
    $sql -> bind_result($id,$password);
    $rows = $sql -> fetch();

    if(!empty($rows))
    {
      if(password_verify($submittedPassword,$password))
      {
        echo"Login Successful";
        $_SESSION['id'] = $id;
        header('Location:index.php');
      }
      else
      {
        echo"Login Unsuccessful ";
        header('Location:index.php');
      }   
    }
    else
    {
      echo"Not found in database";
      header('Location:index.php');
    }
  }
  mysqli_close($sql);
  mysqli_close($conn);
?>