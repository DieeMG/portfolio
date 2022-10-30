<?php
$name = $_POST['name'];
$email = $_POST['email'];
$project = $_POST['project'];

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
};

?>