<?php
session_start();
    include 'fonction.php';
    tradInit('trad','locale');
    $data=[
        'titrePage'=> _('Accueil')
    ];
    getView('view/VueMenuBarre.php',$data);

?>
        <?php
            if (empty($_SESSION['login'])) {

                print('<h1>' .
                    _('Bienvenue') .
                    '</h1>' . '<h2>' . _('Vous êtes sur un site de forum/traduction. Pour plus de fonctionnalités 
                            veuillez vous connecter ou vous inscrire') . '</h2>' .
                    '<h3>' . _('Ce site vous permet (dès à présent !) de faire une recherche de traduction via l\'onglet Traduction. Cependant vous serez limité à une recherche toute les 10 minutes.')

                     . _('Connectez vous pour profiter d\'un nombre de recherche supérieur à 9000 ! Les administrateurs peuvent élever vos privilèges, 
                     vous pourriez devenir un membre premium et gagner un suivi à vos demandes de traduction, 
                     un traducteur et à votre venir en aide aux autres, ou ; même, un administrateur à votre tour pour rajouter de nouvelles langues et gérer les membres du site !') .  '</h3>');

            }
            else print(
                '<h1>'  ._('Bienvenue   ') . $_SESSION['id'] . '</h1>' .
                '<h2>'  . _('Merci de votre confiance et amusez vous bien !') . '</h2>' .
                '<h3>'  . _('Votre Statut sur notre site est actuellement :')
                        . $_SESSION['statut'] .
                '</h3>'

                );
        ?>
    </body>
</html>