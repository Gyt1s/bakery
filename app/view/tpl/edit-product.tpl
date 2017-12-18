<div style="text-align: center">
<form method="POST" action="?view=product&action=update&id=(@id)" enctype="multipart/form-data">

    <div> EAN : </div>
    <input type="number" name="ean" value="(@ean)"> <br>

    <div> Mato Vienetas :</div>
        <select name="unit" >
            <option value="KG">KG</option>
            <option selected value="PCS">VNT</option>
        </select> <br>


    <div> Pavadinimas :</div>
    <input type="text" name="name" value="(@name)"> <br>

    <div> Svoris :</div>
    <input type="number" step="0.001" name="weight" value="(@weight)"> <br>

    <div> Savikaina :</div>
    <input type="number" step="0.001" name="prime_cost" value="(@prime_cost)"> <br>

    <div> Pardavimo kaina :</div>
    <input type="number" step="0.001" name="sale_price" value="(@sale_price)">

    <div> Nuotrauka :</div>
    <input type="text" disabled value="(@picture)" name="picture"> <br>

    <input type="submit" class="btn btn-dark" value="Issaugoti duomenys"> <br>

</form>
</div>