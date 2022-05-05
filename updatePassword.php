<?php
session_start();
  include('connect.php');

  if($_SERVER['REQUEST_METHOD'] === 'POST') 
  {
    $new = $conn -> real_escape_string($_POST['old']);
    $old = $conn -> real_escape_string($_POST['old']);
    $newHash = password_hash ($new, PASSWORD_BCRYPT);
    $oldHash = password_hash ($old, PASSWORD_BCRYPT);
    $id = $_SESSION['id'];
  }

  if($old != NULL && $new != NULL)
  {
    $sql = $conn->prepare("SELECT password FROM users WHERE id =?");
    $sql -> bind_param('s',$id);
    $sql -> execute();
    $sql -> store_result();
    $sql -> bind_result($password);
    $rows = $sql -> fetch();

    if(!empty($rows))
    {
      if(password_verify($old,$password))
      {
        $stmt = $conn -> prepare("UPDATE users SET password = ? WHERE password = ? AND id = ?");
        $stmt -> bind_param('sss',$newHash,$oldHash,$id);
        if($stmt -> execute())
        {
            $_SESSION['update']=1;
            header('Location:index.php');
        }
        else
        {
            echo"ERROR 3";
            header('Location:index.php');
        }
      }
      else
      {
        echo"ERROR 1";
        //header('Location:Index.php');
        header('Location:index.php');
      }   
    }
    else
    {
      echo"ERROR 2";
      //header('Location:Index.php');
      header('Location:index.php');
    }
  }
  mysqli_close($sql);
  mysqli_close($conn);
?>