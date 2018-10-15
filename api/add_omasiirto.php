<?php
  include 'connection.php';
  include "errorDetector.php";



    $proseduuri = $yhteys->prepare("CALL UusiSuoritus(?, ?, ?, ?)");

    //Suoritetaan valmisteltu proserduuri

    $proseduuri -> execute(array($_POST["etun"], $_POST["sukun"],$_POST["oj"],
    $_POST["as"] ));

    $yhteys = null;

    echo "Merkintä tietokantaan suoritettu onnistuneesti!";
    echo "<br>";
    echo "Palaa selaimen edellinen-painikkeella takaisin!";


?>
<!--CREATE DEFINER=`t7aaju00`@`localhost` PROCEDURE `UusiSuoritus`(
IN Tililta VARCHAR(45),
IN Tilille VARCHAR(45),
IN Summa INT(11)


)
Aliohjelma:BEGIN
DECLARE OpID INT DEFAULT 0;
DECLARE KID INT DEFAULT 0;
SELECT idOpiskelija INTO OpID FROM Opiskelija WHERE Etunimi=En AND Sukunimi=Sn;

IF opID=0 THEN
   SELECT 'Opiskelijaa ei ole';
   LEAVE Aliohjelma;
END IF;


SELECT idOpintojakso INTO KID FROM Opintojakso WHERE KK=koodi;

IF KID=0 THEN
   SELECT 'Opintojaksoa ei ole';
   LEAVE Aliohjelma;
END IF;


IF Arvos < 0 OR Arvos > 5 THEN
   SELECT 'Arvosana väärin';
   LEAVE Aliohjelma;
END IF;
INSERT INTO Arviointi VALUES (NULL,CURDATE(),Arvos,KID,OpID);

END
