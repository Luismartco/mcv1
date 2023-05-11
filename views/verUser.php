<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista usuarios</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Telefono</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($usuario as $user) {
                    echo "<tr>";
                    echo "<td>".$user['id']."</td>";
                    echo "<td>".$user['nombre']."</td>";
                    echo "<td>".$user['apellido']."</td>";
                    echo "<td>".$user['telefono']."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>