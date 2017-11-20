<?php 

$new_data = ($_POST);

//reading data
$existing_data = json_decode (file_get_contents('data/bakery-data.json'));

$existing_data = objectToArray ($existing_data);

updateData($existing_data, $new_data);

file_put_contents('data/bakery-data.json', json_encode($existing_data));


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
			createProduct ();
		}
	}
	else
	{

		$existing_data[$new_data['data']] = [];

		$existing_data = createNewProduct($existing_data, $new_data);
	}
}

function createNewProduct ($existing_data, $new_data)
{
		$existing_data [ $new_data ['data'] ][$new_data ['product'] ] = [

			(int) $new_data["VL"],
			(int) $new_data["PG"],
			(int) $new_data["PR"],
			(int) $new_data["SG"],
			(int) $new_data["GL"]
		];
	return $existing_data;
	
}




