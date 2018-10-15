<?php
include "errorDetector.php";
include "connection.php";

session_start();


$sql = $db->prepare("SELECT Tilinumero, Saldo FROM Pankkitili
JOIN Asiakas1_Pankkitili ON Pankkitili.idPankkitili = Asiakas1_Pankkitili.idPankkitili
JOIN Asiakas1 ON Asiakas1_Pankkitili.idAsiakas = Asiakas1.idAsiakas
JOIN Tunnus ON Asiakas1.idAsiakas = Tunnus.idAsiakas
WHERE Ktunnus = ?;");

   $sql->execute(array($_SESSION['username']));

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
