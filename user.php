<?php 
    include 'connect.php';
    if (isset($_POST['ingresar'])) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $password = $_POST['password'];

        $sql = "INSERT INTO `clientes` (nombre, email, telefono, pass) VALUES ('$nombre', '$email', '$celular', '$password');";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            //echo "Registro insertado.";
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
                <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre" autocomplete="off" />
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Ingrese su email" autocomplete="off" />
            </div>
            <div class="mb-3">
                <label>Celular</label>
                <input type="number" class="form-control" name="celular" placeholder="Ingrese su celular" autocomplete="off" />
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Ingrese su contraseña" autocomplete="off" />
            </div>
            <button type="submit" class="btn btn-primary" name="ingresar">Ingresar</button>
        </form>
    </div>
</body>

</html>