<?php
session_start();
if($_SESSION['id'] != NULL && isset($_SESSION['id']) && $_SESSION['id'] === 1)
{
    echo"1";
}
else if($_SESSION['id'] != NULL && isset($_SESSION['id']))
{
    echo"2";
}
else
{
    echo"0";
}
?>