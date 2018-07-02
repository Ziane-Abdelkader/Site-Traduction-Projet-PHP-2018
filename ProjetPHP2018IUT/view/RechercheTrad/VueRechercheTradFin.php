
<?php
if(!$data){
    echo 'traduction inconnue';
    echo '
        <a href="../controlleur/inscriptionBD.php">'._('faire une demande de traduction ?').'</a>
    </body>
    </html>';}
else {
    echo $data;
    echo '</body>
    </html>';
}
