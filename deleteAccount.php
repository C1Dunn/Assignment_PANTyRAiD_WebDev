<?php
session_start();
include('connect.php');
$id = $_SESSION['id'];
//$sql = "DELETE FROM users WHERE id = '".$id."'";
$sql = $conn->prepare("DELETE FROM users WHERE id = ?");
$sql -> bind_param('s',$id);

if ($sql->execute()) 
{
  echo "Record deleted successfully";
} 
else 
{
  echo "Error deleting record: " .$sql. mysqli_error($conn);
}
header("Location:logoutAction.php");
mysqli_close($conn);
?>