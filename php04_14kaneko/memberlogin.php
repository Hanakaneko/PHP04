<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/main.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
    <title>参加者ログイン</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-default">オラフ会参加者用LOGIN画面</nav>
    </header>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">TOPページへ戻る</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
    <form name="form1" action="memberlogin_act.php" method="post">
        Name:<input type="text" name="name" />
        Email:<input type="password" name="email" />
        <input type="submit" value="LOGIN" />
    </form>


</body>

</html>
