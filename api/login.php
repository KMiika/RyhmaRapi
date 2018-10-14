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

        $kayttajanNimi = $db->prepare("CALL hae_nimi1(?)");//-
        /*$kayttajanNimi->bindParam($username);*/

        $kayttajanNimi->execute($username);//-
        $result2 = $kayttajanNimi->fetch(PDO::FETCH_ASSOC);//-
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['idTunnus']=$success;
        $_SESSION['kokoNimi']= $result2;//['Etunimi'] . " " .$result2['Sukunimi'];//-
        header("Location: ../ui/index.php");
        exit();

        /*$kayttajanNimi = $db->prepare("SELECT * FROM hae_nimi;");//-
        $kayttajanNimi->execute();//-
        $result2 = $kayttajanNimi->fetch(PDO::FETCH_ASSOC);//-
        //$row = mysqli_fetch_array($result2)
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['idTunnus']=$success;
        $_SESSION['kokoNimi']= $result2['Etunimi'] . " " .$result2['Sukunimi'];//-
        header("Location: ../ui/index.php");
        exit();*/
    }
    else {
    header("Location: ../ui/login.html");
    }
?>
