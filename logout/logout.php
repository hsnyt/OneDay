<?php
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['name']);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/webapp/logout/logout.css">
    <title>One Day</title>
</head>
<body>
    <header>
            <h1 id="title">OneDay</h1>
            <div id="signup">
                <a href="/webapp/login/login.php"><button id="login">ログイン</button></a>
                <a href="/webapp/register/register.php"><button id="sign">新規登録</button></a>
            </div>
    </header>
    <div>
        <div id="container">
            <div id="img1">
                <img src="/webapp/img/window.png" alt="窓" id="window">
                <a href="/webapp/calendar/calendar.php"><img src="/webapp/img/calendar.png" alt="カレンダー" id="calendar" ></a>
                <img src="/webapp/img/light.png" alt="ライト" id="light">
                <img src="/webapp/img/clock.png" alt="時計" id="clock">
                <img src="/webapp/img/others1.png" alt="" id="wall1">
            </div>
            </div>
            <div id="img2">
                <img src="/webapp/img/leaf1.png" alt="" id="leaf1">
                <img src="/webapp/img/leaf2.png" alt="" id="leaf2">
                <a href="/webapp/diary/diary.php"><img src="/webapp/img/cloud.png" alt="" id="cloud"></a>
                <img src="/webapp/img/person2.png" alt="人" id="person2">
                <img src="/webapp/img/sofa1.png" id="sofa1">
                <img src="/webapp/img/person1.png" alt="人" id="person1">
                <a href="/webapp/about/about.html"><img src="/webapp/img/tv.png" alt="テレビ" id="tv"></a>
            </div>
        </div>
    </div>
    <script src="/webapp/oneday.js"></script>
</body>
</html>