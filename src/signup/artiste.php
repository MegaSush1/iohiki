<?php
    include("src/phpscript/login_check_no_redirect.php");

    if(isset($_SESSION['uid'])){
        header("Location: /");
    }

    $emailAlreadyUse = false;
    $informationNotValid = false;
    if ($_SERVER['REQUEST_METHOD'] == "POST"){

        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(!empty($email) && !empty($username) && !empty($password)){


            $query = "SELECT mail FROM artistes WHERE mail = '$email'";
            $result = $con->query($query);
            echo $result->rowCount();
            if($result->rowCount()==0){
                do{
                    $uid = generate_uid(23);

                    $query = "SELECT uid FROM artistes WHERE uid = '$uid'";
                    $result = $con->query($query);

                } while ($result->rowCount() != 0);

                $query = "INSERT INTO artistes (UID,surname,mail,password,create_date) VALUES ('$uid','$username','$email','$password',CURRENT_DATE())";

                $con->exec($query);

                header("Location: /login/artiste");
                die;
            }else{
                $emailAlreadyUse = true;
            }

        }else{
            $informationNotValid = true;
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>IOHIKI | Artiste Sign Up</title>

    <?php include("src/phpcomponent/head.php"); ?>
    <link rel="stylesheet" href="/src/css/signup.css"/>
</head>
<body>
    <?php include("src/phpcomponent/header.php"); ?>
    <main>

        <form method="post">
            <?php
                if ($informationNotValid){
                    echo '<p class="errorBlock">Enter some valid information</p>';
                }
                elseif ($emailAlreadyUse){
                    echo '<p class="errorBlock">This email is already in use</p>';
                }
            ?>
            <h1>Inscription artiste</h1>
            <div><label for="email">Adresse mail</label>
            <input id="email" type="email" name="email" required  placeholder=""></div>

            <div><label for="username">Nom</label>
            <input id="username" type="text" name="username" required min="2" max="50" placeholder=""></div>

            <div><label for="password">Mot de passe</label>
            <input id="password" type="password" name="password" required min="8"  placeholder=""></div>

            <input type="submit" value="S'inscrire">
            <p class="formFooter">Vous étes déjà un artiste, <a href="/login/artiste">se connecter</a></p>
            <a class="switchButton" href="/signup">S'inscrire en tant que client</a>
        </form>
    </main>
    <?php include 'src/phpcomponent/foot.php';?>
</body>
</html>