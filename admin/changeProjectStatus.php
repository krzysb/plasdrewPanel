<?php
include("auth.php");
    $id=$_GET["id"];
    $user=$_SESSION['username'];
    $date = date("Y-m-d H:i");
    $query = "UPDATE projects set 
    status='1',
    madeBy='$user',
    doneDate='$date'
    where id='$id'";
    if (mysqli_query($con, $query)){
        echo '<script>window.location.href ="?action=p-changeProjetStatus"</script>';
    
}
    else{
        echo '<script>window.location.href ="?action=n-changeProjetStatus"</script>';
    }

?>