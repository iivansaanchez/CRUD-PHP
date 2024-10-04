<?php 
    include("../CRUD/connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM alumnos WHERE idAlumnos='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Update</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Update</h1>
        <form action="../CRUD/edit_alumns.php" method="POST">
            <div class="form-group">
                <input type="hidden" class="form-control" name="id">
            </div>
            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name...">
            </div>
            <div class="form-group">
                <label for="technologies">Age: </label>
                <input type="text" class="form-control" id="age" name="age" placeholder="Age...">
            </div>
            <input type="submit" class="m-3 btn btn-primary" value="Update">
        </form>
    </div>
</body>
</html>