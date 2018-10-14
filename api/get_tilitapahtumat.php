<?php
require "connection.php";

$sql = $db->prepare("SELECT * FROM naytatilitapahtumat;");
$sql->execute();

    echo "<table border = '1'>
    <tr>
    <th>Saaja</th>
    <th>Viesti</th>
    <th>Viite</th>
    <th>Summa</th>
    </tr>";

    while($row = $sql->fetch())
    {
        echo "<tr>";
        echo "<td>" . $row['Saaja'] . "</td>";
        echo "<td>" . $row['Viesti'] . "</td>";
        echo "<td>" . $row['Viite'] . "</td>";
        echo "<td>" . $row['Summa'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
?>