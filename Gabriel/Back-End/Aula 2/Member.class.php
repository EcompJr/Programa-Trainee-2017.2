<?php
	/**
	* 
	*/
	class Member
	{
		private $id;
		private $name;
		private $password;
		private $email;
		private $nasc;
		
		function __construct($name, $pass, $email, $nasc, $id = null){
			$this->name = $name;
			$this->password = $pass;
			$this->email = $email;
			$this->nasc = $nasc;
			$id->id = $id;
		}

		function getId(){
			return $this->id;
		}

		function getName(){
			return $this->name;
		}

		function getPassword(){
			return $this->pass;
		}

		function getEmail(){
			return $this->email;
		}

		function getBirthDate(){
			return $this->nasc;
		}

		
	}

?>