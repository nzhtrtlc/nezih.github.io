<?php
require_once '../database/connect.php';
$response = array();
$email = $_GET["email"];
$user_password = $_GET["user_password"];
$stmt = $db->prepare('SELECT pass FROM users where email=:email');
$stmt->execute(array(':email' => $email));
if($stmt->rowCount() > 0){
    // User exists.
    $row = $stmt->fetch();
    require_once '../encrypt/class.passhash.php';
    if(PassHash::check_password($row["pass"],$user_password)){
        // Pass correct
        echo "ok";
    }else{
        // Pass incorrect
        echo "err";
    }
}else{
    echo "user not found";
}
