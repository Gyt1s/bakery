<!DOCTYPE html>
<html>
<head>
    <title>Nauji duomenys</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body style="text-align: center;">

<form method="POST" action="create.php">


    <div> EAN :</div>
    <input type="number" name="ean"> <br>

    <div> Mato Vienetas :</div>
        <select name="unit" >
            <option value="KG">KG</option>
            <option value="PCS">VNT</option>
        </select> <br>


    <div> Pavadinimas :</div>
    <input type="text" name="name"> <br>

    <div> Svoris :</div>
    <input type="number" step="0.001" name="weight"> <br>

    <div> Savikaina :</div>
    <input type="number" step="0.001" name="prime_cost"> <br>

    <div> Pardavimo kaina :</div>
    <input type="number" step="0.001" name="sale_price"> <br>

    <input type="submit" value="Issaugoti duomenys">

</form>
</body>
</html>