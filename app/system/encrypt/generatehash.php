<?php

require_once '../database/connect.php';
require_once '../encrypt/class.passhash.php';
$pass = $_GET["pass"];
echo PassHash::hash($pass);