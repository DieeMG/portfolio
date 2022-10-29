<?php
$name = $_POST['name'];
$email = $_POST['email'];
$project = $_POST['project'];

$toEmail = 'hola@diegogelvez.ar';
$titulo = 'Contacto Web | '.$name;
$header = 'From: ' . $email;

$msjCorreo = "Contacto desde Formulario web \n
Nombre: $name\n
E-Mail: $email\n
Proyecto: $project\n";


if($name == '' || $email == '' || $project == ''){
	echo "Please fill all fields";
}else{
    mail($toEmail, $titulo, $msjCorreo, $header);
	echo "Form Submitted Succesfully. The details are:"."<br><br>";
	echo "<b>Name:</b> ".$name."<br>";
	echo "<b>Email:</b> ".$email."<br>";
	echo "<b>project:</b> ".$project."<br>";
}
?>