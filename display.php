<?php 
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Crud Clientes</title>
</head>

<body>
    <div class="container my-5">
        <button class="btn btn-primary">
            <a href="user.php" class="text-light">Agregar cliente</a>
        </button>

        <table class="table table-dark table-hover my-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Password</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    $sql = "SELECT * FROM `clientes`";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            $nombre = $row['nombre'];
                            $email = $row['email'];
                            $celular = $row['telefono'];
                            $password = $row['pass'];
                            echo '<tr>
                                    <th scope="row">'.$id.'</th>
                                    <td>'.$nombre.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$celular.'</td>
                                    <td>'.$password.'</td>
                                    <td>
                                        <button class="btn btn-danger"><a class="text-light" href="update.php?updateid='.$id.'">Update</a></button>
                                        <button class="btn btn-danger"><a class="text-light" href="delete.php?deleteid='.$id.'">Delete</a></button>
                                    </td>
                                </tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>