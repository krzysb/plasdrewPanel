<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" />
    <style>
        body {
            background: -webkit-linear-gradient(bottom left, rgba(32, 201, 151, 0.3), rgba(23, 162, 184, 0.3)), url(img/logo_plas_drew.png)no-repeat center / contain;
            background: -o-linear-gradient(bottom left, rgba(32, 201, 151, 0.3), rgba(23, 162, 184, 0.3)), url(img/logo_plas_drew.png)no-repeat center / contain;
            background: linear-gradient(to top right, rgba(32, 201, 151, 0.3), rgba(23, 162, 184, 0.3)), url(img/logo_plas_drew.png)no-repeat center / contain;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <?php
        require('admin/connection.php');
        session_start();
        // If form submitted, insert values into the database.
        if (isset($_POST['username'])){
            // removes backslashes
            $username = stripslashes($_REQUEST['username']);
            //escapes special characters in a string
            $username = mysqli_real_escape_string($con,$username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con,$password);
            //Checking is user existing in the database or not
            $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
            $result = mysqli_query($con,$query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
            if($rows==1){
                $_SESSION['username'] = $username;
                // Redirect user to index.php
                header("Location: index.php");
            }else{
                echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
            }
        }else{
        ?>
        <div class="form login">
            <h1>Zaloguj się</h1>
            <form action="" method="post" name="login">
                <input type="text" name="username" placeholder="Nazwa" required />
                <input type="password" name="password" placeholder="Hasło" required />
                <input name="submit" type="submit" value="Zaloguj" /> </form>
        </div>
        <?php } ?>
</body>

</html>