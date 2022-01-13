<?php 
    include 'connect.php';
    $id = $_GET['updateid'];
    $sql = "SELECT * FROM `clientes` WHERE id='$id';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $nombre = $row['nombre'];
    $email = $row['email'];
    $celular = $row['telefono'];
    $password = $row['pass'];

    if (isset($_POST['actualizar'])) {

        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $celular = $_POST['telefono'];
        $password = $_POST['pass'];

        $sql = "UPDATE `clientes` SET `nombre` = '$nombre', `email` = '$email', `telefono` = '$celular', `pass` = '$password' WHERE id = '$id';";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            //echo "Registro actualizado.";
            header(('location:display.php')); 
        }else{
            die(mysqli_error($conn));
        }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Clientes</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre" autocomplete="off" value=<?php echo $nombre;?>>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Ingrese su email" autocomplete="off" value=<?php echo $email;?>>
            </div>
            <div class="mb-3">
                <label>Celular</label>
                <input type="number" class="form-control" name="telefono" placeholder="Ingrese su celular" autocomplete="off" value=<?php echo $celular;?>>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" name="pass" placeholder="Ingrese su contraseña" autocomplete="off" value=<?php echo $password;?>>
            </div>
            <button type="submit" class="btn btn-primary" name="actualizar">Actualizar</button>
        </form>
    </div>
</body>

</html>