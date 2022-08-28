<?php


// include ("includes/validator.php");
$DBhost = "localhost";
$DBuser = "digitals_vpnuser";
$DBpass = "04041993Abcde*";
$DBname = "digitals_vpn";

$DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);

if ($DBcon->connect_errno) {
    die("ERROR : -> ".$DBcon->connect_error);
}
?>
