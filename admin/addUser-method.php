<?php 
if (isset($_REQUEST['username'])){
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con,$username); 
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    $trn_date = date("Y-m-d H:i:s");
    $role=$_POST['role'];
    $query = "INSERT into `users` (username, password, email, trn_date, role )
VALUES ('$username', '".md5($password)."', '$email', '$trn_date', '$role')";
    $result = mysqli_query($con,$query);
    if($result){
?>
    <div class="newUser">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Sukcess!</h4>
            <p> Pomyślnie dodano użytkownika </p>
            <input type="button" value="OK" onclick="window.location.href = 'index.php'" /> </div>
    </div>
    <?php
    }
}
?>