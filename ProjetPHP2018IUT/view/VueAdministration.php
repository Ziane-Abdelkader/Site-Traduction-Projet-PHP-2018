<?php
tradInit('trad','../locale');
    if (empty($_SESSION['statut']) || $_SESSION['statut'] != 'ADMIN' ) {

        die('<h1>'._('Vous n\'avez pas les droits pour accéder a cette partie').'</h1>');
    }
    else {
        foreach ($data['tableau'] as $Utilisateur) {
            echo '<h5>' . $Utilisateur['ID'] . '</h5>';
            echo '<h6>' . $Utilisateur['STATUT'] . '</h6>';
            ?>
            <form method="POST" action="updateRang.php" name="formulaire"><h6> <?= _('Changer en') ?></h6>
                <input type="hidden" name="id" value= <?php echo $Utilisateur['ID']; ?>>
                <select name="rang">
                    <option value="STAND"><?= _('Standard') ?></option>
                    <option value="PREM"><?= _('Premium') ?></option>
                    <option value="TRAD"><?= _('Traducteur') ?></option>
                    <option value="ADMIN"><?= _('Administrateur') ?></option>
                </select>
                <button type="submit" name="action" value="valider">Ok</button>
                <br>
            </form>
        <?php }
    }
