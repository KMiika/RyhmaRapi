<?php
require "connection.php";
include "errorDetector.php";

session_start();

//Alustetaan kysely
$sql = $db->prepare("SELECT KorttiNro, Tyyppi, Luottoraja, Luotto FROM Kortti
JOIN Pankkitili ON  Pankkitili.idPankkitili = Kortti.idPankkitili
JOIN Asiakas1_Pankkitili ON Pankkitili.idPankkitili = Asiakas1_Pankkitili.idPankkitili
JOIN Asiakas1 ON Asiakas1_Pankkitili.idAsiakas = Asiakas1.idAsiakas
JOIN Tunnus ON Asiakas1.idAsiakas = Tunnus.idAsiakas
WHERE Ktunnus = ?");

//Suoritetaan kysely kyseisen käyttäjän tunnuksilla
$sql->execute(array($_SESSION['username']));

    //Asetetaan muotoilu tulostettavalle taulukolle ja otsikot sarakkeille
    echo "<div class = 'taulukko'>";
    echo "<table border = '1'>
    <tr>
    <th>Kortin numero</th>
    <th>Tyyppi</th>
    <th>Luottoraja</th>
    <th>Luottoa käytettävissä</th>
    </tr>";

    //Tulostetaan tiedot luotuun taulukkoon
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
