<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Simple RestApi</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" media="screen" href="../css/mystyle.css" />
      <script src="rest.js"></script>
  </head>
  <body>
<div id="login_status">
  <?php
  session_start();
    if(isset($_SESSION['username'])){
      echo 'Tervetuloa '.$_SESSION['kokoNimi'].'<br>';
      echo '<a href="../api/logout.php"><button>Kirjaudu ulos</button></a>';
    }
    else {
      echo 'Tervetuloa vieras ';
      echo '<a href="login.html"><button>Kirjaudu</button></a>';
    }
  ?>
  <hr>
</div>


<div id="Sivupaneeli">
  <ul>

    <h5>Tilit ja maksut</h5>
    <li> <a onclick="loadXMLDoc('../api/get_tilit.php')">Tilit</a> </li>
    <li> <a onclick="loadXMLDoc('../api/get_tilitapahtumat.php')">Tilitapahtumat</a> </li>
    <li> <a onclick="loadXMLDoc('../api/get_kortit.php')">Kortit</a> </li>
    <br><h5>Maksut</h5>
    <li> <a onclick="loadXMLDoc('uusimaksu.html')">Uusi maksu</a> </li>
    <li> <a onclick="loadXMLDoc('../api/omasiirto.php')">Oma siirto tilien välillä</a> </li>
    <li> <a onclick="loadXMLDoc('../api/get_maksu.php')">E-Laskut</a> </li>
  </ul>

</div>
  <div id="content">
    Tervetuloa käyttämään täysin tietoturvallista <br>
     ja ongelmatonta pankki järjestelmää
  </div>
  </body>
</html>
