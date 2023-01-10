<?php
$showForm = true;
$errors = [];
$reseau = ['Facebook', 'Youtube', 'Twitter', 'Autre'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['lastname'])) {
        if (empty($_POST['lastname'])) {
            $errors['lastname'] = 'c\'est vide';
        }
        else if(!preg_match('/^[a-zA-ZÀ-ÿ-]+$/', $_POST['lastname'])) {
            $errors['lastname'] = 'Veuillez respecter le format';
        }
    }



    if (isset($_POST['firstname'])) {
        if (empty($_POST['firstname'])) {
            $errors['firstname'] = 'c\'est vide';
        }
        else if (!preg_match('/^[a-zA-ZÀ-ÿ-]+$/', $_POST['firstname'])) {
            $errors['firstname'] = 'Veuillez respecter le format';
        }
    }



    if (isset($_POST['pseudo'])) {
        if(strtolower($_POST['pseudo']) == 'admin'){
            $errors['pseudo'] = 'ce pseudo existe déjà';
        }
        else if (empty($_POST['pseudo'])) {
            $errors['pseudo'] = 'c\'est vide';
        }
        else if (!preg_match('/^[a-zA-ZÀ-ÿ-]+$/', $_POST['pseudo'])) {
            $errors['pseudo'] = 'Veuillez respecter le format';
        }
    }


    if (isset($_POST['mail'])) {

        if (empty($_POST['mail'])) {
            $errors['mail'] = 'c\'est vide';
        }
        else if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/', $_POST['mail'])) {
            $errors['mail'] = 'Veuillez respecter le format';
        }
    }



    if (isset($_POST['date'])) {
        if (empty($_POST['date'])) {
            $errors['date'] = 'c\'est vide';
        }
        else if (!preg_match('/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/', $_POST['date'])) {
            $errors['date'] = 'Veuillez respecter le format';
        }
    }


    
    if (isset($_POST['reseau'])) {
        if (empty($_POST['reseau'])) {
            $errors['reseau'] = 'Veuillez choisir une option';
        }
        if(!array_key_exists(($_POST['reseau']) , $reseau)){
            $errors['reseau'] = 'Veuillez selectionner un valeur existante';
        }
    }

    if (isset($_POST['password'])) {
        if (empty($_POST['password'])) {
            $errors['password'] = 'c\'est vide';
        }
        else if (!preg_match('/^.{8,}$/', $_POST['password'])) {
            $errors['password'] = '8 caractères minimum';
        }
    }



    if (isset($_POST['confirmPass'])) {
        if (empty($_POST['confirmPass'])) {
            $errors['confirmPass'] = 'c\'est vide';
        }
        else if (!preg_match('/^.{8,}$/', $_POST['confirmPass'])) {
            $errors['password'] = 'Veuillez respecter le format';
        }
    }

    if (isset($_POST['object'])) {
        if (empty($_POST['object'])) {
            $errors['object'] = 'Veuillez choisir une option';
        }
    }

    
    if (!isset($_POST['CGU'])) {
        if (empty($_POST['CGU'])) {
            $errors['CGU'] = 'Veuillez accepter les CGU';
        }
    }

    if (empty($errors)) {
        $showForm = false;
    }
}


