<?php
  include 'connection.php';

  $Tilinro=$_POST['Tilinro'];
  $Nimi=$_POST['Nimi'];
  $Viesti=$_POST['Viesti'];
  $Viite=$_POST['Viite'];
  $Eräpäivä=$_POST['Eräpäivä'];
  $Summa=$_POST['Summa'];
  $Pankkitili=$_POST['Pankkitili'];

  $sql = $db->prepare("INSERT INTO Maksu VALUES (?,?,?,?,?,?,?)");

      //Suoritetaan valmisteltu proserduuri

      $proseduuri -> execute(array($Tilinro, $Nimi,$Viesti,$Viite,$Eräpäivä,$Summa,$Pankkitili));

      $yhteys = null;
      echo "Maksu suoritettu";
  /*$sql=$db->prepare("INSERT INTO Maksu (Tilinro,Nimi,Viesti,Viite,Eräpäivä,Summa,Pankkitili)VALUES(:a_Tilinro,:a_Nimi,:a_Viesti,:a_Viite,:a_Eräpäivä,:a_Summa,:a_Pankkitili)");
  $sql->bindParam(':a_Tilinro',$Tilinro);
  $sql->bindParam(':a_Nimi',$Nimi);
  $sql->bindParam(':a_Viesti',$Viesti);
  $sql->bindParam(':a_Viite',$Viite);
  $sql->bindParam(':a_Eräpäivä',$Eräpäivä);
  $sql->bindParam(':a_Summa',$Summa);
  $sql->bindParam(':a_Pankkitili',$Pankkitili);
  $sql->execute();
  */

  http_response_code(201);
?>
