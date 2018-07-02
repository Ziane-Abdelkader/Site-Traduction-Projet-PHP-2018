<?php
/**
 * Created by PhpStorm.
 * User: p16002371
 * Date: 24/01/18
 * Time: 10:20
 */
tradInit('trad','../locale');
if (empty($_SESSION['statut']) || $_SESSION['statut'] != 'ADMIN' ) {

    die('<h1>'._('Vous n\'avez pas les droits pour accéder à cette partie').'</h1>');
}
?>

<!DOCTYPE html>
<html lang="fr"
    <head>
        <title> <?php print (_('Ajouter langue de traduction'))?></title>
    </head>
    <body>
        <br><label><?php print (_('Veuillez renseigner les deux premières lettres de la langue que vous souhaitez ajouter (EX : ES pour espagnol)'))?></label>
        <form method="POST" action="ajouterLangue.php" name="formulaire">
            <input name="langue"></input>
            <button type="submit" name="action" value="Ajouter"><?php print (_('Ajouter'))?> </button>
        </form>
    </body>

</html>