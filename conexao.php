<?php
    $hostname = "localhost";
    $bda = "senaigames";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bda);

        if($mysqli -> connect_errno) {
            echo "Falha ao conectar: (" . $mysqli ->connect_errno .") " . $mysqli -> connect_error;
        }   else
        echo "Conectado!";

?>