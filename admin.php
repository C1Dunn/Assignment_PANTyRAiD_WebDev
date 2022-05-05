<?php
session_start();
?>
<html>
    <head>
        <?php include('header.php')?>
    </head>
    <body class="parallax">
        <button><a href="index.php">BACK</a></button>
        <h1>ADMIN</h2>
        <h3>Click for a surprise you special admin user!!!!</h3>
        <div class="container" id="main">
            <button type="button" onclick="readFile();">Click HERE YaY</button>
            <p id="text"></p>
        </div>
        
        <!-- Javascript includes --> 
    <script type="text/javascript" src="adminScripts.js"></script>
    </body>
    <footer>
        <?php include('footer.php');?>
    </footer>
</html>
<?php
mysqli_close($conn);
?>