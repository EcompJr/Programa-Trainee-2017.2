<?php 
	
	class Member {
		private $id;
		private $name;
		private $password;
		private $birthDate;
		private $email;
		
		function __construct($name,$password,$birthDate,$email,$id = null)
		{
			$this->name = $name;
			$this->password = $password;
			$this->birthDate = $birthDate;
			$this->email = $email;
			$this->id = $id;
		}

		function getId(){
			return $this->id;	
		}

		function getName(){
			return $this->name;	
		}

		function getPassword(){
			return $this->password;	
		}

		function getBirthDate(){
			return $this->birthDate;	
		}

		function getEmail(){
			return $this->email;	
		}


	}

 ?>