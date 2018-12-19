<?php


 echo "Hello Admin";

if($_POST['login'] == 'sandy') {
    // user ok
    $_SESSION['authentificated'] = true;
    $_SESSION['username'] = "sandy";

} else {
    // auth false
}


