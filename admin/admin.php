<?php
define("PASS", "cocojump");

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title>IOHIKI | ADMIN DASHBOARD</title>
    <link rel="stylesheet" href="../src/css/font.css"/>
    <link rel="stylesheet" href="style.css"/>
    <?php if (isset($_POST["pw"]) && $_POST["pw"]==PASS){ ?>
    <script src="script.js" defer></script>
    <?php } ?>
</head>
<body>

    <?php
        if (isset($_POST["pw"]) && $_POST["pw"]==PASS){
            $idcom = new PDO('mysql:host=localhost;dbname=iohiki_data', 'iohiki_root','bigpancake');

            $requete = "select * from user";
            $result = $idcom ->query($requete);
        ?>

<div id="dashboard">
    <ul id="tabs">
        <li id="toHome">Home</li>
        <li id="toUserAccount">UserAccount</li>
        <li></li>
    </ul>
    <div id="content">
    <section id="home">
    </section>
    <section id="userAccount">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>UID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Mail</th>
                    <th>Password</th>
                    <th>pp_uid</th>
                    <th>Create Date</th>
                </tr>
            </thead>
            <tbody>
               <?php
                while ($row = $result->fetch())
                {
                    echo "<tr><td>".$row[0].'</td><td class="uid">'.$row[1].'</td><td class="name">'.$row[2].'</td><td class="surname">'.$row[3].'</td><td class="mail">'.$row[4].'</td><td class="password">'.$row[5].'</td><td class="pp_uid">'.$row[6].'</td><td class="create_date">'.$row[7]."</td></tr>";
                }
               ?>
            </tbody>
        </table>
        <div id="accountinfo">
            <span id="uid_focus"></span>
            <div id="pp">
                <img/>
            </div>
            <span><span id="name"></span><span id="surname"></span></span>
            <span id="mail"></span>
            <span id="password"></span>
            <span id="account_creation"></span>

            <div class="accountaction">
                <button>Modify</button>
                <button>Delete</button>
            </div>
        </div>
    </section>
    </div>
</div>

    <?php }
        else{
            echo '
                <div id="log">
                <form method="post" action="admin">
                    <input name="pw" type="password" placeholder="Password"/>
                    <input type="submit" value="Verify Me"/>
                </form>
                </div>';
        }
    ?>

</body>