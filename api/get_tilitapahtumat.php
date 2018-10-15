<?php
include "errorDetector.php";
include "connection.php";
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
//require "conncection.php";
//$username = $_POST['username'];



/*try
	{
	 $conn_string = "mysql:host=mysli.oamk.fi;dbname=opisk_t7koni00";
	 $db = new PDO ($conn_string, "t7koni00", "Seppo123");
	 $db->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 //print ("Connected\n");
	}
	catch (PDOException $e)
	{
	 print ("Cannot connect to server\n");
	 print ("Error code: " . $e->getCode () . "\n");
	 print ("Error message: " . $e->getMessage () . "\n");
    }

    echo "keijo<br>";
    echo "keijo<br>";
    echo "keijo<br>";
    $kayttajanNimi = "Jeee-jeeee";
    echo "$kayttajanNimi<br>";
    $kayttajanNimi = $username;
    echo "$kayttajanNimi<br>";
    $username = "keke";
    echo "$username";

    //include "login.php";*/
/*
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_REQUEST['username'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    echo "keijo"

    */
/*
    $sql = $db->prepare("SELECT Saaja, Viesti, Viite, Summa FROM Tilitapahtumat
JOIN Pankkitili ON  Pankkitili.idPankkitili = Tilitapahtumat.idPankkitili
JOIN Asiakas1_Pankkitili ON Pankkitili.idPankkitili = Asiakas1_Pankkitili.idPankkitili
JOIN Asiakas1 ON Asiakas1_Pankkitili.idAsiakas = Asiakas1.idAsiakas
JOIN Tunnus ON Asiakas1.idAsiakas = Tunnus.idAsiakas
WHERE Ktunnus = 12345");

$sql->execute();


$result = $sql->fetch(PDO::FETCH_ASSOC);




//session_start();

//echo "$result";

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
    */

    
    /*
    $yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $yhteys->exec("SET NAMES latin1");
    $kysely = $yhteys->prepare("SELECT Etunimi,Sukunimi,Nimi,Arvosana
            FROM Arviointi 
            JOIN Opiskelija ON Arviointi.idOpiskelija=Opiskelija.idOpiskelija
            JOIN Opintojakso ON Arviointi.idOpintojakso=Opintojakso.idOpintojakso");
    $kysely->execute();
    echo "<table>";
    while ($rivi = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($rivi["Etunimi"]) . "</td>"; 
        echo "<td>" . htmlspecialchars($rivi["Sukunimi"]) . "</td>";
        echo "<td>" . htmlspecialchars($rivi["Nimi"]) . "</td>";
        echo "<td>" . htmlspecialchars($rivi["Arvosana"]) . "</td>";
        echo "</tr>";
    } echo "</table>";
/*require "connection.php";
include "login.php"
*/

/*$sql = "SELECT Saaja, Viesti, Viite, Summa FROM Tilitapahtumat
JOIN Pankkitili ON  Pankkitili.idPankkitili = Tilitapahtumat.idPankkitili
JOIN Asiakas1_Pankkitili ON Pankkitili.idPankkitili = Asiakas1_Pankkitili.idPankkitili
JOIN Asiakas1 ON Asiakas1_Pankkitili.idAsiakas = Asiakas1.idAsiakas
JOIN Tunnus ON Asiakas1.idAsiakas = Tunnus.idAsiakas
WHERE Ktunnus = $username";

$result = $db->query($sql);

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>" . $row['Saaja'] . "</td>";
            echo "<td>" . $row['Viesti'] . "</td>";
            echo "<td>" . $row['Viite'] . "</td>";
            echo "<td>" . $row['Summa'] . "</td>";
            echo "</tr>";
        }
}
else
{
    echo "0 results";
}*/



//$sql = $db->prepare("SELECT * FROM naytatilitapahtumat;");


$sql = $db->prepare("SELECT Saaja, Viesti, Viite, Summa FROM Tilitapahtumat
JOIN Pankkitili ON  Pankkitili.idPankkitili = Tilitapahtumat.idPankkitili
JOIN Asiakas1_Pankkitili ON Pankkitili.idPankkitili = Asiakas1_Pankkitili.idPankkitili
JOIN Asiakas1 ON Asiakas1_Pankkitili.idAsiakas = Asiakas1.idAsiakas
JOIN Tunnus ON Asiakas1.idAsiakas = Tunnus.idAsiakas
WHERE Ktunnus = ?");
//($_SESSION['username'])

$sql->execute(array(10101));


$result = $sql->fetch(PDO::FETCH_ASSOC);




session_start();

//echo "$result";

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

    /*
    $result = $db->prepare("SELECT Saaja, Viesti, Viite, Summa FROM Tilitapahtumat
    JOIN Pankkitili ON  Pankkitili.idPankkitili = Tilitapahtumat.idPankkitili
    JOIN Asiakas1_Pankkitili ON Pankkitili.idPankkitili = Asiakas1_Pankkitili.idPankkitili
    JOIN Asiakas1 ON Asiakas1_Pankkitili.idAsiakas = Asiakas1.idAsiakas
    JOIN Tunnus ON Asiakas1.idAsiakas = Tunnus.idAsiakas
    WHERE Ktunnus = $_POST['username']")
    $result->execute();

while($row = mysqli_fetch_array($result))
echo $row*/
?>