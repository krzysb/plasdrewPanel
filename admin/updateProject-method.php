<?php 


if (isset($_POST['submit'])){


    $id = mysqli_real_escape_string($con, $_POST['id']);
    $customerName = mysqli_real_escape_string($con, $_POST['customerName']);
    $product = mysqli_real_escape_string($con, $_POST['product']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);
    $material = mysqli_real_escape_string($con, $_POST['material']);
    $size = mysqli_real_escape_string($con, $_POST['size']);
    $comments = mysqli_real_escape_string($con, $_POST['comments']);


    $query = "UPDATE projects set 
    customer='$customerName',
    productName='$product',
    quantity='$quantity',
    material='$material',
    size='$size',
    comments='$comments'
    where id='$id'";

   if (mysqli_query($con, $query)) {
  ?>
    <div class="newProject">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Sukcess!</h4>
            <p> Dane zostały zaktualizowane</p>
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
else
    echo "zonk";

?>