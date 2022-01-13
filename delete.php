<?php 
    include 'connect.php';
        if (isset($_GET['deleteid'])) {
            $id = $_GET['deleteid'];
            $sql = "DELETE FROM `clientes` WHERE id = '$id';";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                //echo "Registro eliminado.";
                header(('location:display.php')); 
            }else{
                die(mysqli_error($conn));
            }
        }else{
            die(mysqli_error($conn));
        }
?>