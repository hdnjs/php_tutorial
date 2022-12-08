<?php

    $arr = [1, 2, 3, 4, 5, 'string'];
    echo $arr."<br>";
    echo "string<br>";
    echo var_dump($arr);    //  배열 내부 로직을 리턴함
    echo count($arr);   //  javascript의 length와 같은 역할을 함
    echo $arr[3];

    //  배열에 여러개의 값을 한꺼번에 삽입하는 함수: array_push(배열이름, [값, ...])
    $country = array();
    array_push($country, 'korea', 'japan', 'china');
    echo var_dump($country);    //  향후 json 문자열을 리턴할 때 자주 사용할 것

    $fruit_json = json_encode(array('f1' => 'apple', 'f2' => 'banana'));
    $fruit = array('f1' => 'apple', 'f2' => 'banana');
    echo var_dump($fruit)."<br>";  //  배열의 인덱스 이름을 지정할 수 있음
    echo var_dump($fruit_json);  
?>