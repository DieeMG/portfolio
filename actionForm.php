<?php
include ("assets/keys.php");
require_once 'config.php'; 

$name = $_POST['name'];
$email = $_POST['email'];
$project = $_POST['project'];
$token = $_POST['token'];

$key = $keys['private'];
$url = 'https://www.google.com/recaptcha/api/siteverify';

$request = "$url?secret=$key&response=$token";
$response = file_get_contents( $request );

$json = json_decode($response, true);
$ok = $json['success'];
$score = $json['score'];

if ( $ok === false ) {

    echo $lang['email_response_spam'];
    die();

} 

if (  $score < 0.7 ) {
    
    echo $lang['email_response_spam'];
    die();
}
        
if ( ! $email == '' && ! $name == '' && ! $project == '' ) {

    if ( filter_var($email, FILTER_VALIDATE_EMAIL) ) {

        $receiver = 'hola@diegogelvez.ar';
        $subject = "Contacto Web | $name < $email >";
        $sender = 'From: ' . $email;
        
        $body = "Contacto desde Home diegogelvez.ar \n\nNombre: $name\nE-Mail: $email\n\nProyecto: $project\n";
        
        if ( mail($receiver, $subject, $body, $sender) ) {
            echo $lang['email_response_ok'];;
        } else {
            echo $lang['email_response_bad'];;
        }
        
    } else {
        echo $lang['email_response_email'];;
    }

} else {
    echo $lang['email_response_all'];;
}

?>