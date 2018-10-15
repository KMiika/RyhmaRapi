<?php
require "connection.php";

session_start();

$sql = $db->prepare("SELECT Tilinumero, Saldo FROM Pankkitili");

$sql->execute();

    echo"<div class = 'taulukko'>";
    echo "<table border = '1'>
    <tr>
    <th>Tilinumero</th>
    <th>Saldo</th>
    </tr>";

    while($row = $sql->fetch())
    {
        echo "<tr>";
        echo "<td>" . $row['Tilinumero'] . "</td>";
        echo "<td>" . $row['Saldo'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
?>
