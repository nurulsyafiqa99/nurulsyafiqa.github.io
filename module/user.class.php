<?php
	include "/../controller/manipulation.class.php";
	include "/../controller/layout.class.php";	
	class User extends Manipulation{
		private $fullName;
		private $username;
		private $email;
		private $password;
		private $lavel;
		private $sessionUsername;
		
		function __construct(){
			parent::__construct();
			session_start();
			$this->fullName = isset($_POST['fullName']) ? $_POST['fullName'] : null;
			$this->username = isset($_POST['username']) ? $_POST['username'] : null;
			$this->email = isset($_POST['email']) ? $_POST['email'] : null;
			$this->password= isset($_POST['password']) ? $_POST['password'] : null;
			$this->level= isset($_POST['level']) ? $_POST['level'] : null;
			$this->sessionUsername= isset($_SESSION['usernameResepKita']) ? $_SESSION['usernameResepKita'] : null;
		}

		function getSessionUsername(){
			return $this->sessionUsername;
		}
		
		function insertUser(){
			$alert = new layout();
			$this->getRecord('*','user WHERE username="'.$this->username.'"');
			$recordCount = $this->recordCount();
			if($recordCount>0){
				return 0;
			}else{
				$data=array('',$this->fullName,$this->username,$this->email,$this->password,$this->level);
				$this->insert('user',$data);
				return 1;
				
			}
		}
		function getUser($username){
			$this->getRecord('*','user WHERE username="'.$username.'"');
			$getRow = $this->getArray();
			return $getRow;

		}
		function checkLogin(){
			$this->getRecord('username,password','user WHERE username="'.$this->username.'" && password="'.$this->password.'"');
			$recordCount = $this->recordCount();
			if($recordCount>0){
				$this->createSession($this->username);
			}else{
				return 0;
			}
		}

		function createSession($username){
			session_start();
			$_SESSION['usernameResepKita'] = $username; 
			header("location: index.php");
		}

		function checkSession($page){
			if($page=='signin' || $page=='signup'){
				if(!empty($this->sessionUsername))
					header('location: index.php');
			}else{
				//index
				if(empty($this->sessionUsername)){
					header("location: signin.php");
				}
			}
		}

		function getSession(){
			return $this->sessionUsername;
		}

		function logout($sessionUsername){
			session_start();
			$sessionUsername = $this->sessionUsername;
			if(ISSET($sessionUsername)){ 
				UNSET($sessionUsername); 
			} 
				header("location: signin.php"); 
				session_destroy(); 
		}
		
	}
?>