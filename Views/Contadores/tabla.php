<?php
$dato=$datos[0];
while ($row=mysqli_fetch_array($dato)){
    echo "<tr>
<td>
{$row['id_tipo_contador']}
</td>
<td>{$row['cuenta']}</td>
<td>{$row['fecha']}</td>
</tr>";
}
?>