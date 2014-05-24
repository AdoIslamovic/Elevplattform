<?php
Class Postcreater{
	
	private $db;

	public function __construct($database) {
			$this->db = $database;
		}
		public function createpost($username, $content, $time){

			$time = time();
			$ip = $_SERVER['REMOTE_ADDR'];
			
			$password = sha1($password);

			$query = $this->db->prepare("INSERT INTO users (username, content, time) VALUES (?, ?, ?) ");

			$query->bindValue(1, $username);
			$query->bindValue(2, $content);
			$query->bindValue(3, $time);
			
			

			
			
		}

		public function mattepost($id){
			
			$query = $this->db->prepare("SELECT * FROM matte WHERE id = ?");
			$query->bindValue(1, $id);

			try{

				$query->execute();

				return $query->fetch();

			} catch(PDOException $e){
				die($e->getMessage());
			}
		}

		public function get_matte(){

			$query = $this->db->prepare("SELECT * FROM matte ORDER BY time DESC");

			try{
				$query->execute();
			} catch(PDOException $e){
				die($e->getMessage());
			}

			return $query->fetchAll();
		}





}






?>