<?php
    include('../src/phpscript/login_check_no_redirect.php');
    if(isset($_SESSION['uid'])){
        header("Location: ../");
    }

    $error = 0;
    $errorServ = 0;

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $email = $_POST["email"];
        $password = $_POST["password"];
        if(!empty($email) && !empty($password)){

            $query = "SELECT * FROM artistes WHERE mail = '$email' LIMIT 1";

            $result = $con->query($query);

            if($result)
            {
                if( $result && $result->rowCount() > 0)
                {
                    $user_data = $result->fetch();

                    if($user_data['password'] == $password)
                    {
                        $_SESSION['uid'] = $user_data['UID'];
                        $_SESSION['type'] = "art";

                        header("Location: ../");
                        die;
                    }
                }
            }

            $error=1;

        }else{
            $errorServ=1;
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>IOHIKI | Artiste Login</title>


        <?php include("../src/phpcomponent/head.php"); ?>
        <link rel="stylesheet" href="../src/css/signup.css"/>
    </head>
    <body>
        <?php
            include("../src/phpcomponent/header.php");
         ?>
        <main>

            <form method="post">
                <?php
                    if($error){
                        echo "<span class=\"errorBlock\">Entrer des information correct.</span>";
                    }elseif($errorServ){
                        echo "<div class=\"errorBlock\">Oups, nous avons rencontrer des problèmes avec notre serveur.</div>";
                    }
                ?>
                <h1>Connexion artiste</h1>
                <div><label for="email">Adresse mail</label>
                <input id="email" type="email" name="email" required placeholder=""></div>
                <div><label for="password">Mot de passe</label>
                <input id="password" type="password" name="password" required placeholder=""></div>

                <input type="submit" value="Connexion">
                <p class="formFooter">Vous n'étes pas encore un artiste, <a href="artiste">S'inscrire</a></p>
                <a class="switchButton" href="./">Se connecter en tant que client</a>
            </form>
        </main>
    <?php include '../src/phpcomponent/foot.php';?>
    </body>
</html>