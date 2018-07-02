<?php
/**
 * Created by PhpStorm.
 * User: Chauvy Yvan
 */
    session_start();
    session_destroy();
    header('location: ../controlleur/FinCo.php');
    exit;
?>