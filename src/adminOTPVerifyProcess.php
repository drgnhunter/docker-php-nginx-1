<?php
session_start();
require "connection.php";

$stmt = Database::getConnection()->prepare(' SELECT * FROM `admin` WHERE `otp`= ? AND `email`= ?  ');
$stmt->bind_param('ss', $_POST["otp"],$_POST["email"]); // 's' specifies the variable type => 'string'

$stmt->execute();


$rs = $stmt->get_result();

$num_rows = $rs->num_rows;

if($num_rows == 1){

    $_SESSION["admin_email"] = $_POST["email"];

    echo("success");
}
