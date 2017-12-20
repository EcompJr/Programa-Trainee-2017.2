<?php
    require_once("../database/Connection.class.php");
    require_once("../controllers/MembersController.class.php");
    session_start();
    
    if(isset($_POST["registerAttempt"])) { 
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]); 
        $birthDate = $_POST["birthDate"];
        $member = new Member($email, $password, null, $name, $birthDate);

        $membersController = new MembersController();
        $membersController->registerNewMember($member);
        header("location:../index.php?register=true");
    }

    if(isset($_POST["loginAttempt"])) { 
        $email = $_POST["email"];
        $password = md5($_POST["password"]); 
        $member = new Member($email, $password);

        if($member->auth()) {
            $_SESSION["auth"] = true;
            $_SESSION["member"] = $member;
            header("location:../view/home.php");
        } else {
            header("location:../index.php?valid=false");
        }
    }

    if(isset($_SESSION["auth"]) && $_SESSION["auth"] == true && isset($_POST["logoutAttempt"])) { 
        unset($_SESSION["auth"]);
        unset($_SESSION["member"]);
        session_destroy();
        header("location:../index.php"); 
    }
?>