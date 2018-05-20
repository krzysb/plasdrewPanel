<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Numer</th>
            <th scope="col">Klient</th>
            <th scope="col">Produkt</th>
            <th scope="col">Ilość</th>
            <th scope="col">Materiał</th>
            <th scope="col">Rozmiar</th>
            <th scope="col">Uwagi</th>
            <th scope="col">Operacje</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sql = "SELECT * FROM projects";
        $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["id"]. "</td><td>". $row["customer"]. "</td><td>" . $row["productName"]. "</td><td>". $row["quantity"]."</td><td>".$row["material"]."</td><td>".$row["size"]."</td><td class='comments'>".$row["comments"]."</td><td><a class='editProjectButton' href='?action=editRowProject&id=".$row["id"]."'><i class='fa fa-pencil' aria-hidden='true'></i></a></td></tr>";
                }
            } else {
                echo "brak danych";
            }
        ?>
    </tbody>
</table>