<?php
require "connection.php";


// $fname = mysqli_prepare(Database::getConnection(),) ;

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$password = $_POST["password"];
$studying_place = $_POST["studying_place"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];

$errorMsg = "";

if (empty($fname)) {
    $errorMsg .= "Please enter your First Name \n";
} else if (strlen($fname) > 50) {
    $errorMsg .= "First Name should be less than 50 characters \n";
}

if (empty($lname)) {
    $errorMsg .= "Please enter your Last Name \n";
} else if (strlen($lname) > 50) {
    $errorMsg .= "Last Name should be less than 50 characters \n";
}

if (empty($email)) {
    $errorMsg .= "Please enter your email \n";
} else if (strlen($email) > 50) {
    $errorMsg .= "Email should be less than 100 characters \n";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errorMsg .= "Invalid Email \n";
}

if (empty($mobile)) {
    $errorMsg .= "Please enter your mobile \n";
} else if (strlen($mobile) != 10) {
    $errorMsg .= "Mobile should be 10 digits \n";
} else if (!preg_match('/^0[7-8][012456789]\d{7}$/', $mobile)) {
    echo ($mobile);
    $errorMsg .= "Invalid Sri Lankan mobile number \n";
}

$pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/';


if (empty($password)) {
    $errorMsg .= "Password is either empty or not equal with the repeat-password  \n";
} else if (strlen($password) > 50) {
    $errorMsg .= "Password must be less than 50 characters \n";
} else if (strlen($password) < 8) {
    $errorMsg .= "Password must be greater than 8 characters \n";
} else if (!preg_match($pattern, $password)) {
    $errorMsg .= "Invalid Password: Must be \n
    At least length 8 \n
    Containing at least one lowercase letter \n
    At least one uppercase letter \n
    At least one number \n";
}

if (!empty($errorMsg))
    echo $errorMsg;
else {
    $query = " SELECT * FROM `student` WHERE `email`='" . $email . "' 
     OR `mobile`='" . $mobile . "' ";
    $stmt = Database::getConnection()->prepare('SELECT * FROM student WHERE email = ? OR `mobile` = ? ');
    $stmt->bind_param('ss', $email,$mobile); // 's' specifies the variable type => 'string'

    $stmt->execute();

    $rs = $stmt->get_result();

    $num_rows = $rs->num_rows;

    if ($num_rows == 0) {
        $stmt = Database::getConnection()->prepare('INSERT INTO `student` 
         (`email`,`fname`,`lname`,`studying_place`,`password`,`mobile`) VALUES (?,?,?,?,?,?);');
        $stmt->bind_param('ssssss', $email,$fname,$lname,$studying_place,$password,$mobile); // 's' specifies the variable type => 'string'


        $executionResult = $stmt->execute();

        if ($executionResult === false) {
            echo "Error executing statement: " . $stmt->error;
        } else {
            echo ("Success");
        }
    } else {
        echo("There is a previously registered student with the same email or mobile");
    }
}
