<?php
session_start();
if($_SESSION['update'] > 0)
{
    ?>
    <script type="text/javascript" src="password.js" ></script>
    <?php
    $_SESSION['update'] = 0;
}
?>
<html>
    <head>
        <?php include('header.php')?>
    </head>
    <body class="parallax">
        <div id="navbar"><?php include('navbar.php');?></div>
        <div id="news"><?php include('news.php');?></div>
        <div id="songs"><?php include('songs.php');?></div>
        <div id="settings"><?php include('settings.php');?></div>
        <div id="login"><?php include('login.php');?></div>
        <div id="register"><?php include('register.php');?></div>
        <div id="privacy"><?php include('privacy.php');?></div>
    </body>
    <!-- Javascript includes --> 
    <script type="text/javascript" src="navbarScripts.js" ></script>
    <script type="text/javascript" src="settingScripts.js" ></script>
    <footer>
        <?php include('footer.php');?>
    </footer>
</html>
<?php
mysqli_close($conn);
?>