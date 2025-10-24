<?php
session_start();

$_SESSION = array();
$user_data = array();
session_destroy();
header("Location: ./login");