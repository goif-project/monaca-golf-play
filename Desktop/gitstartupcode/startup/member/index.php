<?php
session_start();
//データベースなどの設定
// require_once('./core/setup.php');

////////////////////////////////////////
//sql文のphpを記入
/////////////////////////////////////
// require_once('./core/test/mysql_select.php');



////////////////////////////////////////
//mysqlの切断
/////////////////////////////////////
// require_once('./core/mysqldown.php');

////////////////////////////////////////
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
////////////////////////////////////
require_once("../view/public.php");


//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '../';
//使用するcssを記入
$css = '
  <link rel="stylesheet" href="'.$level.'css/member.css" type="text/css" />
';
//使用するjavascript(jQuery)を記入
$js = '';
//サイトのタイトルを記入
$title = 'Nagoya Startup News';
//サイトのキーワードを記入(表示には関係ない・任意)
$keywords = '';
//サイトの説明文を記入(表示には関係ない・任意)
$description = 'Nagoya Startup Newsは名古屋のスタートアップ事情を配信するニュースサイトです。スタートアップ人材の発掘やイベント情報発信をメインに、名古屋ならではのスタートアップコミュニティのベースを作り上げます。';
//サイトの製作者を記入(表示には関係ない・任意)
$author = '名古屋スタートアップ株式会社';

/************
記入例
**************
//ファイルの回想を記入
$level = '../../';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/style.css" type="text/css" />
        <link rel="stylesheet" href="'.$level.'css/style.css" type="text/css" />';
//使用するjavascript(jQuery)を記入
$js = '';・・・内容がない場合はそのままにする

//サイトのタイトルを記入
$title = 'webサイト -TOP-';
//サイトのキーワードを記入(表示には関係ない・任意)
$keyword = 'web,犬,単語';
//サイトの説明文を記入(表示には関係ない・任意)
$description = 'これはサイトの説明を表しています。';
//サイトの製作者を記入(表示には関係ない・任意)
$auther = 'IW32班';
*************
記入例終了
*************/


//////////////////////////////////////////
//head内の文章入力場所　終了
/////////////////////////////////////////
html_header();
?>
<!--ここからコンテントの内容始まる　-->
<ol class="pankuzu">
  <li><a class="underline" href="../">Nagoya Startup News</a></li>
  <li><a class="underline" href="./">運営メンバー</a></li>
</ol>
<div class="page-wrap cfx">
  <article>
    <h1><span class="sp-block">Nagoya Startup News</span>運営メンバー</h1>
    <p class="titletext">Nagoya Startup News は以下のライター・編集者によって運営されています。</p>
    <div class="department">
      <h2>編集部</h2>
      <div id="" class="member-wrap">
        <p class="img"><img src="../images/member/meigetsu.jpg" alt="Meigetsu Fukaya"></p>
        <h3>深谷 名月（Meigetsu Fukaya）</h3>
        <p class="text">1995年生まれ、中国遼寧省出身。名古屋学院大学英米語学科在中。</p>
        <p class="auther-sns">
          <a class="opa6 twitter" href="https://twitter.com/wakamesun2" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a><a class="opa6 facebook" href="https://www.facebook.com/masaki.wakameda" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a><a class="writer colorback-c2" href="#">> Meigetsu Fukaya のアーカイブへ</a>
        </p>
      </div>
      <div class="member-wrap">
        <p class="img"><img src="../images/member/-1-e1486524002658.jpg" alt="Yuki Sakamoto"></p>
        <h3>阪本　悠紀（Yuki Sakamoto）</h3>
        <p class="text">1992年生まれ。茨城県日立市出身。材料開発研究の傍ら、名古屋のWebメディア系スタートアップ2社で、執筆活動やビジネス関連の仕事をしてい名古屋工業大学大学院生。 趣味は読書、IRやTech系のニュースを読むこと。</p>
        <p class="auther-sns">
          <a class="opa6 twitter" href="https://twitter.com/wakamesun2" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a><a class="opa6 facebook" href="https://www.facebook.com/masaki.wakameda" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a><a class="writer colorback-c2" href="#">> Yuki Sakamoto のアーカイブへ</a>
        </p>
      </div>
      <div class="member-wrap">
        <p class="img"><img src="../images/member/IMG_1335-2-e1484055000800.jpg" alt="Masaki Wakameda"></p>
        <h3>若目田 大貴（Masaki Wakameda）</h3>
        <p class="text">1994年生まれ、栃木県出身。名古屋・タイ・東京のベンチャー3社を経て2015年4月にフリーランス（ライター&編集者）へ。名古屋のスタートアップの情報格差を解消すべく、5月よりNagoya Startup Newsを配信開始。8月に名古屋スタートアップ株式会社を設立し、国内外の複数のWebメディアを運営している。</p>
        <p class="auther-sns">
          <a class="opa6 twitter" href="https://twitter.com/wakamesun2" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a><a class="opa6 facebook" href="https://www.facebook.com/masaki.wakameda" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a><a class="writer colorback-c2" href="#">> Masaki Wakameda のアーカイブへ</a>
        </p>
      </div>
    </div>
    <div class="department">
      <h2>イベント企画部</h2>
      <div class="member-wrap">
        <p class="img"><img src="../images/member/13880358_541957039323146_1019907416269779979_n-768x767.jpg" alt="Maki Goto"></p>
        <h3>後藤 麻希（Maki Goto）</h3>
        <p class="text">1996年生まれ、静岡県出身。 東海エリアのStartupWeekendでリードオーガナイザーを務めるなど名古屋界隈のスタートアップイベントを複数開催。東海のクリエイティブな学生が集まるコミュニティ「OthloTech 」のメンバーでもある。高専出身の名古屋大学生。</p>
        <p class="auther-sns">
          <a class="opa6 twitter" href="https://twitter.com/wakamesun2" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a><a class="opa6 facebook" href="https://www.facebook.com/masaki.wakameda" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a><a class="writer colorback-c2" href="#">> Maki Goto のアーカイブへ</a>
        </p>
      </div>
    </div>
    <div class="department">
      <h2>開発部</h2>
      <div class="member-wrap">
        <p class="img"><img src="../images/member/mizuno.jpg" alt="Akito Mizuno"></p>
        <h3>水野陽斗（Akito Mizuno）</h3>
        <p class="text">1994年生まれ、愛知県清須市出身。中京大学工学部情報工学科。大学で初めてプログラミングに触れ、ITの楽しさを知りエンジニアを目指す。就職活動初期にはベンチャーを知り、魅力に取り憑かれて春からはWeb系ベンチャーのエンジニアとなる。名古屋スタートアップ株式会社では数少ないエンジニアとして働いている。</p>
        <p class="auther-sns">
          <a class="opa6 twitter" href="https://twitter.com/wakamesun2" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a><a class="opa6 facebook" href="https://www.facebook.com/masaki.wakameda" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a><a class="writer colorback-c2" href="#">> Akito Mizuno のアーカイブへ</a>
        </p>
      </div>
    </div>
  </article>
  <?php html_aside(); ?>
</div><!--page-wrap終了-->
<!--ここまででコンテントの内容終わる　-->
<?php html_footer(); ?>
</div>	<!--wrap終了-->
</body>
</html>
