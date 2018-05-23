<?php

    $id=$_GET["id"];
echo'   
  <h1 class="newProject__item">Załaduj plik</h1>
<form class="box-upload" action="?action=uploadFilemethod" method="post" name="file" enctype="multipart/form-data"> 
    <input type="file" name="fileToUpload" id="fileToUpload">

    <input type="submit" value="Załaduj" name="submit">
    <input type="hidden" name="id" value="'.$id.'">
      </form>
      <div class="uploaded-files">
        <h3 class="uploaded-files__title">Pliki projektu</h3>';
     include("admin/showFiles-method.php"); 
showFiles($id, $con);
echo'</div> 
      <div class="project-add-form__close"><a href="index.php">x</a> </div>

<script>
    document.getElementById("project-add-form").style.display = "block";
</script>';