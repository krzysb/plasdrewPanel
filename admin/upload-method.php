<?php

$id = mysqli_real_escape_string($con, $_POST['id']);
$target_dir = "uploads/";
$name=time();
$target_file = $target_dir .$name. basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));




    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       
   $query = "UPDATE projects set filePath='$target_file' where id='$id'";
        if (mysqli_query($con, $query)) {
?>
    <div class="newProject">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Sukcess!</h4>
            <p>
                <?php  echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " został dodany.";?>
            </p>
            <input type="button" value="OK" onclick="window.location.href = 'index.php'" /> </div>
        <script>
            document.getElementById("project-add-form").style.display = "block";
        </script>
    </div>
    <?php
        }else{
            echo "Błąd";
        }

   } else {
       echo "Nie udało się dodać pliku.";
    }

?>