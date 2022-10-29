<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
if($name == '' || $email == '' || $subject == '' || $message == ''){
	echo "Please fill all fields";
}else{
	echo "Form Submitted Succesfully. The details are:"."<br><br>";
	echo "<b>Name:</b> ".$name."<br>";
	echo "<b>Email:</b> ".$email."<br>";
	echo "<b>Subject:</b> ".$subject."<br>";
	echo "<b>Message:</b> ".$message;
}
?>