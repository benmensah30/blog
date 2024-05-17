<header class="menu-bar">
    <table>
        <tr>
            <td>Blog</td>
            <td>
                <ul>
                    <li>
                        <a href="/blog/index.php" class="<?=(!isset($_GET["page"]) ? "menu-active" : ""); ?>">Home</a>
                    </li>
                    <li>
                        <a href="/blog/assets/css/pages/article.php?page=article"  class="<?=(isset($_GET["page"]) &&
                       $_GET["page"] == "article" ? "menu-active" : ""); ?>">Articles</a>
                    </li>
                    <li>
                        <a href="/blog/assets/css/pages/inscription.php?page=inscription"  class="<?=(isset($_GET["page"]) &&
                       $_GET["page"] == "inscription" ? "menu-active" : ""); ?>">Insciption</a>
                    </li>
                    <li>
                        <a href="/blog/assets/css/pages/connexion.php?page=connexion"  class="<?=(isset($_GET["page"]) &&
                       $_GET["page"] == "connexion" ? "menu-active" : ""); ?>">connexion</a>
                    </li>
                </ul>
            </td>
            <?php
            if (isset($_COOKIE['username'])) {
                ?>
                <td>
                    <?= $_COOKIE['username']; ?> <a href="/blog/processing/logout.php">Se deconnecter</a>
                </td>
                <?php
            }
            ?>
        </tr>
    </table>
</header>