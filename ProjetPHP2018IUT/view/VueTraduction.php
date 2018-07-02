<?php
    if ( empty($_SESSION['login'])){
        header("Location: ../controlleur/rechercheTraduction.php");
    }
    else{
        echo '<h1>'._('Que voulez-vous faire').'</h1>';
        if($_SESSION['statut'] == 'TRAD'){
            echo '<h2><a href="http://projetphp2018.alwaysdata.net/controlleur/rechercheTraduction.php">'._('Recherche de traduction').'</a></h2>';
            echo '<h2><a href="http://projetphp2018.alwaysdata.net/controlleur/demandeTrad.php">'._('Demande de traduction').'</a></h2>';
            echo '<h2><a href="http://projetphp2018.alwaysdata.net/controlleur/placerTrad.php">'._('Placer traduction').'</a></h2>';
            echo '<h2><a href="http://projetphp2018.alwaysdata.net/controlleur/gererDemandeTrad.php">'._('Visualisation de mes demandes de traductions').'</h2>';
            echo '<h2>'._('Gérer les traductions').'</h2>';


        }
        elseif($_SESSION['statut'] == 'PREM'){
            echo '<h2><a href="http://projetphp2018.alwaysdata.net/controlleur/rechercheTraduction.php">'._('recherche de traduction').'</a></h2>';
            echo '<h2><a href="http://projetphp2018.alwaysdata.net/controlleur/demandeTrad.php">'._('demande de traduction').'</a></h2>';
            echo '<h2><a href="http://projetphp2018.alwaysdata.net/controlleur/gererDemandeTrad.php">'._('Visualisation de mes demandes de traductions').'</h2>';

        }
        elseif($_SESSION['statut'] == 'STAND'){
            echo '<h2><a href="http://projetphp2018.alwaysdata.net/controlleur/rechercheTraduction.php">'._('recherche de traduction').'</a></h2>';
        }
        else{
            echo '<h2><a href="http://projetphp2018.alwaysdata.net/controlleur/rechercheTraduction.php">'._('Recherche de traduction').'</a></h2>';
            echo '<h2><a href="http://projetphp2018.alwaysdata.net/controlleur/demandeTrad.php">'._('Demande de traduction').'</a></h2>';
            echo '<h2><a href="http://projetphp2018.alwaysdata.net/controlleur/placerTrad.php">'._('Placer traduction').'</a></h2>';
            echo '<h2><a href="http://projetphp2018.alwaysdata.net/controlleur/gererDemandeTrad.php">'._('Visualisation de mes demandes de traductions').'</h2>';
            echo '<h2>'._('Gérer les traductions').'</h2>';
            echo '<h2><a href="http://projetphp2018.alwaysdata.net/controlleur/ajouterLangue.php">'._('Ajouter Langue').'</a></h2>';


        }
    }
?>
</body>
</html>