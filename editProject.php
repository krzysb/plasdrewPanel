<?php

    $id=$_GET["id"];
    $sql = "SELECT * FROM projects where id='$id'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {    
        $row=mysqli_fetch_assoc($result);
echo '<div class="newProject" id="newProject">
    <h1 class="newProject__item">Edytuj projekt</h1>
    <form class="newProject__item" id="addProject" name="addNewProject" action="?action=update-project" method="post">
        <input type="text" name="projectNr" placeholder="Numer projektu" required disabled value='.$row['id'].' />
        <input type="text" name="customerName" placeholder="Klient" required value='.$row['customer'].' />
        <select name="product" id="productSelect">';?>
    <option <?php if ($row[ 'productName']=="winietka" ){echo 'selected="selected"';}?> value="winietka">winietka</option>
    <option <?php if ($row[ 'productName']=="zawieszka na wodkę" ){echo 'selected="selected"';}?> value="zawieszka na wodkę">zawieszka na wodkę</option>
    <option <?php if ($row[ 'productName']=="numerek 35 cm" ){echo 'selected="selected"';} ?> value="numerek 35 cm">Numerek 35 cm</option>
    <?php
   echo' </select>
    <input type="text" name="quantity" placeholder="Ilość" required value='.$row['quantity'].' />
    <select name="material">'?>
        <option <?php if ($row[ 'material']=="sklejka" ){echo 'selected="selected"';}?> value="sklejka">sklejka</option>
        <option <?php if ($row[ 'material']=="plaster" ){echo 'selected="selected"';}?> value="plaster">plaster</option>
        </select>
        <select name="size">
            <option <?php if ($row[ 'size']=="nie dotyczy" ){echo 'selected="selected"';}?> value="nie dotyczy">nie dotyczy</option>
            <option <?php if ($row[ 'size']=="plaster 16-19 cm GK" ){echo 'selected="selected"';}?> value="plaster 16-19 cm GK">plaster 16-19 cm GK</option>
            <option <?php if ($row[ 'size']=="plaster 28-33 cm" ){echo 'selected="selected"';}?> value="plaster 28-33 cm">plaster 28-33 cmK</option>
        </select>
        <?php
        echo '
        <textarea name="comments" cols="30" rows="5" placeholder="Wpisz uwagę">'.$row['comments'].'</textarea>
        <input type="submit" name="submit" value="Dodaj" class="bg" id="newProject__submit" /> 
          <input type="hidden" name="id" value="'.$id.'">
        </form>
        </div>
        <div class="project-add-form__close"><a href="index.php">x</a> </div>'; }else{ echo "Nie ma tekiego produktu"; } ?>
            <script>
                document.getElementById("project-add-form").style.display = "block";
            </script>