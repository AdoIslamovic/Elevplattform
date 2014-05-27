<?php
Class Postcreater{
	
	require 'core/init.php';

			private $db;

		public function __construct($database) {
			$this->db = $database;
		}

	

			function postNews($username, $content){

			
			
			
			$query = $this->db->prepare("INSERT INTO posts (username, content) VALUES (?, ?) ");

			$query->bindValue(1, $username);
			$query->bindValue(2, $content);

			try{
				$query->execute();
				
			}catch(PDOException $e){
				die($e->getMessage());
			}
			


	if (isset($_POST['submit'])){

		if (empty($_POST['username']) || empty($_POST['content']) {

			$errors[] = 'All fields are required';
 
	if (empty($errors) === true){

			$username = htmlentities($_POST['username']);
			$content = htmlentities($_POST['content']);
			

			$posts->register($username, $content);
			header('Location: News.php?success');
			exit();
		}

}







?>