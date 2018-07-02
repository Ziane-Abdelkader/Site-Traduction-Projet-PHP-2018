<?php

if (empty($_SESSION['statut']) || $_SESSION['statut'] != 'ADMIN' ) {

die('<h1>'._('Vous n\'avez pas les droits pour accéder a cette partie').'</h1>');
}
else {
foreach ($data['tableauLangue'] as $Langue) {
    echo '<h5>' . $Langue['EN'] . '</h5>';
    echo '<h6>' . $Langue['SP'] . '</h6>';
    echo '<h6>' . $Langue['IT'] . '</h6>';
    echo '<h6>' . $Langue['DU'] . '</h6>';
}}