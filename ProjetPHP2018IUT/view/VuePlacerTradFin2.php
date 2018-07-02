<?php
if (empty($_SESSION['statut']) || !$_SESSION['statut'] == 'TRAD' || !$_SESSION['statut'] == 'ADMIN' ) {

    die('<h1>'._('Vous n\'avez pas les droits pour accéder a cette partie').'</h1>');
}

echo '<h1>La traduction a bien été faite</h1>';

echo '</br>'  . '<a href="../controlleur/placerTrad.php">'._('Revenir a la traduction ?').'</a>' ;


?>