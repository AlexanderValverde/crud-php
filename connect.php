<?php

    $conn = new mysqli('localhost','root','', 'clientescrud');
    if ($conn) {
        //echo 'conectado';
    }else{
        die(mysqli_error($conn));
    }

?>