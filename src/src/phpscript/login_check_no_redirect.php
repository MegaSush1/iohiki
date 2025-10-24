<?php
$rootRoad = "";
if (isset($sub)){
    for ($i=0;$i<$sub;$i++){
        $rootRoad.="../";
    }
}

session_start();
include_once 'src/phpscript/functions.php';
include_once("src/phpscript/connection.php");
$user_data = check_login($con,false);