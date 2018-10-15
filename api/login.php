<?php
require "connection.php";
	$username=$_POST['username'];
  $password=$_POST['password'];

  $sql = $db->prepare("SELECT idTunnus FROM Tunnus WHERE Ktunnus = :username AND Salasana = :password");
  $sql->bindParam(':username',$username);
  $sql->bindParam(':password',$password);
  $sql->execute();
	$result = $sql->fetch(PDO::FETCH_ASSOC);

    $success = $result['idTunnus'];

    if($success > 0){

        //Valmistellaan kysely, käyttäjän nimestä.
        $kayttajanNimi = $db->prepare("
        select Etunimi, Sukunimi FROM Asiakas1
        JOIN Tunnus on Tunnus.idAsiakas = Asiakas1.idAsiakas
        WHERE Ktunnus = $username;");//-

        //Suoritetaan kysely
        $kayttajanNimi->execute();//-

        //Tallennetaan tulos muuttujaan arrayna
        $result2 = $kayttajanNimi->fetch(PDO::FETCH_ASSOC);//-
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['idTunnus']=$success;

        //Välitetään käyttäjälle tiedot.
        $_SESSION['kokoNimi']= $result2['Etunimi'] . " " .$result2['Sukunimi'];//-
        header("Location: ../ui/index.php");
        exit();
    }
    else {
    header("Location: ../ui/login.html");
    }
?>
