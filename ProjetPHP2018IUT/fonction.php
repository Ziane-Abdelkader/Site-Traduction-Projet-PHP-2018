<?php
function getView($nom,$data=null){
    include $nom;
}
function tradInit($domain ,$directory){
    $lang = 'fr_FR';
    bindtextdomain($domain,$directory);
    textdomain($domain);
    if(isset($_GET['lang'])){
        switch(strtolower($_GET['lang'])){
            case 'en':
                $lang = "en_GB";
                break;
            case 'de':
                $lang = "de_DE";
                break;
            case 'it':
                $lang = "it_IT";
                break;
            case 'es':
                $lang = "es_ES";
                break;
        }
    };
    putenv("LANG={$lang}");
    putenv("LANGUAGE={$lang}");
    setlocale(LC_ALL,$lang);
}