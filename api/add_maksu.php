<?php
  include 'connection.php';
  include "errorDetector.php";

  $Tilinro=$_POST['Tilinro'];
  $Nimi=$_POST['Nimi'];
  $Viesti=$_POST['Viesti'];
  $Viite=$_POST['Viite'];
  $Eräpäivä=$_POST['Eräpäivä'];
  $Summa=$_POST['Summa'];
  $Pankkitili=$_POST['Pankkitili'];

  
      //Toimii ja lisää maksun kyseisen käyttäjän tilille.

  $sql = $db->prepare("INSERT INTO Maksu VALUES (?,?,?,?,?,?,?,?)");

      //Suoritetaan valmisteltu proserduuri

      $sql -> execute(array(NULL, $Tilinro, $Nimi,$Viesti,$Viite,$Eräpäivä,$Summa,$Pankkitili));

      $yhteys = null;
      echo "Maksu suoritettu<br><br>";
      echo "<input type='submit' value = 'Takaisin' <a href='#' onclick='history.back();'></a>";

  http_response_code(201);
?>
