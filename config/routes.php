<?php
    
function getPage(){

    $lesPages['accueil'] = "accueilControleur";
    $lesPages['contact'] = "contactControleur";
    $lesPages['mention'] = "mentionControleur";
    $lesPages['apropos'] = "aproposControleur";
    $lesPages['catalogue'] = "catalogueControleur";
    $lesPages['connexion'] = "connexionControleur";
    $lesPages['inscription'] = "inscriptionControleur";
    $lesPages['4chetteprime'] = "fourchetteprimeControleur";
    
    if (isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else{
        $page = 'accueil';
    }

    if (isset($lesPages[$page])){
        $contenu = $lesPages[$page];
    }
    else{
        $contenu = $lesPages['accueil'];
    }

    return $contenu;
}
?>