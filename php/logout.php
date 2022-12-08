<?php

    session_start();
    // $_SESSION['userid'] = 'swiss';
    unset($_SESSION['userid']);


?>

<p>넘어온 세션: <?=$userid?></p>

