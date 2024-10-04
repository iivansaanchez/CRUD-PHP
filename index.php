<?php
include("CRUD/connection.php");
$con = connection();

$sql = "SELECT * FROM alumnos";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Mostrar datos de BBDD </title>
</head>
<body>
    <div class="container mt-5" align="center">
    <h2 class="mb-4">Alumns Table</h2>
    <table class="table table-dark table-hover">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <td>
                        <?= $row["idAlumnos"] ?>
                    </td>
                    <td> 
                        <?= $row["nombreAlumnos"] ?>
                    </td>
                    <td> 
                        <?= $row["edad"] ?> 
                    </td>
                    <td>
                        <a href="updateForm/update.php?id=<?= $row['idAlumnos'] ?>" class="btn btn-secondary">Editar</a>
                    </td>
                    <td>
                        <a href="CRUD/delete_alumns.php?id=<?= $row['idAlumnos'] ?>" class="btn btn-danger">Borrar</a>
                    </td>
                    <?php endwhile; ?>  
                </tr>    
            </tbody>
        </table>
    </div>
    <div class="container mt-5">
        <h1 class="text-center">Insertar</h1>
        <form action="CRUD/insert_alumns.php" method="POST">
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
            <input type="submit" class="m-3 btn btn-primary" value="Insertar">
        </form>
    </div>
</body>
</html>