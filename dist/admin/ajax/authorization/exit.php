<?php 
    unset($_COOKIE['login']);
    setcookie('login', $userName, time() - 3600, "/" );
    return true;

?>