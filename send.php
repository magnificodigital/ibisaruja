<?php

	$nome=$_POST["nome"];
	$email=$_POST["email"];
	$telefone=$_POST["tel"];

	require 'mail/PHPMailerAutoload.php';

	$mail = new PHPMailer();

	//$mail->SMTPDebug = 3;
	$mail->Charset = 'UTF-8'; //Linguagem				// Enable verbose debug output
	$mail->isSMTP();									// Set mailer to use SMTP
	$mail->Host = 'gateway.ekoconstrutora.com';			// Specify main and backup SMTP servers
	$mail->SMTPAuth = true;								// Enable SMTP authentication
	$mail->Username = 'mail@ekoconstrutora.com.br';		// SMTP username
	$mail->Password = 'coxinha#2016';					// SMTP password
	//$mail->SMTPSecure = 'tls';						// Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;									// TCP port to connect to
	$mail->From = 'mail@ekoconstrutora.com.br';
	$mail->FromName = 'Site - IBIS Arujá';
	$mail->addAddress('atendimento@ekoconstrutora.com.br');	        // Name is optional
	//$mail->addReplyTo('contato@ekoconstrutora.com.br', 'Eko Construtora');
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');');
	//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                    // Set email format to HTML

	$mail->Subject = "Novo Lead - Hotel Ibis Aruja";
	$mail->Body    = 'Nome: ' . $nome . '<br>E-mail:'  . $email. '<br>Telefone: ' . $telefone . '';

	if(!$mail->send()) {
   		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo "<script> alert('Mensagem enviada com sucesso!'); </script>";
		echo "<script> window.location.href = 'http://www.ekoconstrutora.com.br/ibisaruja/'; </script>";
	}
	
?>