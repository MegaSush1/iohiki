<?php

# Verify if user in connected base on database connection pass in argument
function check_login($con,$redirect = true)
{

    if(isset($_SESSION['uid']))
    {

        $id = $_SESSION['uid'];
        if ($_SESSION['type']=="user"){
            $query = "SELECT uid,name,surname,mail FROM clients WHERE uid = '$id' LIMIT 1";
        }elseif($_SESSION['type']=="art"){
            $query = "SELECT uid,surname,mail FROM artistes WHERE uid = '$id' LIMIT 1";
        }
        $result = $con->query($query);

        if( $result && $result->rowCount() > 0)
        {
            $user_data = $result->fetch();
            return $user_data;
        }

    }
    else{
        if ($redirect){
            header("Location: ../../www/login");
		    die;
		}else{
		    return array('notlogged'=>1);
		}
    }

}

# Generate an uid base on the length pass in argument
function generate_uid($length) {
    $result = '';
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $charactersLength = strlen($characters);
    $counter = 0;
    while ($counter < $length) {
        $result .= $characters[mt_rand(0, $charactersLength - 1)];
        $counter += 1;
    }
    return $result;
}
