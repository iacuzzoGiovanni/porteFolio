<?php
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		
		extract($_POST);
		$msg = '';

		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			$emailSender = $email;
		}else{
			$msg . 'L’email semble incorrect ';
		}
		
		$to = 'iacuzzogiovanni@gmail.com';
		
		$message = $nom . "\n\n" . $texte;

		$headers = 'From: iacuzzogiovanni@gmail.com' . "\r\n" .
			       'Reply-To: ' . $emailSender . "\r\n" .
			       'X-Mailer: PHP/' . phpversion();

		mail($to, 'aucun sujet', $message, $headers);


		
		if (!$estAjax) {
			header('Location: http://www.iacuzzo-giovanni.com#contact');
		}else{
			echo($msg?$msg:'Le formulaire de contact à bien été envoyé');
		}
	}