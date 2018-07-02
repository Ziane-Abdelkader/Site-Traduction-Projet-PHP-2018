
<?php
if (empty($_SESSION['statut'])) {
    if(!isset($_SESSION['temps'])){
        $_SESSION['temps']=time();
    }
    else {

        $_SESSION['temps']=time();
    }
}

if(!$data){
    echo 'traduction inconnue';
    echo '
        <a href="../controlleur/demandeTrad.php">'._('faire une demande de traduction ?').'</a>
    </body>
    </html>';}
else {
    echo $data;
    echo '</body>
    </html>';
}
