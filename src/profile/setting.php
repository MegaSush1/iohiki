<?php include ($rootRoad."src/phpscript/login_check.php");
    $dataFolder = "userData";

    if ($_SESSION['type'] == 'art'){
        $dataFolder = "artisteData";
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        if (isset($_FILES)){
            if (isset($_FILES["profilePicture"])){
                $imageEx = strtolower(pathinfo($_FILES["profilePicture"]["name"],PATHINFO_EXTENSION));
            }
            elseif(isset( $_FILES["bannerPicture"]) ){
                $imageEx = strtolower(pathinfo($_FILES["bannerPicture"]["name"],PATHINFO_EXTENSION));
            }
        }

        if( isset($_POST['profilePictureSubmit']) && $imageEx == "png" ){
            imagepng(imagecreatefromstring(file_get_contents($_FILES["profilePicture"]["tmp_name"])), $rootRoad."src/{$dataFolder}/{$_SESSION['uid']}.pp.png");
        }elseif(isset($_POST['profilePictureSubmit'])){
            move_uploaded_file($_FILES["profilePicture"]["tmp_name"], $rootRoad."src/{$dataFolder}/{$_SESSION['uid']}.pp.png");
        }

        if($_SESSION['type'] == 'art'){
            if( isset($_POST['bannerPictureSubmit']) && $imageEx == "png" ){
                imagepng(imagecreatefromstring(file_get_contents($_FILES["bannerPicture"]["tmp_name"])), $rootRoad."src/{$dataFolder}/{$_SESSION['uid']}.banner.png");
            }elseif(isset($_POST['bannerPictureSubmit'])){
                move_uploaded_file($_FILES["bannerPicture"]["tmp_name"], $rootRoad."src/{$dataFolder}/{$_SESSION['uid']}.banner.png");
            }
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Iohiki | Setting</title>

    <?php include($rootRoad."src/phpcomponent/head.php"); ?>
</head>
<body>
    <?php include $rootRoad.'src/phpcomponent/header.php';?>
    <link rel="stylesheet" href="../src/css/setting.css"/>
    <main>
        <?php
        if($_SESSION['type']=='user'){
        ?>
        <section class="hero">
            <div>
                <?php echo "<img class=\"profilePicture\" src=\"../src/userData/{$_SESSION['uid']}.pp.png\" />"; ?>
            </div>
        </section>
        <section class="setting">

            <div>
                <form method="post" enctype="multipart/form-data" action="/profile/setting">
                    <label for="pp">Profile Picture</label>
                    <input id="pp" type="file" name="profilePicture" accept="image/png, image/jpeg, image/gif, image/webp"/>
                    <input type="submit" value="Save" name="profilePictureSubmit">
                </form>
            </div>
        </section>


        <?php }

        elseif($_SESSION['type']=='art'){
            ?>
        <section class="hero">
            <?php echo "<img class=\"banner\" src=\"../src/".$dataFolder."/{$_SESSION['uid']}.banner.png\" />"; ?>
            <div>
                <?php echo "<img class=\"profilePicture\" src=\"../src/userData/{$_SESSION['uid']}.pp.png\" />"; ?>
            </div>
        </section>
        <section class="setting">

            <div>
                <form method="post" enctype="multipart/form-data" action="/profile/setting">
                    <label for="pp">Profile Picture</label>
                    <input id="pp" type="file" name="profilePicture" accept="image/png, image/jpeg, image/gif, image/webp"/>
                    <input type="submit" value="Save" name="profilePictureSubmit">
                </form>
            </div>
            <div>
                <form method="post" enctype="multipart/form-data" action="/profile/setting">
                    <label for="bp">Profile Banner</label>
                    <input id="bp" type="file" name="bannerPicture" accept="image/png, image/jpeg, image/gif, image/webp"/>
                    <input type="submit" value="Save" name="bannerPictureSubmit">
                </form>
            </div>
        </section>

        <?php } ?>
    </main>
    <?php include '../src/phpcomponent/foot.php';?>
</body>

</html>