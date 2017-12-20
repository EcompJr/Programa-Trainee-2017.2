<?php
    require_once("MyDatabase.class.php");
    require_once("Member.class.php");    
    
    $database = new MyDatabase();
    $member = new Member("Emille", "12345", "emilegatinhadeilheus@gmail.com", "07/07/2017");
    $database->addMember($member);