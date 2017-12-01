<?php

$days = $keys = '';
$rows = [];
/*
$products= json_decode (file_get_contents('data/products.json'), true);

ksort($data);
*/

	foreach ($productHistory as $value)
	{		


		$days .= '<th colspan="5">' . $value ['date'] . '</th>';
		$keys .= "<th>VL</th><th>PG</th><th>PR</th><th>SG</th><th>GL</th>";

		/*foreach ($products as $key => $name) {	

				if (!isset($rows[$key]))
				{
					$rows[$key] .= "<td>$name</td>";
				}

				if (isset($value[$key]))
				{
					foreach ($value[$key] as $amount) {

						$rows[$key] .= "<td>$amount</td>";
						
					}
				}
				else
				{
					$rows[$key] .= "<td></td> <td></td> <td></td> <td></td> <td></td>";
				}
			}*/
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
	<tbody>
		
		<?php
		foreach ($rows as $row) {
			echo '<tr>' . $row . '</tr>';
		}

		?>

	</tbody>
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



