<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$name = $_POST['name'];
$age = $_POST['age'];

$sql="UPDATE alumnos SET nombreAlumnos='$name', edad='$age' WHERE idAlumnos='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}else{

}

?>