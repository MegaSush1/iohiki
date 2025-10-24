<?php

$dbhost = "localhost";
$dbuser = "iohiki_root";
$dbpass = "bigpancake";
$dbname = "iohiki_data";

if(!$con = new PDO("mysql:dbname=$dbname;host=$dbhost", $dbuser, $dbpass))
{
    die("failed to connect");
}
