<?php
require 'core/init.php';
if(!empty($_POST))
{
	$_POST = null;
	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_LOW);
	$content    = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_LOW);
	$statement = $db->prepare("INSERT INTO kemi (username, content, time) VALUES (:username, :content, NOW())");
	$statement->bindParam(":username", $username);
	$statement->bindParam(":content", $content);
	$statement->execute();

	header('Location: createposted.php');
	exit;
}







?>