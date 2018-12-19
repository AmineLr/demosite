<?php
session_start();

// on récupère la demande de route (ou on la met par défaut)
(isset($_GET['r'])) ? $request = $_GET['r'] : $request = 'homepage';

if($request == 'homepage') {
    include('controller/homepage.php');
}

if($request == 'login') {
    include('controller/login.php');
}

// vérif si la route existe
if($request == 'service') {
    // si user authentifié alors j'affiche la vue
    if(isset($_SESSION['authentificated'])) {
        include('controller/service.php');
    } else {
        echo 'interdit';
        //include('controller/noAutorisation.php');
    }
}

if($request == 'signin') {
        include('controller/signin.php');
}

if($request == 'logout') {
    session_unset();
}



