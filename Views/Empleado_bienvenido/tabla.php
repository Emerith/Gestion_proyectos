<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
    echo "<tr>

    <td>{$row['Nombre']}</td>
    <td>{$row['Apellido_patern']}</td>
    <td>{$row['Apellido_matern']}</td>
    <td>{$row['email']}</td>
    <td>{$row['pass']}</td>
    
    <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_persona']}'></a></td>
    <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['id_persona']}' href='#!'></a></td>
    
    </tr>";
?>
