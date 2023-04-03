<?php
require_once dirname(__FILE__).'/../../config.php';

//funkcja do pobierania paramentrów logowania
function getLoginData(&$form){
    $form['login'] = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
    $form['pass'] = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : null;
}

//walidacje + widok
function validateLogin(&$form,&$errors){
    if( ! (isset($form['login']) && isset($form['pass']))){ 
        return false;
    }

    if($form['login'] == '') {$errors[] = 'Nie podano loginu';}
    if($form['pass'] == '') {$errors[] = 'Nie podano hasła';}

    //gdy brak parametrów czyli error to koniec walidacji 
    if(! empty($errors) > 0) return false;

    //sprawdzenie logowania (powinno być w bazie a nie w kodzie)
    if($form['login'] == "admin" && $form['pass'] == "admin") {
        session_start();
        $_SESSION['role'] = 'admin';
        return true;
    }
    if($form['login'] == "user" && $form['pass'] == "user") {
        session_start();
        $_SESSION['role'] = 'user';
        return true;
    }

    $errors [] = 'Niepoprawny login lub hasło';
    return false;    
}

//inicjacja zmiennych
$test = array();
$errors = array();

getLoginData($test);

if(! validateLogin($test,$errors)){
    include _ROOT_PATH.'/files/security/login_view.php';
}
else{
    header("Location: "._APP_URL);
}
?>