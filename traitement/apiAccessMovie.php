<?php

$request = new HttpRequest();
$request->setUrl('https://moviesdatabase.p.rapidapi.com/actors');
$request->setMethod(HTTP_METH_GET);

$request->setHeaders([
	'X-RapidAPI-Key' => 'd923a55b87msh25f72877ab655dfp13cec4jsn11d7f9fdfd52',
	'X-RapidAPI-Host' => 'moviesdatabase.p.rapidapi.com'
]);

try {
	$response = $request->send();

	echo $response->getBody();
} catch (HttpException $ex) {
	echo $ex;
}