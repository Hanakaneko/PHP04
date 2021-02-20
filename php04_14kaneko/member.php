<!-- 参加登録者が見れるページにする -->
<?php
// 0. SESSION開始！！
session_start();

// 管理者用ページ

// 1. ログインチェック処理！
// 以下、セッションID持ってたら、ok
// 持ってなければ、閲覧できない処理にする。

// if(セッションIDをもっていたら　＆人ヤツを使っていないか){}
//   OK
// else{ 出ていけ！}

    if(
    !isset($_SESSION['chk_ssid']) || 
    $_SESSION['chk_ssid'] !=session_id()  
    ){
//     // ログインに異常がある人
    echo('LOGIN Error');
    exit();
    }

     else{
//     // ログインOKな人
//     // SES ID を新しくしてあげる
      session_regenerate_id(true);
      $_SESSION['chk_ssid']= session_id();
      
       }
// ||はorのこと

// sessionCheckを消去した。エラー出たため


//１．関数群の読み込み
include("memberfuncs.php");

//２．データ登録SQL作成
$pdo = db_conn();
$stmt = $pdo->prepare("SELECT * FROM gs_an_table");
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    sql_error($stmt);
} else {
    while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= '<p>';
        $view .= '<a href="detail.php?id=' . $r["id"] . '">';
        $view .= $r["id"] . " " . $r["name"] . " " . $r["number"];
        $view .= '</a>';
        $view .= "　";
        
        $view .= '</a>';
        $view .= '</p>';
    }
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>オラフ会参加オラフ一覧</title>
    <link rel="stylesheet" href="css/range.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body id="main">
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">TOPページへ戻る</a>
                </div>
            </div>
        </nav>

        <p1>オラフ会参加予定者とぬいぐるみの数</p>


    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <div>
        <div class="container jumbotron"><?= $view ?></div>
    </div>
    <!-- Main[End] -->

    <p2>当日の注意事項などは前日までにメールでお知らせいたします。</P>

</body>

</html>



