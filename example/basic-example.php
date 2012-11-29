<?php

$_POST['name'] = 'jordi';
$_POST['tsr'] = 213;

$request = new HTTPRequest('http://www.example.com/demo.php');

$request->method = 'post';
$request->postFields = $_POST;

$request->useragent = 'My own custom useragent';
$request->timeout = 10; // timeout after 10 seconds 

if($request->send()) {
	echo $request->getResult();
}  else {
	echo $request->getErrorMessage();
}

?>