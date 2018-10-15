<?php
require "connection.php";

$sql = $db->prepare("SELECT * FROM naytakortit;");
$sql->execute();

    echo"<div class = 'taulukko'>";
    echo "<table border = '1'>
    <tr>
    <th>KorttiNro</th>
    <th>Tyyppi</th>
    <th>Luottoraja</th>
    <th>Luotto</th>
    </tr>";

    while($row = $sql->fetch())
    {
        echo "<tr>";
        echo "<td>" . $row['KorttiNro'] . "</td>";
        echo "<td>" . $row['Tyyppi'] . "</td>";
        echo "<td>" . $row['Luottoraja'] . "</td>";
        echo "<td>" . $row['Luotto'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
?>
