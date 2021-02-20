<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ようこそオラフ会へ</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="memberlogin.php">参加登録した方はこちら</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="login.php">管理者ログイン</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="logout.php">管理者ログアウト</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->
    <h1>オラフ会へようこそ</h1>
    <p>オラフ会は、スヌーピーのきょうだいオラフが集まるZOOMPartyです。</p>
    <img src="img/IMG_1060.jpeg">

    <!-- Main[Start] -->
    <form method="POST" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>参加申し込み</legend>
                <label>ぬいぐるみの名前：<input type="text" name="name"></label><br>
                <label>Email：<input type="text" name="email"></label><br>
                <label>参加するぬいぐるみの数：<input type="text" name="number"></label><br>
                <label>オラフ会への意気込み<textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->
</body>

</html>
