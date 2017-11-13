<?php

$days = $keys = '';

	foreach ($data as $key => $value) {	
		$days .= "<th colspan=\"5\">$key</th>";
		$keys .= "<th>VL</th><th>PG</th><th>PR</th><th>SG</th><th>GL</th>";

	foreach ($value as $name => $data) {
		# code...
		//name 				//data
		"Varskes"  => [6, 26, 13, 1, 12],
	foreach ($data as $amount) {
		# code...
		// amount 
		3
	}
	}

		}
?>


<table class="table">
	<thead class="table-header">
		<tr>
			<th rowspan="2"> Pavadinimas</th>
			<?php
				echo $days;
			?>
		</tr>
		<tr>
			<?php
			echo $keys;
			?>
		</tr>
	</thead>
</table>


<?php 
/*
var_dump($data);
return;

$html = '';

$html .='<table>';
$html .='<thead>';

$html .='</thead>';
$html .='</table>';

echo $html;

return;



