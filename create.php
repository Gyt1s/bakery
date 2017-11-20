<?php 

$new_data = ($_POST);

var_dump ($new_data);

$existing_data = json_decode (file_get_contents('data/bakery-data.json'));
//var_dump($existing_data);

$existing_data = objectToArray ($existing_data);

//var_dump($existing_data);
//var_dump( (array) ($existing_data);

updateData($existing_data, $new_data);


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

function updateData (&$existing_data, $new_data)
{

	if (isset($existing_data [ $new_data ['data']]))
	{
 
		if (isset($existing_data [ $new_data ['data'] ][$new_data ['product'] ]))
		{
			echo "ERROR";
		}	
		else
		{
			echo "CREATE PRODUCT";
		}
	}
	else
	{
		echo "CREATE DATE";
		$existing_data[$new_data ['date']] = []

		echo "CREATE PRODUCT";
		$existing_data [ $new_data ['data'] ][$new_data ['product'] ] = [

			$new_data["vl"],
			$new_data["pg"],
			$new_data["pr"],
			$new_data["sg"],
			$new_data["gl"]
		];
	}
}




