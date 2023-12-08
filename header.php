<?php 
    //로그인을 하면 session에 정보를 저장하고 각 페이지들에서 모두 사용하고자 함.
    //로그인에 띠라 화면구성이 다르기에 세션에 저장되어 있는 회원정보 중 id, name, level 값 읽어오기
    session_start(); //세션을 저장하든 읽어오든 사용하고자 하면 이 함수로 시작

    $userid="";
    $username="";
    $userpoint="";

    if( isset($_SESSION['userid'])) $userid= $_SESSION['userid'];
    if( isset($_SESSION['username'])) $username= $_SESSION['username'];
    if( isset($_SESSION['userpoint'])) $userpoint= $_SESSION['userpoint'];
?>

<!-- 헤더 영역의 로고와 로그인 표시 영역 -->
        <div id="top">
            <ul id="top_menu">
                <!-- 로그인 안되었을 때 -->
                <?php if(!$userid){  ?>
                    <li><a href="./login_form.php">로그인</a></li>
                <?php }else{ ?>
                    <li><a href="./logout.php">로그아웃</a></li>
                <?php }?>
            </ul>
        </div>
