<?php
$pageTitle = 'Account';
include 'includes/header.php';
include 'includes/nav.php';
?>
<!-- START page body -->
<?php
session_start();

//require_once 'credentials.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //Check if we have the submited username with the submited password
    foreach ($users as $user) {
        if ($user['username'] == $_POST['username'] && $user['pass'] == $_POST['pass']) {
            $_SESSION['username'] = $user['username'];
        }
    }

    if (!array_key_exists('username', $_SESSION)) {
        $message = 'Invalid username or password';
    } else {
        header('Location: index.php');
       
        exit();
    }
}
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <br/>
        <div class="login_tile">
        <h1>Login</h1>
        <p><?= $message ?></p>
        <form action="" method="POST">
            Username: <input type="text" name="username" value=""/>
            <br/><br/>
            Password: <input type="password" name="pass"  value=""/>
            <br/><br/>
            <input type="submit" value="Submit"/>
<!--            <div class="remember"> </div>
            <div class="rememberpass">
                <input type="checkbox" name="rememberusername" id="rememberusername" value="1" checked="checked" />
                <label for="rememberusername">Remember username</label>
            </div>
            <div class="remember"> </div>-->
        </form>
        </div>
        <br/>
    </body>
</html>
<!-- END page body -->
<?php
include 'includes/footer.php';
?>