<?php

$rows = $days = [];

$keys = '';
/*
$products= json_decode (file_get_contents('data/products.json'), true);

ksort($data);
*/
	foreach ($products as $value) {	

		if (!isset($rows[$value['id']]))
		{
			$rows[$value['id']] = '<td>' . $value['name'] . '</td>';
		}

	}

	foreach ($productHistory as $value)
	{
		/*print_r($value);
		die();*/

		if  (!isset($days[$value['date']]))
		{

		$days[$value['date']] = $value ['date'];
		$keys .= "<th>VL</th><th>PG</th><th>PR</th><th>SG</th><th>GL</th>";
/*
		if (!isset($rows[$value['product_id']))
			{
				$rows[$value['product id']] .= '<td>' . $value['product_id'] . '</td>';
			}*/

		}
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

			foreach ($days as $date) {
			echo '<th colspan="5">' . $date . '<th>';
		}
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
		foreach ($rows as $key => $value) {
			echo '<tr>' . $value . '</tr>';
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



