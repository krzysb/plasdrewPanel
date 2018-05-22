<?php
if(isset ($_GET["order"])){
    $order=$_GET["order"];      
}else{
    $order="niezrealizowane";
}

?>
    <select name="optionProject" id="orderProjects">
        <option <?php if ($order=="niezrealizowane" ){echo 'selected="selected"';}?> value="niezrealizowane">niezrealizowane</option>
        <option <?php if ($order=="zrealizowane" ){echo 'selected="selected"';}?> value="zrealizowane">zrealizowane</option>
        <option <?php if ($order=="wszystkie" ){echo 'selected="selected"';}?> value="wszystkie">wszystkie</option>
    </select>
    <table class="table table-striped">
        <tbody>
            <?php
            
        switch ($order)
        {
            case "niezrealizowane":
                $sql = "SELECT * FROM projects where status=0 ";
                break;
            case "zrealizowane":
                $sql = "SELECT * FROM projects where status=1 ORDER BY doneDate DESC";
                break;
            case "wszystkie":
                $sql = "SELECT * FROM projects  ORDER BY doneDate DESC";
                break;
        }
     
        $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) {
                echo '<thead>
        <tr>
            <th scope="col">Numer</th>
            <th scope="col">Klient</th>
            <th scope="col">Produkt</th>
            <th scope="col">Ilość</th>
            <th scope="col">Materiał</th>   
            <th scope="col">Rozmiar</th>
            <th scope="col">Uwagi</th>
            <th scope="col">Plik</th>
            <th scope="col">Status</th>
            <th scope="col">Data dodania</th>
            <th scope="col">Data wykonania</th>

        </tr>
    </thead>';
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["id"]. "</td><td>". $row["customer"]. "</td><td>" . $row["productName"]. "</td><td>". $row["quantity"]."</td><td>".$row["material"]."</td><td>".$row["size"]."</td><td class='comments'>".$row["comments"]."</td>";
                    if(!empty($row["filePath"])){
                        echo "<td> <a class='uploadFileButton' href=".$row["filePath"]."><i class='fa fa-file-o' aria-hidden='true'></i></a></td>";
                    }else{
                        echo "<td></td>";
                    }
                    if ($row["status"]==0){
                        echo "<td>W trakcie</td><td>--:--</td><td>--:--</td>";
                    }else{
                        echo "<td>Zrobiony przez $row[madeBy]</td><td>";
                        echo substr($row["dateAdd"],0,  -3); 
                        echo"</td><td>";
                        echo substr($row["doneDate"],0,  -3); 
                        echo"</td></tr>";
                    }
                   
                }
            } else {
                echo "<div class='alert alert-info mt-5'>Brak projektów </div>";
            }
        ?>
        </tbody>
    </table>