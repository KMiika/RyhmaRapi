<?php
include "errorDetector.php";
include "connection.php";

//echo "<link rel='stylesheet' type='text/css' media='screen' href='../css/mystyle.css' />";

//Aukaistaan Session, jotta voidaan käyttää sen muuttujia!
session_start();

//Alustetaan kysely
$sql = $db->prepare("SELECT Saaja, Viesti, Viite, Summa FROM Tilitapahtumat
JOIN Pankkitili ON  Pankkitili.idPankkitili = Tilitapahtumat.idPankkitili
JOIN Asiakas1_Pankkitili ON Pankkitili.idPankkitili = Asiakas1_Pankkitili.idPankkitili
JOIN Asiakas1 ON Asiakas1_Pankkitili.idAsiakas = Asiakas1.idAsiakas
JOIN Tunnus ON Asiakas1.idAsiakas = Tunnus.idAsiakas
WHERE Ktunnus = ?");

//Suoritetaan kysely
$sql->execute(array($_SESSION['username']));

    //Asetetaan muotoilu tulostettavalle taulukolle
    echo "<div class = 'taulukko'>";
    echo "<table border = '1'>
    <tr>
    <th>Saaja</th>
    <th>Viesti</th>
    <th>Viite</th>
    <th>Summa</th>
    </tr>";

    //Tulostetaan tiedot luotuun taulukkoon
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
    echo "</div>";
?>