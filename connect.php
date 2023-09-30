<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://deezerdevs-deezer.p.rapidapi.com/infos",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: deezerdevs-deezer.p.rapidapi.com",
		"X-RapidAPI-Key: 6be32b6585msh739088a21dcd723p1cf50cjsn8c4f40ca3427"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
?>