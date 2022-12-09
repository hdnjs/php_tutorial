<?php

    //  세션을 만들기 위해서는 먼저 session_start()를 작성함
    //  session_start()는 위쪽에 어떠한 php 코드도 있어서는 안됨. 즉, php 문서의 가장 위에 작성할 것
    session_start();
    $_SESSION['user'] = 'hoho';

    

    echo    "
        <script>
            location.href='/php_lecture/index.php'
        </script>
    "
?>