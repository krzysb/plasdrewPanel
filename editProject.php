<?php

    $id=$_GET["id"];
    $sql = "SELECT * FROM projects where id='$id'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {    
        $row=mysqli_fetch_assoc($result);
echo '<div class="newProject" id="newProject">
    <h1 class="newProject__item">Edytuj projekt</h1>
    <form class="editProject__item" id="addProject" name="addNewProject" action="?action=update-project" method="post">
        <input type="text" name="projectNr" placeholder="Numer projektu" required disabled value='.$row['id'].' />
        <input type="text" name="customerName" placeholder="Klient" required value='.$row['customer'].' />
        <select name="product" id="productSelect">';?>
    <option <?php if ($row[ 'productName']=="Winietka" ){echo 'selected="selected"';}?> value="Winietka">Winietka</option>
    <option <?php if ($row[ 'productName']=="Podstawka pod obrączki" ){echo 'selected="selected"';}?> value="Podstawka pod obrączki">Podstawka pod obrączki</option>
    <option <?php if ($row[ 'productName']==">Pudełko pod obrączki" ){echo 'selected="selected"';}?> value="Pudełko pod obrączki">Pudełko pod obrączki</option>
    <option <?php if ($row[ 'productName']=="Księga gościPodstawka pod obrączki" ){echo 'selected="selected"';}?> value="Księga gości">Księga gości</option>
    <option <?php if ($row[ 'productName']=="Numerek na stół 18 cm" ){echo 'selected="selected"';}?> value="Numerek na stół 18 cm">Numerek na stół 18 cm</option>
    <option <?php if ($row[ 'productName']=="Numerek na stół 35 cm" ){echo 'selected="selected"';}?> value="Numerek na stół 35 cm">Numerek na stół 35 cm</option>
    <option <?php if ($row[ 'productName']=="Numerek ćwiartka" ){echo 'selected="selected"';}?> value="Numerek ćwiartka">Numerek ćwiartka</option>
    <option <?php if ($row[ 'productName']=="Zawieszka na alkohol" ){echo 'selected="selected"';}?> value="Zawieszka na alkohol">Zawieszka na alkohol</option>
    <option <?php if ($row[ 'productName']=="Prezent dla gości" ){echo 'selected="selected"';}?> value="Prezent dla gości">Prezent dla gości</option>
    <option <?php if ($row[ 'productName']=="Inne" ){echo 'selected="selected"';}?> value="Inne">Inne</option>
    <?php
   echo' </select>
    
    <select name="material" id="materialSelect">'?>
        <option <?php if ($row[ 'material']=="Sklejka" ){echo 'selected="selected"';}?> value="Sklejka" data-category="1">Sklejka</option>
        <option <?php if ($row[ 'material']=="Plaster" ){echo 'selected="selected"';}?> value="Plaster" data-category="2">Plaster</option>
        </select>
        <select name="size" id="sizeSelect" class="sizeSelectEdit">
            <option <?php if ($row[ 'size']=="Sklejka 3 mm" ){echo 'selected="selected"';}?> value="Sklejka 3 mm" data-category="1">Sklejka 3 mm</option>
            <option <?php if ($row[ 'size']=="Sklejka 5 mm" ){echo 'selected="selected"';}?> value="Sklejka 5 mm" data-category="1">Sklejka 5 mm</option>
            <option <?php if ($row[ 'size']=="Plaster 7-8 cm" ){echo 'selected="selected"';}?> value="Plaster 7-8 cm" data-category="2">Plaster 7-8 cm</option>
            <option <?php if ($row[ 'size']=="Plaster 8-9 cm" ){echo 'selected="selected"';}?> value="Plaster 8-9 cm" data-category="2">Plaster 8-9 cm</option>
            <option <?php if ($row[ 'size']=="plaster 16-19 cm GK" ){echo 'selected="selected"';}?> value="Plaster 16-19 cm, GK" data-category="2">Plaster 16-19 cm, GK</option>
            <option <?php if ($row[ 'size']=="Plaster 28-33 cm" ){echo 'selected="selected"';}?> value="Plaster 28-33 cm" data-category="2">Plaster 28-33 cm</option>
            <option <?php if ($row[ 'size']=="Plaster 38-42 cm" ){echo 'selected="selected"';}?> value="Plaster 38-42 cm" data-category="2">Plaster 38-42 cm</option>
            <option <?php if ($row[ 'size']=="Inne" ){echo 'selected="selected"';}?> value="Inne" data-category="1">Inne</option>
            <option <?php if ($row[ 'size']=="Inne" ){echo 'selected="selected"';}?> value="Inne" data-category="2">Inne</option>
        </select>
        <?php
        echo '
        <input type="text" name="quantity" placeholder="Ilość" required value='.$row['quantity'].' />
        <textarea name="comments" cols="30" rows="5" placeholder="Wpisz uwagę">'.$row['comments'].'</textarea>
        <input type="submit" name="submit" value="Dodaj" class="bg" id="newProject__submit" /> 
          <input type="hidden" name="id" value="'.$id.'">
        </form>
        </div>
        <div class="project-add-form__close"><a href="index.php">x</a> </div>'; }else{ echo "Nie ma tekiego produktu"; } ?>
            <script>
                document.getElementById("project-add-form").style.display = "block";
            </script>