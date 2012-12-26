<?php
	session_start();
	
	require_once 'inc/MCAPI.class.php';
	require_once 'inc/config.inc.php'; //contains apikey

	$api = new MCAPI($apikey);
	$msg = '';

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$is_ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) ? true : false;

		if(!empty($_POST['e-mail'])){
			if(filter_var($_POST['e-mail'], FILTER_VALIDATE_EMAIL)){
				$email = $_POST['e-mail'];
			}else{
				$msg.='L’email semble incorrect ';

				$_SESSION['errors'] = $msg;

				if( $is_ajax ){
					header('HTTP/1.0 404 Not Found');
					echo $msg;
					exit();
				}
			}
		}else{
			$_SESSION['errors'] = 'le champ e-mail ne doit pas être vide';
		}

		// By default this sends a confirmation email - you will not see new members
		// until the link contained in it is clicked!
		$retval = $api->listSubscribe( $listId, $email, array() );

		if ($api->errorCode){
			
		} else {
		    $_SESSION['errors'] = 'Subscribed - look for the confirmation email';
		}

		if (!$is_ajax) {			
			header('Location: ' . $_SERVER['HTTP_REFERER'] . '/#newsLetter');
		}else{
			echo($msg?$msg:'Le formulaire de contact à bien été envoyé');
		}
	}
