<?php 

if (isset($_POST['submit'])){

 

    $customerName = mysqli_real_escape_string($con, $_POST['customerName']);
    $product = mysqli_real_escape_string($con, $_POST['product']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);
    $material = mysqli_real_escape_string($con, $_POST['material']);
    $size = mysqli_real_escape_string($con, $_POST['size']);
    $comments = mysqli_real_escape_string($con, $_POST['comments']);

    
    $query = "INSERT into `projects` ( customer, productName, quantity, material, size, comments)
VALUES  ('$customerName', '$product', '$quantity', '$material', '$size', '$comments')";
    $result = mysqli_query($con,$query);
    if($result){
?>
    <div class="newProject">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Sukcess!</h4>
            <p> Pomyślnie dodano produkt </p>
            <input type="button" value="OK" onclick="window.location.href = 'http://localhost/plasdrew/admin/dashboard2.php'" /> </div>
        <script>
            document.getElementById("project-add-form").style.display = "block";
        </script>
    </div>
    <?php
    }else{
        echo "Błąd";
    }
    
}

?>