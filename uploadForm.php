<?php
include ("admin/methods.php");

    $id=$_GET["id"];
echo'   
  <h1 class="newProject__item">Załaduj plik</h1>
<form class="box-upload" action="?action=uploadFilemethod" method="post" name="file" enctype="multipart/form-data"> 
    <input type="file" name="fileToUpload" id="fileToUpload" multiple>

    <input type="submit" value="Załaduj" name="submit">
    <input type="hidden" name="id" value="'.$id.'">
      </form>
      <div class="uploaded-files">
        <h3 class="uploaded-files__title">Pliki projektu</h3>';
     include("admin/showFiles-method.php"); 
showFiles($id, $con);
if (isset ($_GET["delete"])){
    deleteAllFiles($id, $con, getPathFiles($id,$con));

   ?>
    <div class="alert alert-success mt-3" role="alert">
        <h4 class="alert-heading">Sukces</h4>
        <p>
            <?php  echo "Pliki zostały usunięte";?>
        </p>
        <?php 
        echo '<a class="btn btn-info" href="index.php?action=uploadFileProject&id='.$id.'">OK </a>
    </div>';
     
}
    

echo'</div> 
      <div class="project-add-form__close"><a href="index.php">x</a> </div>

<script>
    document.getElementById("project-add-form").style.display = "block";
    
    
</script>';
?>