<?php
    $id= $_POST['id'];
    $pass= $_POST['pass'];
    // 아이디와 비밀번호 입력 여부 확인
    if(!$id){
        // 경고창 보여주고 이전 페이지로 이동
        // history.go(-1); : 이전 페이지로
        echo "
        <script>
            alert('아이디를 입력하세요.');
            history.go(-1);
        </script>
        ";
         exit;
    }
    if(!$pass){
        // 경고창 보여주고 이전 페이지로 이동
        // history.back(); : 이전 페이지로
        echo "
        <script>
            alert('비밀번호를 입력하세요.');
            history.back();
        </script>
        ";
         exit;
    }
    // exit가 안되었다면 아이디와 비번이 전달된 것이므로 DB에서 해당 아이디와 비번을 체크
    include "./dbconn.php";
    // 쿼리문
    $sql= "SELECT * FROM member WHERE id='$id' and pass='$pass'";
    $result= mysqli_query($conn,$sql);
    // 결과표로부터 레코드 수 얻어오기
    $rowNum= mysqli_num_rows($result);

    // $rowNum이 0이면 아이디와 패스워드가 맞지 않는 것
    if(!$rowNum){
        echo "
        <script>
            alert('아이디와 비밀번호를 확인하세요.');
            history.back();
        </script>
        ";
        exit;
    }
    // exit가 안되었다면 로그인이 되었다는 것임!!
    // 다른 페이지에서 로그인 되었다고 인지하기 위해, 회원정보를 세션에 저장
    // 해당하는 id의 회원정보 얻어오기
    $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
    // 세션에 저장
    session_start();
    $_SESSION['userid']=$row['id'];
    $_SESSION['username']=$row['name'];
    $_SESSION['userpoint']=$row['point'];
    // 세션저장이 되었으니 php페이지로 이동
    echo "
        <script>
            location.href='./login_success.php';
        </script>
    ";
?>