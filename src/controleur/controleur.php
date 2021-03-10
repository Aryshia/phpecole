<?php

function accueilControleur($twig){
    echo $twig->render('accueil.html.twig',array());
}

function contactControleur($twig){
    echo $twig->render('contact.html.twig',array());
}

function mentionControleur($twig){
    echo $twig->render('mention.html.twig',array());
}

function aproposControleur($twig){
    echo $twig->render('apropos.html.twig',array());
}

function catalogueControleur($twig){
    echo $twig->render('catalogue.html.twig',array());
}

function connexionControleur($twig){
    echo $twig->render('connexion.html.twig',array());
}

function inscriptionControleur($twig){
    $form = array();
    if (isset($_POST['btInscrire'])){
        $inputEmail = $_POST['inputEmail'];
        $inputPassword = $_POST['inputPassword'];
        $inputPassword2 = $_POST['inputPassword2'];
        $role = $_POST['role']; 
        $form['valide'] = true;
        if ($inputPassword!=$inputPassword2){
            $form['valide'] = false;
            $form['message'] = 'Les mots de passe sont différents';
        }

        $form['email'] = $inputEmail;
        $form['role'] = $role;
        
    }
    echo $twig->render('inscription.html.twig',array('form'=>$form));
}

function fourchetteprimeControleur($twig){
    echo $twig->render('4chetteprime.html.twig',array());
}

?>