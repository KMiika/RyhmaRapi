<?php
require "connection.php";
	$username=$_POST['username'];
  $password=$_POST['password'];

  $sql = $db->prepare("SELECT idTunnus FROM Tunnus WHERE Ktunnus = :Ktunnus AND Salasana = :Salasana");
  $sql->bindParam(':username',$username);
  $sql->bindParam(':password',$password);
  $sql->execute();
	$result = $sql->fetch(PDO::FETCH_ASSOC);

    $success = $result['idUsers'];

    if($success > 0){
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['idUsers']=$success;
        header("Location: ../ui/index.php");
        exit();
    }
    else {
      header("Location: ../har10/ui/login.html");
    }
?>
