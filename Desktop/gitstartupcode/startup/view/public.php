<?php

function html_header(){
	global $level,$css,$js,$title,$keywords,$description,$author;

	echo'
	<!DOCTYPE html>
	<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="'.$keywords.'">
		<meta name="description" content="'.$description.'">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="'.$author.'">
		<title>'.$title.'</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="'.$level.'css/import.css" type="text/css" />
		'.$css.'
		<script type="text/javascript" src="'.$level.'js/jquery-1.11.3.min.js"></script>
		<script async src="https://platform.twitter.com/widgets.js" charset="UTF-8"></script>
		<script type="text/javascript" src="'.$level.'js/plugin/easing.js"></script>
		<script type="text/javascript" src="'.$level.'js/script.js"></script>
		'.$js.'
	</head>

<body>
	<div id="wrap">
	<header>
		<h1>名古屋のベンチャー企業に特化したオンライン経済新聞</h1>
		<div class="header-link cfx">
			<p class="logo-wrap flL"><a class="opa6 block" href=""><img src ="'.$level.'images/common/nsn-logo.png" alt="Nagoya Startup News ロゴ"></a></p>
			<!--ここからログイン未完了-->
			<p class="login-btn flL"><span class="center"><a class="login color-c cursor">Login</a> / <a class="signup color-c cursor">Sign up</a></span></p>
			<!--ここからログイン完了-->
			<!--<p class="flL txC mypage">
				<a class="color-c" href="#">１２３４５６さん</a>
			</p>-->
			<div class="over-wrap">
				<div class="inner-wrap">
					<p class="batu"><img class="rote" src="'.$level.'images/common/batu.png" alt="閉じる"></p>
					<p class="logo"><a class="opa6 block" href="#"><img src ="'.$level.'images/common/nsn-logo.png" alt="Nagoya Startup News ロゴ"></a></p>
					<ul class="cfx page-btn">
						<li id="login-btn"><a class="color-c">Login</a></li>
						<li id="signup-btn"><a class="color-c">Sign up</a></li>
					</ul>
					<div class="login-wrap">
						<form action="#" method="post">
							<input type="text" name="login-mail" placeholder="mail">
							<input type="password" name="login-pass" placeholder="pass">
							<label for="logincheck">
								<input type="hidden">
								<input type="checkbox" name="q1" value="その2" id="logincheck">次回から自動的にログイン
							</label>
							<p class="error">mailまたはpassが違います</p>
							<input class="colorback-c" type="submit" name="submit-login" value="Login">
						</form>
						<hr>
						<div class="sns-btn facebook">
							<a class="opa6" href="#">
								<i class="fa fa-facebook" aria-hidden="true"></i>Facebookでログイン
							</a>
						</div>
						<div class="sns-btn twitter">
							<a class="opa6" href="#">
								<i class="fa fa-twitter" aria-hidden="true"></i>Twitterでログイン
							</a>
						</div>
						<div class="sns-btn googleplus">
							<a class="opa6" href="#">
								<i class="fa fa-google-plus" aria-hidden="true"></i>google+でログイン
							</a>
						</div>
					</div><!--login-wrap-->
					<div class="signup-wrap">
						<form action="#" method="post">
							<input type="text" name="signup-mail" placeholder="mail">
							<label for="logincheck">
								<input type="hidden">
								<input type="checkbox" name="q1" value="その2" id="logincheck">企業用のアカウントを作成する方はコチラをチェックしてください
							</label>
							<input class="colorback-c" type="submit" name="submit-signup" value="Send mail">
						</form>
						<hr>
						<div class="sns-btn facebook">
							<a class="opa6" href="#">
								<i class="fa fa-facebook" aria-hidden="true"></i>Facebookで新規登録
							</a>
						</div>
						<div class="sns-btn twitter">
							<a class="opa6" href="#">
								<i class="fa fa-twitter" aria-hidden="true"></i>Twitterで新規登録
							</a>
						</div>
						<div class="sns-btn googleplus">
							<a class="opa6" href="#">
								<i class="fa fa-google-plus" aria-hidden="true"></i>google+で新規登録
							</a>
						</div>
					</div><!--sign-wrap-->
				</div>
			</div>
			<div class="nav-btn flL">
				<a class="menu-trigger hvr-grow-shadow cursor">
					<span></span>
					<span></span>
					<span></span>
				</a>
			</div>
			<nav>
				<ul class="txC">
					<li class="batu"><img class="rote" src="'.$level.'images/common/batu.png" alt="閉じる"></li>
					<li class="logo-wrap2"><a class="opa6 block" href="#"><img src ="'.$level.'images/common/nsn-logo.png" alt="Nagoya Startup News ロゴ"></a></li>
					<li><a class="color-c" href="#">ニュース</a></li>
					<li><a class="color-c" href="#">イベント・懇親会</a></li>
					<li><a class="color-c" href="#">企業分析</a></li>
					<li><a class="color-c" href="#">サービス・プロダクト紹介</a></li>
					<li><a class="color-c" href="#">資金調達</a></li>
					<li><a class="color-c" href="#">インタビュー</a></li>
					<li><a class="color-c" href="#">イグジット</a></li>
				</ul>
			</nav>
		</div>
	</header>
';}

function html_aside(){
	global $level;

	echo'
	<aside>
		<div id="aside-wrap">
	    <div class="seurch-wrap">
	      <form class="" action="#" method="post">
	        <input type="text" name="" value="" placeholder="記事を検索">
					<button class="opa6" type="submit" name="" value="">
					<i class="fa fa-search" aria-hidden="true"></i>
					</button>
	      </form>
	    </div>
	    <div class="bana-wrap">
	      <p><a class="opa6" href="https://www.misoca.jp/" target="_blank"><img src="'.$level.'images/common/bana1.png" alt="バナー１"></a></p>
	      <p><a class="opa6" href="http://nagoyastartup.co.jp/recruit/" target="_blank"><img src="'.$level.'images/common/bana2.jpg" alt="バナー２"></a></p>
	      <p><a class="opa6" href="http://nagoya-benkyokai.com/" target="_blank"><img src="'.$level.'images/common/bana3.jpg" alt="バナー３"></a></p>
	    </div>
	    <div class="company-wrap">
	      <h2><span>各社のお知らせ</span></h2>
	      <div class="company-list">
	        <div class="company-detail cfx">
	          <div class="left-wrap flL">
	            <a class="img-zoom" href="#"><img src="'.$level.'images/common/company.jpg" alt="企業画像"></a>
	          </div>
	          <div class="right-wrap flL">
	            <h3><a class="color-c" href="#">テキストテキストテキストテテキストテキストストテ…</a></h3>
	            <p><a class="underline" href="#">株式会社○○</a></p>
	          </div>
	        </div>
	      </div>
				<div class="company-list">
	        <div class="company-detail cfx">
	          <div class="left-wrap flL">
	            <a class="img-zoom" href="#"><img src="'.$level.'images/common/company.jpg" alt="企業画像"></a>
	          </div>
	          <div class="right-wrap flL">
	            <h3><a class="color-c" href="#">テキストテキストテキストテテキストテキストストテ…</a></h3>
	            <p><a class="underline" href="#">株式会社○○</a></p>
	          </div>
	        </div>
	      </div>
				<div class="company-list">
	        <div class="company-detail cfx">
	          <div class="left-wrap flL">
	            <a class="img-zoom" href="#"><img src="'.$level.'images/common/company.jpg" alt="企業画像"></a>
	          </div>
	          <div class="right-wrap flL">
	            <h3><a class="color-c" href="#">テキストテキストテキストテテキストテキストストテ…</a></h3>
	            <p><a class="underline" href="#">株式会社○○</a></p>
	          </div>
	        </div>
	      </div>
				<div class="company-list">
	        <div class="company-detail cfx">
	          <div class="left-wrap flL">
	            <a class="img-zoom" href="#"><img src="'.$level.'images/common/company.jpg" alt="企業画像"></a>
	          </div>
	          <div class="right-wrap flL">
	            <h3><a class="color-c" href="#">テキストテキストテキストテテキストテキストストテ…</a></h3>
	            <p><a class="underline" href="#">株式会社○○</a></p>
	          </div>
	        </div>
	      </div>
				<div class="company-list">
	        <div class="company-detail cfx">
	          <div class="left-wrap flL">
	            <a class="img-zoom" href="#"><img src="'.$level.'images/common/company.jpg" alt="企業画像"></a>
	          </div>
	          <div class="right-wrap flL">
	            <h3><a class="color-c" href="#">テキストテキストテキストテテキストテキストストテ…</a></h3>
	            <p><a class="underline" href="#">株式会社○○</a></p>
	          </div>
	        </div>
	      </div>
	      <p class="more"><a class="hvr-rectangle-out" href="#">MORE</a></p>
	    </div>
	    <div class="about-us">
	      <h2><span>About Us</span></h2>
				<ul>
				<li><a class="color-c" href="http://nagoyastartup.co.jp/" target="_blank">運用会社</a></li>
				<li><a class="color-c" href="'.$level.'member/">運営メンバー</a></li>
				<li><a class="color-c" href="'.$level.'terms/">利用規約</a></li>
				<li><a class="color-c" href="'.$level.'privacy-policy/">プライバシーポリシー</a></li>

				</ul>
	    </div>
	    <div class="recruit-wrap">
	      <h2><span>注目の求人</span></h2>
	      <iframe frameborder="0" height="305px" name="wantedly_project_widget_60662" scrolling="no" src="https://www.wantedly.com/projects/60662/widget" style="border: none; max-width: 100%; min-width: 240px; width: 300px;"></iframe>
	    </div>
	    <div class="facebook-wrap">
	      <h2><span>Facebook</span></h2>
	      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fnagoyastartupnews%2F&tabs=timeline&width=300&height=350&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="100%" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
	    </div>
	    <div class="twitter-wrap">
	      <h2><span>Twitter</span></h2>
	      <a class="twitter-timeline"
					data-lang="ja"
	        data-width="300px"
					data-height="350px"
					href="https://twitter.com/nagoyastartup"
				>
				</a>
	    </div>
	    <div class="wantedly-wrap">
	      <h2><span>Wantedly</span></h2>
	      <a class="wantedly-company-feeds" data-company-id="nagoyastartup" data-height="350" data-width="300" href="https://www.wantedly.com/companies/nagoyastartup"></a> <script> (function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "https://platform.wantedly.com/company_feeds/widget.js"; fjs.parentNode.insertBefore(js, fjs); }(document, "script", "wantedly-comp-feeds-wjs")); </script>
	    </div>
	    <div class="sns-wrap">
				<h2><span>SNSページへ行く</span></h2>
				<ul class="sns-icon-list cfx">
					<li><a class="opa6" href="https://twitter.com/nagoyastartup?ref_src=twsrc%5Etfw&ref_url=http%3A%2F%2Flocalhost%3A1024%2Fstartup%2F%23" target="_blank"><img src="'.$level.'images/common/twitter-icon.png" alt="twitterアイコン"></a></li>
					<li><a class="opa6" href="https://www.facebook.com/nagoyastartupnews/" target="_blank"><img src="'.$level.'images/common/facebook-icon.png" alt="facebookアイコン"></a></li>
					<li><a class="opa6" href="https://www.wantedly.com/companies/nagoyastartup" target="_blank"><img src="'.$level.'images/common/wantedly-icon.png" alt="wantedlyアイコン"></a></li>
				</ul>
	    </div>
		</div>
		<p id="topbtn" class="pagetop"><a href="#"><img src="'.$level.'images/common/page-top.png" alt="トップへ行く"></a></p>
  </aside>
';}

function html_footer(){
	global $level;

	echo'
	<footer>
		<p class="txC">(C) 2016-2017 Nagoya Startup News.</p>
  </footer>

';}

?>
