<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>로그인</title>
    <!-- 공통사용 스타일 적용 -->
    <link rel="stylesheet" href="../css/common.css">
    <!-- login_form 전용 스타일 -->
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <header>
    <?php include "./header2.php"; ?>
    </header>
    <section>
        <div id="main_content">
            <div id="login_box">
                <h2>로그인</h2>
                <div id="login_form">
                <form action="./login.php" method="post">
                    <ul>
                        <li><input type="text" name="id" placeholder="아이디"></li>
                        <li><input type="password" name="pass" placeholder="비밀번호"></li>
                    </ul>
                    <div id="login_btn">
                        <button class="login-button" type="submit">Login</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>