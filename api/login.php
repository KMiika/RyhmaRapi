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
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['idTunnus']=$success;
        header("Location: ../ui/index.php");
        exit();
    }
    else {
    header("Location: ../ui/login.html");
    }
?>
