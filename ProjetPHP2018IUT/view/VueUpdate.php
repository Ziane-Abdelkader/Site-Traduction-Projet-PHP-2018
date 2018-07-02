<?php
session_status();
$_SESSION['id']=$id;

    echo'<h5>'._('Le statut de l\'utilisateur ') . $id . _(' a bien été changer !').' </h5>';

