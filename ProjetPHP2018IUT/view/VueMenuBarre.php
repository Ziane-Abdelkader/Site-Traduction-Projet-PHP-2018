<?php
    session_start();
    $page = $_SERVER['PHP_SELF'];
    ini_set("error_reporting",-1);
    ini_set("display_errors","on");

   ?>
<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../CSS/style.css" title="normal"/>
        <link rel="icon" type="image/x-icon" href="../image/traduction.png" />
        <title><?= $data['titrePage'] ?></title>
    </head>
    <body>
        <ul>
            <li<?php if(strpos($page,'index.php')) echo ' class="active"'; ?>>
                <a href="http://projetphp2018.alwaysdata.net/index.php">Accueil</a>
            </li>
            <li class="deroulant">
                <a href="#">Langue</a>
                <div class="deroulant-selectionner">
                    <a class="fondOption" href="http://projetphp2018.alwaysdata.net/?$lang=fr">Français<img alt="" class="petit" src="../image/francais.png"></a>
                    <a class="fondOption" href="http://projetphp2018.alwaysdata.net/?$lang=en">Anglais<img class="petit" src="../image/anglais.png"/></a>
                    <a class="fondOption" href="#">Espagnol<img class="petit" src="../image/espagnol.png"/></a>
                    <a class="fondOption" href="#">Italien<img class="petit" src="../image/italien.png"/></a>
                    <a class="fondOption" href="#">Allemand<img class="petit" src="../image/allemand.png"/></a>
                </div>
            </li>
            <li<?php if(strpos($page,'traduction.php')) echo ' class="active"'; ?>>
                <a href="http://projetphp2018.alwaysdata.net/controlleur/traduction.php">Traduction</a>
            </li >
            <?php if (empty($_SESSION['login'])){
                echo '<li style="float:right"';if(strpos($page,'VueConnexion.php')) echo ' class="active"'; print ('><a href="http://projetphp2018.alwaysdata.net/controlleur/connexion.php">'. _('Connexion').'</a></li >');
                echo '<li style="float:right"';if(strpos($page,'VueInscription.php')) echo ' class="active"'; print ('><a href="http://projetphp2018.alwaysdata.net/controlleur/inscriptionBD.php">'._('Inscription').'</a></li >');
            }
            elseif(($_SESSION['login'] == 'ok') && ($_SESSION['statut'] == 'ADMIN')){
                echo '<li ';if(strpos($page,'VueAdministration.php')) echo ' class="active"'; print ('><a href="http://projetphp2018.alwaysdata.net/controlleur/administration.php">'._('Admin').'</a></li >');
                echo '<li style="float:right"';if(strpos($page,'deconnexion.php')) echo ' class="active"'; print ('><a href="http://projetphp2018.alwaysdata.net/controlleur/deconnexion.php">'._('Déconnexion').'</a></li >');
                echo '<li style="float:right"';if(strpos($page,'VueMonCompte.php')) echo ' class="active"'; print ('><a href="http://projetphp2018.alwaysdata.net/controlleur/monCompte.php">'._('Mon compte').'</a></li >');

            }
            else{

                echo '<li style="float:right"';if(strpos($page,'deconnexion.php')) echo ' class="active"'; print ('><a href="http://projetphp2018.alwaysdata.net/controlleur/deconnexion.php">'._('Déconnexion').'</a></li >');
                echo '<li style="float:right"';if(strpos($page,'VueMonCompte.php')) echo ' class="active"'; print ('><a href="http://projetphp2018.alwaysdata.net/controlleur/monCompte.php">'._('Mon compte').'</a></li >');

            }
            ?>
        </ul>
        <br>

