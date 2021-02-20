<?php
//最初にSESSIONを開始！！ココ大事！！
session_start();
//POST値を受け取る
$name = $_POST['name'];
$email = $_POST['email'];

//1.  DB接続します
require_once("memberfuncs.php");
$pdo = db_conn();

//2. データ登録SQL作成
// gs_user_tableに、IDとPWがあるか確認する。
$stmt = $pdo->prepare('SELECT * FROM gs_an_table WHERE name= :name AND email = :email ;');
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$status = $stmt->execute();

//3. SQL実行時にエラーがある場合STOP
if ($status == false) {
    sql_error($stmt);
}
//4. 抽出データ数を取得
$val = $stmt->fetch();         //1レコードだけ取得する方法
//$count = $stmt->fetchColumn(); //SELECT COUNT(*)で使用可能()

//5. 該当レコードがあればSESSIONに値を代入
//if(password_verify($lpw, $val["lpw"])){ //* PasswordがHash化の場合はこっちのIFを使う
if ($val["id"] != "") {
    //Login成功時
    $_SESSION["chk_ssid"]  = session_id();
    $_SESSION["kanri_flg"] = $val['kanri_flg'];
    // kanri_flgはnameに書き換え、以下のnameを削除している（動画）
    $_SESSION["name"]      = $val['name'];
    header('Location: member.php');
} else {
    //Login失敗時(Logout経由)
    header('Location: memberlogin.php');
}
exit(); 





