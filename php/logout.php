<?php

    session_start();
    // $_SESSION['userid'] = 'swiss';
    unset($_SESSION['user']);

    echo    "
        <script>
            location.href='/php_lecture/index.php'
        </script>
    "

?>


