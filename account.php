<?php include_once("src/componments/header.php"); ?>
<?php
    $idcom = new PDO('mysql:host=localhost;dbname=iohiki_data', 'iohiki_root','bigpancake');

    $query = "select name,surname,pp_uid from user where uid = '"."LIZGIYzbav"."' LIMIT 1;";
    $result = $idcom ->query($query);
    $row = $result->fetch();
?>
<div id="innercontent" class="accountPage">
    <header>
        <div class="wrapper">
            <div id="pp">
                <?php
                    echo '<img src="src/data/profile/'.$row["pp_uid"].'.webp" alt="profile picture"/>';
                ?>
            </div>
            <span id="username">
                <?php
                    echo $row["name"].' '.$row["surname"];
                ?>
            </span>
        </div>
    </header>
</div>
<?php include_once("src/componments/footer.php"); ?>