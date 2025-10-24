<?php
$isLogin = isset($_SESSION['uid']);
?>

<header>
    <?php
    echo '<a class="logo" href="'.$rootRoad.'index">
        <h1>Iohiki7</h1>
    </a>';
    ?>
    <div class="toggleMenu">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="right-header">

        <form id="searchbar" action="/search">
            <svg class="i-logo" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                <path d="m11.5 21c5.2467 0 9.5-4.2533 9.5-9.5 0-5.24671-4.2533-9.5-9.5-9.5-5.24671 0-9.5 4.25329-9.5 9.5 0 5.2467 4.25329 9.5 9.5 9.5z"/>
                <path d="m21.3005 22.0001c-.18 0-.36-.07-.49-.2l-1.86-1.86c-.27-.27-.27-.71 0-.99.27-.27.71-.27.99 0l1.86 1.86c.27.27.27.71 0 .99-.14.13-.32.2-.5.2z"/>
            </svg>
            <input class="search-input" type="search" placeholder="Recherche" name="q" required>
        </form>
        <div id="menu">
            <div class="navigation_menu" tabindex="0">
                <div class="menu_label">Menu</div>
                <nav>
                    <ul>
                        <?php
                        echo '<li><a href="'.$rootRoad.'index">Accueil</a></li>
                        <li><a href="'.$rootRoad.'search">Recherche</a></li>
                        <li><a href="'.$rootRoad.'discover">Découverte</a></li>
                        <li><a href="'.$rootRoad.'events">Événement</a></li>';

                            if ( isset($_SESSION['uid']) ){
                                if ( $_SESSION['type'] == "user"){
                                    echo '<li><a href="'.$rootRoad.'profile">Profile ('.$user_data['name']." ".$user_data['surname'].')</a></li>';
                                }elseif( $_SESSION['type'] == "art" ){
                                    echo '<li><a href="'.$rootRoad.'profile">Profile ('.$user_data['surname'].')</a></li>';
                                }
                            }
                        ?></a></li>
                    </ul>
                </nav>
            </div>
            <div class="option_menu" tabindex="0">
                <div class="menu_label">
                    <svg viewBox="0 -960 960 960">
                        <path d="M240-400q-33 0-56.5-23.5T160-480q0-33 23.5-56.5T240-560q33 0 56.5 23.5T320-480q0 33-23.5 56.5T240-400Zm240 0q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm240 0q-33 0-56.5-23.5T640-480q0-33 23.5-56.5T720-560q33 0 56.5 23.5T800-480q0 33-23.5 56.5T720-400Z"></path>
                    </svg>
                </div>
                <nav>
                    <ul>
                        <li><a href="profile/setting">Préférences</a></li>
                        <?php if (isset($_SESSION['uid'])){ echo '<li><a href="'.$rootRoad.'logout">Déconnexion</a></li>';} ?>
                        <li><a href="terms">Conditions d'utilisation</a></li>
                    </ul>
                </nav>
            </div>

            <?php
                if (!isset($user_data['uid']) && !$isLogin ){
                    echo '<div class="navigation_menu connectBtn"">
                        <div class="menu_label"><a href="'.$rootRoad.'login">Connexion</a> / <a href="'.$rootRoad.'signup">S\'inscrire</a></div></div>';
                }

            ?>
        </div>
    </div>
</header>