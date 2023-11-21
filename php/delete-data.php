<?php
include "config.php";

$id=$_GET["id"];
$sql="DELETE  FROM students WHERE id='{$id}'";
$run_sql=mysqli_query($conn,$sql);
if($run_sql){
    echo json_encode(["success"=>true,"message"=>"Estudiante borrado con exito"]);
}else{
    echo json_encode(["success"=>false,"message"=>"Problema del servidor"]);
}


?>