<?php

    $divide = "--------------<br><br>";

    function sayHello() {
        echo "Hello PHP!!";
    }

    sayHello();

    echo $divide;

    function sum($a, $b)  { //  함수 파라미터는 php 변수화된 문자를 사용
        return $a + $b.'<br>';
    }

    echo sum(5, 8);

    echo $divide;

    function loopsum($n)    {
        $num = 1;   //  반복조건 초기화
        $sum = 0;
        while($num <= $n)   {
            $sum += $num;
            $num++;
        }
        //  100까지만 더해주는 과정

        return $sum;
        //  100까지 더한 값을 내보내주는 과정
    }


    echo loopsum(100);

?>