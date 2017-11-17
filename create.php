<?php 

$new_data = ($_POST);

var_dump ($new_data);

$existing_data = file_get_contents('data/bakery-data.json');

var_dump($existing_data);