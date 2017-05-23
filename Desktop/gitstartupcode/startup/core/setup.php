<?php
	//グローバルurlの設定
	define('GLOBAL_URL','nagoyastartupnews.jp');
	//マイページの設定
	define('USER_URL','mypage/');
	//スマホページの設定

	$host = "localhost";
	$user = "root";
	$pass = "root";
	$dbname = "";
	/*
	  //学校のデータベースに繋ぐ情報
	  //ホストの情報
	  $host = "192.168.121.16";
	  //ユーザ情報
	  $user = "nhs40011";
	  //パスワード情報
	  $pass = "b19991111";
	  //データベースの名前
	  $dbname = "wanwan";
	*/
	/*
	  //自分が使っているサーバに接続する場合
	  //ホストの情報
	  $host = "";
	  //ユーザ情報
	  $user = "";
	  //パスワード情報
	  $pass = "";
	  //データベースの名前
	  $dbname = "";
	*/

	//データベースの設定
	if(!$Link = mysqli_connect($host,$user,$pass)){
	  exit("MySQL：DB接続失敗："
	  .mysqli_connect_error());
	}
	//  文字コードの指定（クエリー送信）
	if(!mysqli_query($Link,"set names 'utf8'")){
	  exit("MySQL：クエリー送信失敗");
	}

	//  使用するDB指定
	if(!mysqli_select_db($Link,$dbname)){
	  exit("MySQL：DB指定失敗");
	}

	///////////////////////////////////////////////////////////////////////////////////////
	// function
	///////////////////////////////////////////////////////////////////////////////////////
	//現在の日付
	$timestamp	= date("Y-m-d H:i:s");
	//消費税
	$tax		= 1.08;

?>
