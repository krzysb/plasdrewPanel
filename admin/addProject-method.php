<?php 
error_reporting(E_ALL);
if (isset($_POST['submit'])){

    $customerName = mysqli_real_escape_string($con, $_POST['customerName']);
    $product = mysqli_real_escape_string($con, $_POST['product']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);
    $material = mysqli_real_escape_string($con, $_POST['material']);
    $size = mysqli_real_escape_string($con, $_POST['size']);
    $comments = mysqli_real_escape_string($con, $_POST['comments']);
    $date =  date("Y-m-d H:i");
    
//    UPLOAD
      include ("admin/methods.php");

    
    $query = "INSERT into `projects` (customer, productName, quantity, material, size, comments, dateAdd)
VALUES  ('$customerName', '$product', '$quantity', '$material', '$size', '$comments', '$date')";
    $result = mysqli_query($con,$query);
    if($result){
        
//        //UPLOAD
        $idProject=getLastIdproject($con);
        $target_dir = "uploads/";
      
        $countfiles = count($_FILES['fileToUpload']['name']);
        for($i=0;$i<$countfiles;$i++){
            $name=time();
            $target_file = $target_dir .$name."-".$idProject."-".basename($_FILES["fileToUpload"]["name"][$i]);

            // Upload file
            move_uploaded_file($_FILES['fileToUpload']['tmp_name'][$i],$target_file);
            $query = "INSERT into `files` (idProject,path)
         VALUES ('$idProject', '$target_file')";
           $result = mysqli_query($con,$query);
        }

        


     
        
        

        
?>
    <div class="newProject">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Sukcess!</h4>
            <p> Pomyślnie dodano produkt </p>
            <input type="button" value="OK" onclick="window.location.href = 'index.php'" /> </div>
        <script>
            document.getElementById("project-add-form").style.display = "block";
        </script>
    </div>
    <?php
    
        
        
        
}else{
            echo ' <div class="newProject">
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Niepowodzenie</h4>
            <p> Nie udało się załadować pliku</p>
            </div>
        <script>
            document.getElementById("project-add-form").style.display = "block";
        </script>
    </div>';
            
            
        }
    
}

?>