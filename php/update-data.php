<?php
include "config.php";

$input=file_get_contents("php://input");
$decode=json_decode($input,true);

$id=$decode['id'];
$name=$decode['name'];
$age=$decode['age'];
$country=$decode['country'];


$sql="UPDATE students SET std_name='{$name}', std_age='{$age}', std_country='{$country}' WHERE id='{$id}'";
$run_sql=mysqli_query($conn,$sql);

if($run_sql){
    echo json_encode(["success"=>true,"message"=>"Estudiante actualizado correctamente"]);
}else{
    echo json_encode(["success"=>false,"message"=>"Problema del servidor"]);
}

?>