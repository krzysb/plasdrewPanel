<?php
function showFiles($id, $con){
    $sql = "SELECT path FROM files where idProject='$id'";

$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        
        echo "<a class='uploadFileButton' href='".$row["path"]."' title='".$row["path"]."' ><i class='fa fa-file-o fa-2x' aria-hidden='true'></i></a>";
        
    }    
}else{
    echo "Brak plików";
}
}

?>