<?php

function db_connect ()
{
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'gp_bakery';

	$conn = mysqli_connect($servername, $username, $password, $dbname, 3307);

	if (!$conn)
	{
		die("Could not connect");
	}

	$conn->set_charset(`utf8mb4`);

	return $conn;
}

function db_query (string $query)
{

	$conn = db_connect();

	$result = $conn->query ($query);

	$conn->close ();

	return $result;
}

/*$result = $conn->query('SHOW TABLES');

print_r ($result);

foreach ($result as $key => $value) {
	echo ($value['Tables_in_gp_bakery'] . "<br>");

}


//mysqli_close ($conn);

$conn->close();
*/