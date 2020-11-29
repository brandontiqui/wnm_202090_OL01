<?php

include_once "../php/functions.php";

$output = [];

$data = json_decode(file_get_contents("php://input"));

// print_p($data);

switch($data->type) {
	case "products_all":
		$output['result'] = makeQuery(makeConn(), "
			SELECT *
			FROM `products`
			ORDER BY `add_date` DESC
			");
		break;
	default: $output['error'] = "No valid type";
}

echo json_encode($output, JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE);