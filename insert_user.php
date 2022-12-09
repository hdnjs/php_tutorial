<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert User</title>
</head>
<body>
    <!-- 
    [GET] 
    -요청 데이터를 주소의 파라미터로 전달하는 방식. 
    -데이터가 주소창에 보이므로 보안에 취약하므로 사용자 정보 같은 데이터 전달에 적합하지 않음.
    -주로 조회 요청에 사용함.
    -form 태그에 method는 적지 않으면 GET 방식이 됨          

    [POST] 
    -요청 데이터를 바디에 담아서 전달하는 방식. 
    -데이터가 주소창에 보이지 않고, 대량의 데이터를 전달할 때 적합함.
    -주로 데이터 입력 시 사용함.
    -form 태그에 method는 post의 경우 직접 지정해야 함 
    -->

    <!-- 요청 헤더와 바디: https://blueyikim.tistory.com/1999, https://lkg3796.tistory.com/65 -->
    <form action="/php_lecture/php/insert_user_data.php" method="POST">
        이름 : <input type="text" name="name"><br>
        아이디 : <input type="text" name="id"><br>
        이메일 : <input type="email" name="email"><br>
        비밀번호 : <input type="password" name="pwd"><br>
        <!-- input 타입이 submit인 경우 클릭했을 때 해당 버튼을 감싸고 있는 form의 action 주소로 경로를 이동 시킴 -->
        <input type="submit" value="제출">
    </form>

    <!-- 경로 설명 참조: https://www.beusable.net/blog/?p=4507 -->
</body>
</html>

