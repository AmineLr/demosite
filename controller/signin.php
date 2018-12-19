<?php


echo '<pre>'; print_r($_POST);

if($_POST['login'] == 'sandy') {
    // user ok
    $_SESSION['authentificated'] = true;
    $_SESSION['username'] = "sandy";

} else {
    // auth false
}


header('Location:index.php?r=homepage');