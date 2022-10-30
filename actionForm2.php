<?php
$name = $_POST['name'];
$token = $_POST['token'];
$email = $_POST['email'];
$project = $_POST['project'];

$clave = '6LcWExchAAAAAM_VU2moElOVDAiTQ1k7kVH9Xrqz';
$url = 'https://www.google.com/recaptcha/api/siteverify';

$request = "$url?secret=$clave&response=$token";
$response = file_get_contents( $request );

$json = json_decode($response, true);
$ok = $json['success'];
$score = $json['score'];

if ( $score < 0.7 ) {

    if ( ! $email == '' && ! $name == '' && ! $project == '' ) {

        if ( filter_var($email, FILTER_VALIDATE_EMAIL) ) {
    
            $receiver = 'hola@diegogelvez.ar';
            $subject = "Contacto Web | $name < $email >";
            $sender = 'From: ' . $email;
            
            $body = "Contacto desde Home diegogelvez.ar \n\nNombre: $name\nE-Mail: $email\n\nProyecto: $project\n";
            
            if ( mail($receiver, $subject, $body, $sender) ) {
                echo "Mensaje enviado correctamente";
            } else {
                echo "Hubo un problema al enviar el mensaje";
            }
            
        } else {
            echo "Por favor ingresá un email valido";
        }
    
    } else {
        echo "Por favor completá todos los campos";
    }

} else {
    echo "El mensaje no pudo ser enviado";
}

?>