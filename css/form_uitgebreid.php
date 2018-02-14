<?php
		if(isset($_GET['submit'])){
			echo $_GET['vnaam']."<br/>";
			echo $_GET['tussenv']."<br/>";
			echo $_GET['anaam']."<br/>";
			echo $_GET['straat']."<br/>";
			echo $_GET['huisnr']."<br/>";
			echo $_GET['postc']."<br/>";
			echo $_GET['plaats']."<br/>";
			echo $_GET['school']."<br/>";

		}
	?>

<!doctype html>
<html>
<head>
</head>
<body>
	<form action="form_page.php" method="GET">
		Voornaam:<br/>
		<input type="text" name="vnaam"><br/>
		Tussennaam:<br/>
		<input type="text" name="tussenv"><br/>
		Achternaam:<br/>
		<input type="text" name="anaam"><br/>
		Straat:<br/>
		<input type="text" name="straat"><br/>
		Huisnummer:<br/>
		<input type="number" name="huisnr"><br/>
		Postcode:<br/>
		<input type="text" name="postc"><br/>
		Plaats:<br/>
		<input type="text" name="plaats"><br/>
		School:<br/>
		<input type="text" name="school"><br/><br/>
		Vervoer:<br/>
		<select name="vervoer">
			<option value="fiets">Fiets</option>
			<option value="auto">Auto</option>
			<option value="ov">ov</option>
		</select><br/>
		Geslacht:<br/>
		<input type="radio" name="geslacht" value="man">
		<input type="radio" name="geslacht" value="vrouw"><br/>
		<input type="checkbox" name="meerjarig" value="Meerderjarig">Ik ben meerderjarig<br/>
		<input type="submit" name="submit">

	</form> 

</body>
</html>