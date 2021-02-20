<?php
//1. 必ず”session_start(); ”関数を最初に実行!! 
session_start();

//2. SESSION変数に値を代入!! 
$_SESSION["name"]="やまざき"; 
$_SESSION["num"]=1000;

//3. SESSION変数に預けた値を表示 
echo $_SESSION["name"];

?>


