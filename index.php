<!DOCTYPE html>
<html>
<head>

	<title>bakery</title>
	<link rel="stylesheet" href="css/app.css">

</head>
<body>
<table class="table">
	<thead class="table-header">
		<tr>
			<th rowspan="2"> Pavadinimas</th>
			<th colspan="5">2017-11-09 </th>
			<th colspan="5">2017-11-10s</th>
		</tr>
		<tr>
			<th>VL</th> <!--Vakarykstis likutis-->
			<th>PG</th> <!--Pagaminta-->
			<th>PR</th> <!--Parduota-->
			<th>SG</th> <!--Sugadinta-->
			<th>GL</th> <!--Galutinis likutis-->
			<th>VL</th> <!--Vakarykstis likutis-->
			<th>PG</th> <!--Pagaminta-->
			<th>PR</th> <!--Parduota-->
			<th>SG</th> <!--Sugadinta-->
			<th>GL</th> <!--Galutinis likutis-->
		</tr>

	</thead>

	<tbody class="table-body">
		
		<tr>

			<td>Aguonele</td>
			<td>5</td>
			<td>26</td>
			<td>13</td>
			<td>3</td>
			<td>10</td>
			<td>5</td>
			<td>26</td>
			<td>13</td>
			<td>3</td>
			<td>10</td>

		</tr>

		<tr>
			
			<td>Varskes</td>
			<td>6</td>
			<td>26</td>
			<td>13</td>
			<td>1</td>
			<td>18</td>
			<td>6</td>
			<td>26</td>
			<td>13</td>
			<td>1</td>
			<td>18</td>

		</tr>

		<tr>
			
			<td>Duona balta </td>
			<td>2</td>
			<td>26</td>
			<td>18</td>
			<td>3</td>
			<td>7</td>
			<td>2</td>
			<td>26</td>
			<td>18</td>
			<td>3</td>
			<td>7</td>

		</tr>

		<tr>
			
			<td>Duona juoda</td>
			<td>0</td>
			<td>26</td>
			<td>13</td>
			<td>6</td>
			<td>7</td>
			<td>0</td>
			<td>26</td>
			<td>13</td>
			<td>6</td>
			<td>7</td>
		</tr>

		<tr>
			
			<td>Duona juoda</td>
			<td>20</td>
			<td>26</td>
			<td>13</td>
			<td>0</td>
			<td>23</td>
			<td>20</td>
			<td>26</td>
			<td>13</td>
			<td>0</td>
			<td>23</td>

		</tr>

		<tr>

			<td>Duona rugine</td>
			<td>1</td>
			<td>30</td>
			<td>10</td>
			<td>1</td>
			<td>20</td>
			<td>1</td>
			<td>30</td>
			<td>10</td>
			<td>1</td>
			<td>20</td>

		</tr>

	</tbody>

<script type="text/javascript">

 //OPTION I
	
var _arrayOfOsbject = 
[
	{
		"date":"2017-11-09",
		"product":"Aguonele",
		"data":[5, 26, 13, 3, 10]
	},
	{
		"date":"2017-11-09",
		"product":"Varskes",
		"data":[6, 26, 13, 1, 18]
	},
]
 // OPTION II 
var _objectByDay = {
	"2017-11-09" :
[
	{
		"product":"Varskes",
		"data":[6, 26, 13, 1, 18]
	},
	{
		"product":"Aguonele",
		"data":[5, 26, 13, 3, 10]
	},
]

[
	"2017-11-10" :
	
	{
		"product":"Varskes",
		"data":[6, 26, 13, 1, 18]
	},
	{
		"product":"Aguonele",
		"data":[5, 26, 13, 3, 10]	
	},
]
};
//OPTION III
var _objectByProduct =
	"Varskes" :
[
		{
			"date":"2017-11-11",
			"data:"[6, 26, 13, 1, 18]
		},
		{
			"date":"2017-11-12",
			"data":[2, 22, 12, 5, 14]
		},
],
	"Aguonele"
[
		{
			"date":"2017-11-11",
			"data":[5, 26, 13, 3, 10]
		},
		{
			"date":"2017-11-12",
			"data":[6, 21, 11, 1, 9]
		},
],

console.log (_arrayOfOsbject);
console.log (_objectByDay);
console.log (_objectByProduct);

//OPTION IV optimized by date

var _optimizeObject = {
	"2017-11-10" : 
	{
		"Varskes":[6, 26, 13, 1, 18]
		"Aguonele":[5, 26, 13, 3, 10]
	},
};

//OPTION V optimized by product

var _optimizedByProduct = {
	"Varskes"
	{
		"2017-11-10": [6, 26, 13, 1, 18]
		"2017-11-12": [5, 26, 13, 3, 10]
	}

};

// OPTION FINAL

var _product = 
{
	"p-1": "Varskes",
	"p-2": "Aguoneles",
}

var _finalByProduct = {
	"p-1" :
	{
		"2017-11-10": [6, 26, 13, 1, 18]
		"2017-11-11": []
	}
}



</script>



</body>
</html>