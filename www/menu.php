<nav>
    <label for="menu-mobile" class="menu-mobile">Menu</label>
    <input type="checkbox" id="menu-mobile" role="button">
    <ul>

        <li class="menu-Accueil"><a href="../index.php">Accueil</a>

        </li>
        <li class="menu-Produit"><a href="#">Produit</a>
            <ul class="submenu">
                <li><a href="../Menus/menu.php">Menus</a></li>
                <li><a href="../nouveau/nouveaute.php">Nouveautés</a></li>
            </ul>
        </li>
        <li class="menu-Notre-Aventure"><a href="#">Notre Aventure</a>
            <ul class="submenu">
                <li><a href="../food-truck/foodTruck.php">Le food-truck</a></li>
                <li><a href="../nous/nous.php">Nous</a></li>
            </ul>
        </li>
        <?php if ($_SESSION['UserPdo']) {
            ?>
            <li class="menu-Espace-Client"><a href="#">Espace Membre</a>
                <ul class="submenu">
                    <li><a href="../espaceMembre/Espace_membre.php">Promotion</a></li>
                </ul>
            </li>
            <li class="menu-Espace-Client"><a href="Connection/logout.php">Deconnexion</a></li>
            <?php
        } else {
            ?>
            <li class="menu-Espace-Client"><a href="../Connection/Formulaire_de_connection.php">Connexion</a>
            <?php
        }
        ?>
    </ul>
</nav>
