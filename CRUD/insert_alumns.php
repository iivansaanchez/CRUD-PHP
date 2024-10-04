<?php

include("connection.php");
$con = connection();

$id=0;
$name = $_POST['name'];
$age = $_POST['age'];

$sql = "INSERT INTO alumnos VALUES('$id', '$name','$age')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}else{
    
}

?>