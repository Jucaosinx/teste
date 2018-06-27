<?php

$postfields = [
	'name' => $_POST['name']
];

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://localhost/teste/clientes_db.php");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, TRUE);
curl_setopt($curl, CURLOPT_POSTFIELDS, $postfields);
$result = curl_exec($curl);
curl_close($curl);
echo $result;