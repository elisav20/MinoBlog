<?php 
    setcookie('login', $userName, time() - 3600, "/" );
    echo true;
?>