<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Recherche</title>
</head>
<body>
<br><br>


    <form action="../controlleur/motDePasseOublier.php" method="post">
        <fieldset><br>
            <?php if(isset($_GET['step'])and $_GET['step']='ERREUR'){
                echo '<h7>'._('Adresse email inconnue').'</h7> ';
            }?>
            <legend><?php print(_('Mot de passe oublié ?'))?></legend>

            <strong><label for="mail"><?php print(_('Adresse mail : '))?></label></strong>
            <input name="mail" placeholder="Mail@domain.com" type="email" rows="10" cols="50" id="='mail"><br><br>

        </fieldset><br><br>
        <div>
            <input type="submit" name="action" value="Envoyer">
        </div>
    </form>
</body>
</html>