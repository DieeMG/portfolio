<?php
$name = $_POST['name'];
$token = $_POST['token'];
$email = $_POST['email'];
$project = $_POST['project'];

$clave = '6LcWExchAAAAAM_VU2moElOVDAiTQ1k7kVH9Xrqz';
$url = 'https://www.google.com/recaptcha/api/siteverify';

$request = "$url?secret=$clave&response=$token"
$response = file_get_contents( $request );

$json = json_decode($response, true);
$ok = $json['success'];
$score = $json['score'];



?>