<?php
session_start();

require "Meeting.php";

$email = "";
if (isset($_SESSION["admin_email"])) {
    $email = $_SESSION["admin_email"];
} 



$errorMsg = "";

class Superclass {
    public function __construct($parameter) {
        // Constructor logic
    }
}


if(isset($_SESSION["admin_d_id"])){


    $lecture = new Meeting(
        $_SESSION["admin_d_id"]
    );
    
    $lecture->cancel();
    
    echo("success");
}


