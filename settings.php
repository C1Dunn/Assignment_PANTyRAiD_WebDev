<html>
    <head>
    <?php include("header.php"); ?>
    </head>
    <body class="parallax">
    <div class="container" id="main">
        <button type="button" class="btn btn-success btn-lg btn-block btn-active" data-toggle="button" aria-pressed="true" id="updateBTN">UPDATE</button>
        <p class="text-center">OR</p>
        <button type="button" class="btn btn-danger btn-lg btn-block" data-toggle="button" id="deleteBTN">DELETE</button>
        <div id="update">
            <h2>SETTINGS:</h2>
            <h3>Change Password:</h3>
            <form method="POST" action="updatePassword.php">
                <p>Old Password:</p>
                <input id="formSubmit" name="old"type="password">
                <p>New Password:</p>
                <input id="formSubmit" name="new"type="password">
                <br>
                <br>
                <input id="formSubmit" type="submit">
            </form>
        </div>
        <div id="delete">
            <button><h3><a href="deleteAccount.php">DELETE ACCOUNT</a></h3></button>
            <p id="smallText">Warning: This will permanantly delete your account without asking twice.</p>
        </div>
    </div>
    </body>
</html> 