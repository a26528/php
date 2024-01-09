<?php
    $usuarios = $datos['usuarios'];

    
        echo'<br>';
        echo "<br>";
        echo '<table class="table table-striped table-bordered">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Apellido 1</th>';
        echo '<th>Apellido 2</th>';
        echo '<th>Nombre</th>';
        echo '<th>Correo Electrónico</th>';
        echo '<th>Teléfono Móvil</th>';
        echo '<th>Acciones</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        
        foreach ($usuarios as $fila) {
            echo '<tr>';
            echo '<td>' . $fila['apellido_1'] . '</td>';
            echo '<td>' . $fila['apellido_2'] . '</td>';
            echo '<td>' . $fila['nombre'] . '</td>';
            echo '<td>' . $fila['mail'] . '</td>';
            echo '<td>' . $fila['movil'] . '</td>';
            echo '<td>';
            echo '<button type="button" onclick="modificar_Usuario()" class="btn btn-primary" style="background-color: #D3BDB0;">Editar</button>';
            echo '</td>';
            echo '</tr>';
        }
        
        echo '</tbody>';
        echo '</table>';
    

        
    
?>