<?php
session_start();
require "Student.php";

$student = new Student($_SESSION["admin_delete_student_email"]);

$student->delete();

echo("success");


?>