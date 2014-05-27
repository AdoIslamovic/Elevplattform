<?php
	require 'core/init.php';
	$general->logged_in_protect();
	if (isset($_GET['email']) && !empty($_GET['email_code'])){
	    echo(file_get_contents("htmltoActivateFile.txt"));
		echo("<h3>Thank you we've activated your account. You're free to log in!</h3>");
	} else if (isset($_GET['email'], $_GET['email_code'])){
		$email = trim($_GET['email']);
		$email_code = trim($_GET['email_code']);
			if ($users->email_exists($email) === false){
				$errors[0] = 'Sorry, we couldn\'t find that email address. <br>';
			} else if ($users->activate($email, $email_code) === false){
				$errors[1] = 'Sorry, we couldn\'t activate your account';
			}
		if (!empty($errors)){
			echo '<p>'.implode($errors).'</p>';
		}
		else{
			header('Location: activate.php?success');
			exit();
		}
		echo("</div></body></html>");
	}
	else{
        header('Location:index.php');
        exit();
	}
	
?>