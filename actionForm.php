<?php
$name = $_POST['name'];
$email = $_POST['email'];
$project = $_POST['project'];

if ( $name == '' || $email == '' || $project == '' ) {

    echo "Please fill all fields";

} else {

    $receiver = 'hola@diegogelvez.ar';
    $subject = "Contacto Web | $name <$email>";
    $sender = 'From: ' . $email;
    
    $body = "Contacto desde Formulario web \nNombre: $name\nE-Mail: $email\n\nProyecto: $project\n";
    
    if ( mail($receiver, $subject, $body, $sender) ) {

        echo "Mensaje enviado correctamente";

    } else {

        echo "Hubo un problema al enviar el mensaje";

    }
    
}
?>