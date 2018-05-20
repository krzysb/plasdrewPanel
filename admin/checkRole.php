<?php

function chceckRole($username, $con){
    $sql = "SELECT * FROM users where username='$username'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row=mysqli_fetch_assoc($result);
        return $row["role"];
}
}   



?>