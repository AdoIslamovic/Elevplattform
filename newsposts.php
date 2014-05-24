<?php

require 'core/init.php';




if(!empty($_POST))	
{
	$_POST = null;
	$username = filter_input(INPUT_POST, 'username', FILTER_VALIDATE_INT);
	$content   = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_LOW);
	$statement = $db->prepare("INSERT INTO posts (date, username, content) VALUES (NOW(), username, :content)");
	$statement->bindParam(":username", $username);
	$statement->bindParam(":content", $content);
	$statement->execute();
}

?>