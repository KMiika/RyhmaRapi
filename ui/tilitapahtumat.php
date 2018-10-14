<h2>Second Page</h2>

		<form id = "sourceForm" action="get_tilitapahtumat.php" method = "GET">
			Tilitapahtumat tililtä <br><br>
			<button action ></button>
			<canvas id="canvas"></canvas><br>
			<h4>Saaja Tilinumero Eräpäivä</h5>
			<ul>
				<li class="listItem" id = "nmb1">Oulun kaupunki 10.2.2018</li>
				<li class="listItem" id = "nmb2">Oulun kaupunkiFi43433242423423423424 								10.2.2018</li>
				<li class="listItem" id = "nmb3">Oulun kaupunkiFi43433242423423423424 								10.2.2018</li>
				<li class="listItem" id = "nmb4">Oulun kaupunkiFi43433242423423423424 								10.2.2018</li>
			</ul>
			

		</form>


		<form id = "dataForm" action="dbInsertUusiSuoritus.php" method="POST">
    <h3>Syötä seuraavat tiedot</h3>
<Label>Etunimi:</Label> <br>
<input type="text" name="etun"> <br>
<Label>Sukunimi:</Label> <br>
<input type="text" name="sukun"> <br>
<Label>Opintojakson koodi:</Label> <br>
<input type="text" name="oj"> <br>
<Label>Arvosana:</Label> <br>
<input type="number" name="as"><br><br>
<button type="submit">Lisää merkintä