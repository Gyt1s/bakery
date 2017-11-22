<!DOCTYPE html>
<html>
<head>
	<title>Nauji duomenys</title>
	<link rel="stylesheet" href="css/app.css">
</head>
<body style="text-align: center;">
	<form method="POST" action="create.php">

		<div> Data : </div> 
		<input type="date" name="data"> <br>

		<div> Preke : </div>

		<select name="product">

			<?php
				$products= json_decode (file_get_contents('data/products.json'), true);

				foreach ($products as $key => $value) {

					echo "<option value=\"$key\">$value</option>";
				}
			?>
		</select>

		<div> Vakarysktis likutis : </div> 
		<input type="number" name="VL"> <br>

		<div> Pagaminta : </div>
		<input type="numbe" name="PG"> <br>

		<div> Parduota : </div>
		<input type="number" name="PR"> <br>

		<div> Sugadinta : </div>
		<input type="number" name="SG"> <br>

		<div> Galutinis likutis : </div>
		<input type="number" name="GL"> <br>

		<input type="submit" value="Issaugoti duomenys">

		<!---<th>VL</th>
			<th>PG</th>
			<th>PR</th>
			<th>SG</th>
			<th>GL</th>-->
	</form>
</body>
</html>