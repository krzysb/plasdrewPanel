<?php

function getLastIdproject($con){
    $sql = "SELECT max(id) AS max_id FROM projects";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    return $row["max_id"];
}


function getPathFiles($id,$con){
    $sql = "SELECT path FROM files where idProject='$id'"; 
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
           $rows[]=$row["path"]; 
        }
   
}
    return $rows;
  
}

function deleteAllFiles($id, $con, $target){
   for ($i=0;$i<count($target);$i++){  unlink($target[$i]);  }
    

    
    
    $sql = "DELETE f.*
FROM files f
WHERE id IN (SELECT id
             FROM (SELECT id
                   FROM files
                   WHERE idProject='$id') x)" ;
   (mysqli_query($con, $sql));    
    
}



?>