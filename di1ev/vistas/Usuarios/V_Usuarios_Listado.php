<?php
    $usuarios = $datos['usuarios'];

    foreach($usuarios as $fila){
        echo $fila['apellido_1'].'   '.$fila['apellido_2'].'   '.$fila['nombre'].'   '.$fila['mail'].'   '.$fila['movil'].'<br>';
    }
?>