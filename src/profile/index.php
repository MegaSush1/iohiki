<?php include ("../src/phpscript/login_check.php");



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Iohiki | Profile</title>

    <?php include($rootRoad."src/phpcomponent/head.php"); ?>
</head>
<body>
    <?php include $rootRoad.'src/phpcomponent/header.php';?>
    <main>
        <section>
            <div>
                <div><?php
                    if ( !isset($_GET['p']) ){
                        echo "<img class=\"profilePicture\" src=\"../src/userData/{$_SESSION['uid']}.pp.png\" />";
                    } else {
                        echo "<img class=\"profilePicture\" src=\"../src/userData/{$_GET['p']}.pp.png\" />";
                    }

                ?></div>
            </div>
        </section>
        <img src="https://media1.thrillophilia.com/filestore/ur4lt5i6yjilg39oe4at5j1syxmx_IMG20of20-%202.webp"/>
        <img src="https://media1.thrillophilia.com/filestore/ur4lt5i6yjilg39oe4at5j1syxmx_IMG20of20-%202.webp"/>
    </main>
    <?php include $rootRoad.'src/phpcomponent/foot.php';?>
</body>

</html>