<?php include_once("src/componments/header.php"); ?>
<div id="innercontent" class="settingsPage">
    <main>
        <h1>Setting</h1>
        <section>
            <div class="fieldinput">
                <label id="pp">Profile Picture</label>
                <input type="file" for="pp" value=""/>
            </div>
            <div class="fieldinput">
                <label id="surname">Surname</label>
                <input type="text" for="surname" value="mega"/>
            </div>
            <div class="fieldinput">
                <label id="name">Name</label>
                <input type="text" for="name" value="sushi"/>
            </div>
            <div class="fieldinput">
                <label id="mail">Email</label>
                <input type="email" for="mail" value="megasushi@gmail.com"/>
            </div>
            <section>
                <div class="fieldinput">
                    <label id="password">Password</label>
                    <input type="password" for="password"/>
                </div>
            </section>
            <div class="io-button">Save change</div>
            <a class="io-button" href="">Save change</a>
        </section>
    </main>
</div>
<?php include_once("src/componments/footer.php"); ?>