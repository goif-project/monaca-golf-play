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
$css = '<link rel="stylesheet" href="'.$level.'css/seurch.css" type="text/css" />';
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
  <li><a class="underline" href="./">検索結果</a></li>
</ol>
<div class="page-wrap cfx">
  <article>
    <!--記事が見つからなかった場合-->
    <div class="error">
      <h1>見つかりませんでした</h1>
      <p><span class="sp-block">ご指定の検索条件に合う投稿がありませんでした。</span>他のキーワードでもう一度検索してみてください。</p>
      <form action="#" method="post">
        <input type="text" name="" value="" placeholder="記事を検索">
        <button class="colorback-c" type="submit" name="" value="">
        検索する
        </button>
      </form>
    </div>
  </article>
  <?php html_aside(); ?>
</div><!--page-wrap終了-->
<!--ここまででコンテントの内容終わる　-->
<?php html_footer(); ?>
</div>	<!--wrap終了-->
</body>
</html>
