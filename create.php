<?php 

$new_data = ($_POST);

formatData ($new_data);

var_dump ($new_data);

$existing_data = json_decode (file_get_contents('data/bakery-data.json'));
//var_dump($existing_data);

$existing_data = objectToArray ($existing_data);
var_dump($existing_data);
//var_dump( (array) ($existing_data);


function formatOfData(array &$data)
{

}



function objectToArray (stdClass $obj) : array
{
	$obj = (array) $obj;

	foreach ($obj as $key => &$value) {

		if( gettype ($value) == 'object')
		{
			$value = objectToArray ($value);
		}

	}


	return $obj;
}


