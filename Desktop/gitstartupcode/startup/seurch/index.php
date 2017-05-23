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
    <!--記事が見つかった場合-->
    <div class="seurch">
      <h1>検索結果 :<span>テキストテキストテキスト</span></h1>
      <!--サブコンテンツ01-->
      <div class="sub-contents cfx">
        <div class="left-wrap flL">
          <div class="top-wrap">
            <div class="top-image"><a class="img-zoom" href="#"><img src="../images/index/top-image.jpg" alt="トップ画像"></a></div>
            <span class="category"><a class="opa8" href="#">サービス・プロダクト紹介</a></span>
          </div>
        </div>
        <div class="right-wrap flL">
          <h1><a class="color-c block" href="#">株式会社スタメンが第三者割当増資で総額2.8億円を資金調達ー福利厚生プラットフォームサービス『TUNAG（ツナグ）』本格展開へ</a></h1>
          <div class="bottom-wrap cfx">
            <div class="auther flL">
              <a class="auther-hover block" href="#">
                <span class="photo"><img src="../images/index/auther.jpeg" alt="人画像"></span>
                <span class="name">Masaki Wakameda</span>
              </a>
            </div>
            <div class="date flR">
              <span class="new txC">NEW</span>
              <span class="number">2017.04.01</span>
            </div>
          </div>
        </div>
      </div>
      <!--サブコンテンツ02-->
      <div class="sub-contents cfx">
        <div class="left-wrap flL">
          <div class="top-wrap">
            <div class="top-image"><a class="img-zoom" href="#"><img src="../images/index/top-image.jpg" alt="トップ画像"></a></div>
            <span class="category"><a class="opa8" href="#">サービス・プロダクト紹介</a></span>
          </div>
        </div>
        <div class="right-wrap flL">
          <h1><a class="color-c block" href="#">株式会社スタメンが第三者割当増資で総額2.8億円を資金調達ー福利厚生プラットフォームサービス『TUNAG（ツナグ）』本格展開へ</a></h1>
          <div class="bottom-wrap cfx">
            <div class="auther flL">
              <a class="auther-hover block" href="#">
                <span class="photo"><img src="../images/index/auther.jpeg" alt="人画像"></span>
                <span class="name">Masaki Wakameda</span>
              </a>
            </div>
            <div class="date flR">
              <span class="number">2017.04.01</span>
            </div>
          </div>
        </div>
      </div>
      <!--サブコンテンツ03-->
      <div class="sub-contents cfx">
        <div class="left-wrap flL">
          <div class="top-wrap">
            <div class="top-image"><a class="img-zoom" href="#"><img src="../images/index/top-image.jpg" alt="トップ画像"></a></div>
            <span class="category"><a class="opa8" href="#">サービス・プロダクト紹介</a></span>
          </div>
        </div>
        <div class="right-wrap flL">
          <h1><a class="color-c block" href="#">株式会社スタメンが第三者割当増資で総額2.8億円を資金調達ー福利厚生プラットフォームサービス『TUNAG（ツナグ）』本格展開へ</a></h1>
          <div class="bottom-wrap cfx">
            <div class="auther flL">
              <a class="auther-hover block" href="#">
                <span class="photo"><img src="../images/index/auther.jpeg" alt="人画像"></span>
                <span class="name">Masaki Wakameda</span>
              </a>
            </div>
            <div class="date flR">
              <span class="number">2017.04.01</span>
            </div>
          </div>
        </div>
      </div>
      <!--サブコンテンツ04-->
      <div class="sub-contents cfx">
        <div class="left-wrap flL">
          <div class="top-wrap">
            <div class="top-image"><a class="img-zoom" href="#"><img src="../images/index/top-image.jpg" alt="トップ画像"></a></div>
            <span class="category"><a class="opa8" href="#">サービス・プロダクト紹介</a></span>
          </div>
        </div>
        <div class="right-wrap flL">
          <h1><a class="color-c block" href="#">株式会社スタメンが第三者割当増資で総額2.8億円を資金調達ー福利厚生プラットフォームサービス『TUNAG（ツナグ）』本格展開へ</a></h1>
          <div class="bottom-wrap cfx">
            <div class="auther flL">
              <a class="auther-hover block" href="#">
                <span class="photo"><img src="../images/index/auther.jpeg" alt="人画像"></span>
                <span class="name">Masaki Wakameda</span>
              </a>
            </div>
            <div class="date flR">
              <span class="number">2017.04.01</span>
            </div>
          </div>
        </div>
      </div>
      <!--サブコンテンツ05-->
      <div class="sub-contents cfx">
        <div class="left-wrap flL">
          <div class="top-wrap">
            <div class="top-image"><a class="img-zoom" href="#"><img src="../images/index/top-image.jpg" alt="トップ画像"></a></div>
            <span class="category"><a class="opa8" href="#">サービス・プロダクト紹介</a></span>
          </div>
        </div>
        <div class="right-wrap flL">
          <h1><a class="color-c block" href="#">株式会社スタメンが第三者割当増資で総額2.8億円を資金調達ー福利厚生プラットフォームサービス『TUNAG（ツナグ）』本格展開へ</a></h1>
          <div class="bottom-wrap cfx">
            <div class="auther flL">
              <a class="auther-hover block" href="#">
                <span class="photo"><img src="../images/index/auther.jpeg" alt="人画像"></span>
                <span class="name">Masaki Wakameda</span>
              </a>
            </div>
            <div class="date flR">
              <span class="number">2017.04.01</span>
            </div>
          </div>
        </div>
      </div>
      <!--サブコンテンツ06-->
      <div class="sub-contents cfx">
        <div class="left-wrap flL">
          <div class="top-wrap">
            <div class="top-image"><a class="img-zoom" href="#"><img src="../images/index/top-image.jpg" alt="トップ画像"></a></div>
            <span class="category"><a class="opa8" href="#">サービス・プロダクト紹介</a></span>
          </div>
        </div>
        <div class="right-wrap flL">
          <h1><a class="color-c block" href="#">株式会社スタメンが第三者割当増資で総額2.8億円を資金調達ー福利厚生プラットフォームサービス『TUNAG（ツナグ）』本格展開へ</a></h1>
          <div class="bottom-wrap cfx">
            <div class="auther flL">
              <a class="auther-hover block" href="#">
                <span class="photo"><img src="../images/index/auther.jpeg" alt="人画像"></span>
                <span class="name">Masaki Wakameda</span>
              </a>
            </div>
            <div class="date flR">
              <span class="number">2017.04.01</span>
            </div>
          </div>
        </div>
      </div>
      <!--サブコンテンツ07-->
      <div class="sub-contents cfx">
        <div class="left-wrap flL">
          <div class="top-wrap">
            <div class="top-image"><a class="img-zoom" href="#"><img src="../images/index/top-image.jpg" alt="トップ画像"></a></div>
            <span class="category"><a class="opa8" href="#">サービス・プロダクト紹介</a></span>
          </div>
        </div>
        <div class="right-wrap flL">
          <h1><a class="color-c block" href="#">株式会社スタメンが第三者割当増資で総額2.8億円を資金調達ー福利厚生プラットフォームサービス『TUNAG（ツナグ）』本格展開へ</a></h1>
          <div class="bottom-wrap cfx">
            <div class="auther flL">
              <a class="auther-hover block" href="#">
                <span class="photo"><img src="../images/index/auther.jpeg" alt="人画像"></span>
                <span class="name">Masaki Wakameda</span>
              </a>
            </div>
            <div class="date flR">
              <span class="number">2017.04.01</span>
            </div>
          </div>
        </div>
      </div>
      <!--サブコンテンツ08-->
      <div class="sub-contents cfx">
        <div class="left-wrap flL">
          <div class="top-wrap">
            <div class="top-image"><a class="img-zoom" href="#"><img src="../images/index/top-image.jpg" alt="トップ画像"></a></div>
            <span class="category"><a class="opa8" href="#">サービス・プロダクト紹介</a></span>
          </div>
        </div>
        <div class="right-wrap flL">
          <h1><a class="color-c block" href="#">株式会社スタメンが第三者割当増資で総額2.8億円を資金調達ー福利厚生プラットフォームサービス『TUNAG（ツナグ）』本格展開へ</a></h1>
          <div class="bottom-wrap cfx">
            <div class="auther flL">
              <a class="auther-hover block" href="#">
                <span class="photo"><img src="../images/index/auther.jpeg" alt="人画像"></span>
                <span class="name">Masaki Wakameda</span>
              </a>
            </div>
            <div class="date flR">
              <span class="number">2017.04.01</span>
            </div>
          </div>
        </div>
      </div>
      <!--サブコンテンツ09-->
      <div class="sub-contents cfx">
        <div class="left-wrap flL">
          <div class="top-wrap">
            <div class="top-image"><a class="img-zoom" href="#"><img src="../images/index/top-image.jpg" alt="トップ画像"></a></div>
            <span class="category"><a class="opa8" href="#">サービス・プロダクト紹介</a></span>
          </div>
        </div>
        <div class="right-wrap flL">
          <h1><a class="color-c block" href="#">株式会社スタメンが第三者割当増資で総額2.8億円を資金調達ー福利厚生プラットフォームサービス『TUNAG（ツナグ）』本格展開へ</a></h1>
          <div class="bottom-wrap cfx">
            <div class="auther flL">
              <a class="auther-hover block" href="#">
                <span class="photo"><img src="../images/index/auther.jpeg" alt="人画像"></span>
                <span class="name">Masaki Wakameda</span>
              </a>
            </div>
            <div class="date flR">
              <span class="number">2017.04.01</span>
            </div>
          </div>
        </div>
      </div>
      <!--サブコンテンツ10-->
      <div class="sub-contents cfx">
        <div class="left-wrap flL">
          <div class="top-wrap">
            <div class="top-image"><a class="img-zoom" href="#"><img src="../images/index/top-image.jpg" alt="トップ画像"></a></div>
            <span class="category"><a class="opa8" href="#">サービス・プロダクト紹介</a></span>
          </div>
        </div>
        <div class="right-wrap flL">
          <h1><a class="color-c block" href="#">株式会社スタメンが第三者割当増資で総額2.8億円を資金調達ー福利厚生プラットフォームサービス『TUNAG（ツナグ）』本格展開へ</a></h1>
          <div class="bottom-wrap cfx">
            <div class="auther flL">
              <a class="auther-hover block" href="#">
                <span class="photo"><img src="../images/index/auther.jpeg" alt="人画像"></span>
                <span class="name">Masaki Wakameda</span>
              </a>
            </div>
            <div class="date flR">
              <span class="number">2017.04.01</span>
            </div>
          </div>
        </div>
      </div>
      <!--サブコンテンツ011-->
      <div class="sub-contents cfx">
        <div class="left-wrap flL">
          <div class="top-wrap">
            <div class="top-image"><a class="img-zoom" href="#"><img src="../images/index/top-image.jpg" alt="トップ画像"></a></div>
            <span class="category"><a class="opa8" href="#">サービス・プロダクト紹介</a></span>
          </div>
        </div>
        <div class="right-wrap flL">
          <h1><a class="color-c block" href="#">株式会社スタメンが第三者割当増資で総額2.8億円を資金調達ー福利厚生プラットフォームサービス『TUNAG（ツナグ）』本格展開へ</a></h1>
          <div class="bottom-wrap cfx">
            <div class="auther flL">
              <a class="auther-hover block" href="#">
                <span class="photo"><img src="../images/index/auther.jpeg" alt="人画像"></span>
                <span class="name">Masaki Wakameda</span>
              </a>
            </div>
            <div class="date flR">
              <span class="number">2017.04.01</span>
            </div>
          </div>
        </div>
      </div>
      <!--サブコンテンツ12-->
      <div class="sub-contents cfx">
        <div class="left-wrap flL">
          <div class="top-wrap">
            <div class="top-image"><a class="img-zoom" href="#"><img src="../images/index/top-image.jpg" alt="トップ画像"></a></div>
            <span class="category"><a class="opa8" href="#">サービス・プロダクト紹介</a></span>
          </div>
        </div>
        <div class="right-wrap flL">
          <h1><a class="color-c block" href="#">株式会社スタメンが第三者割当増資で総額2.8億円を資金調達ー福利厚生プラットフォームサービス『TUNAG（ツナグ）』本格展開へ</a></h1>
          <div class="bottom-wrap cfx">
            <div class="auther flL">
              <a class="auther-hover block" href="#">
                <span class="photo"><img src="../images/index/auther.jpeg" alt="人画像"></span>
                <span class="name">Masaki Wakameda</span>
              </a>
            </div>
            <div class="date flR">
              <span class="number">2017.04.01</span>
            </div>
          </div>
        </div>
      </div>
      <!--サブコンテンツ13-->
      <div class="sub-contents cfx">
        <div class="left-wrap flL">
          <div class="top-wrap">
            <div class="top-image"><a class="img-zoom" href="#"><img src="../images/index/top-image.jpg" alt="トップ画像"></a></div>
            <span class="category"><a class="opa8" href="#">サービス・プロダクト紹介</a></span>
          </div>
        </div>
        <div class="right-wrap flL">
          <h1><a class="color-c block" href="#">株式会社スタメンが第三者割当増資で総額2.8億円を資金調達ー福利厚生プラットフォームサービス『TUNAG（ツナグ）』本格展開へ</a></h1>
          <div class="bottom-wrap cfx">
            <div class="auther flL">
              <a class="auther-hover block" href="#">
                <span class="photo"><img src="../images/index/auther.jpeg" alt="人画像"></span>
                <span class="name">Masaki Wakameda</span>
              </a>
            </div>
            <div class="date flR">
              <span class="number">2017.04.01</span>
            </div>
          </div>
        </div>
      </div>
      <!--サブコンテンツ14-->
      <div class="sub-contents cfx">
        <div class="left-wrap flL">
          <div class="top-wrap">
            <div class="top-image"><a class="img-zoom" href="#"><img src="../images/index/top-image.jpg" alt="トップ画像"></a></div>
            <span class="category"><a class="opa8" href="#">サービス・プロダクト紹介</a></span>
          </div>
        </div>
        <div class="right-wrap flL">
          <h1><a class="color-c block" href="#">株式会社スタメンが第三者割当増資で総額2.8億円を資金調達ー福利厚生プラットフォームサービス『TUNAG（ツナグ）』本格展開へ</a></h1>
          <div class="bottom-wrap cfx">
            <div class="auther flL">
              <a class="auther-hover block" href="#">
                <span class="photo"><img src="../images/index/auther.jpeg" alt="人画像"></span>
                <span class="name">Masaki Wakameda</span>
              </a>
            </div>
            <div class="date flR">
              <span class="number">2017.04.01</span>
            </div>
          </div>
        </div>
      </div>
      <!--サブコンテンツ15-->
      <div class="sub-contents cfx">
        <div class="left-wrap flL">
          <div class="top-wrap">
            <div class="top-image"><a class="img-zoom" href="#"><img src="../images/index/top-image.jpg" alt="トップ画像"></a></div>
            <span class="category"><a class="opa8" href="#">サービス・プロダクト紹介</a></span>
          </div>
        </div>
        <div class="right-wrap flL">
          <h1><a class="color-c block" href="#">株式会社スタメンが第三者割当増資で総額2.8億円を資金調達ー福利厚生プラットフォームサービス『TUNAG（ツナグ）』本格展開へ</a></h1>
          <div class="bottom-wrap cfx">
            <div class="auther flL">
              <a class="auther-hover block" href="#">
                <span class="photo"><img src="../images/index/auther.jpeg" alt="人画像"></span>
                <span class="name">Masaki Wakameda</span>
              </a>
            </div>
            <div class="date flR">
              <span class="number">2017.04.01</span>
            </div>
          </div>
        </div>
      </div>
      <!--サブコンテンツ16-->
      <div class="sub-contents cfx">
        <div class="left-wrap flL">
          <div class="top-wrap">
            <div class="top-image"><a class="img-zoom" href="#"><img src="../images/index/top-image.jpg" alt="トップ画像"></a></div>
            <span class="category"><a class="opa8" href="#">サービス・プロダクト紹介</a></span>
          </div>
        </div>
        <div class="right-wrap flL">
          <h1><a class="color-c block" href="#">株式会社スタメンが第三者割当増資で総額2.8億円を資金調達ー福利厚生プラットフォームサービス『TUNAG（ツナグ）』本格展開へ</a></h1>
          <div class="bottom-wrap cfx">
            <div class="auther flL">
              <a class="auther-hover block" href="#">
                <span class="photo"><img src="../images/index/auther.jpeg" alt="人画像"></span>
                <span class="name">Masaki Wakameda</span>
              </a>
            </div>
            <div class="date flR">
              <span class="number">2017.04.01</span>
            </div>
          </div>
        </div>
      </div>
      <!--サブコンテンツ17-->
      <div class="sub-contents cfx">
        <div class="left-wrap flL">
          <div class="top-wrap">
            <div class="top-image"><a class="img-zoom" href="#"><img src="../images/index/top-image.jpg" alt="トップ画像"></a></div>
            <span class="category"><a class="opa8" href="#">サービス・プロダクト紹介</a></span>
          </div>
        </div>
        <div class="right-wrap flL">
          <h1><a class="color-c block" href="#">株式会社スタメンが第三者割当増資で総額2.8億円を資金調達ー福利厚生プラットフォームサービス『TUNAG（ツナグ）』本格展開へ</a></h1>
          <div class="bottom-wrap cfx">
            <div class="auther flL">
              <a class="auther-hover block" href="#">
                <span class="photo"><img src="../images/index/auther.jpeg" alt="人画像"></span>
                <span class="name">Masaki Wakameda</span>
              </a>
            </div>
            <div class="date flR">
              <span class="number">2017.04.01</span>
            </div>
          </div>
        </div>
      </div>
      <!--サブコンテンツ18-->
      <div class="sub-contents cfx">
        <div class="left-wrap flL">
          <div class="top-wrap">
            <div class="top-image"><a class="img-zoom" href="#"><img src="../images/index/top-image.jpg" alt="トップ画像"></a></div>
            <span class="category"><a class="opa8" href="#">サービス・プロダクト紹介</a></span>
          </div>
        </div>
        <div class="right-wrap flL">
          <h1><a class="color-c block" href="#">株式会社スタメンが第三者割当増資で総額2.8億円を資金調達ー福利厚生プラットフォームサービス『TUNAG（ツナグ）』本格展開へ</a></h1>
          <div class="bottom-wrap cfx">
            <div class="auther flL">
              <a class="auther-hover block" href="#">
                <span class="photo"><img src="../images/index/auther.jpeg" alt="人画像"></span>
                <span class="name">Masaki Wakameda</span>
              </a>
            </div>
            <div class="date flR">
              <span class="number">2017.04.01</span>
            </div>
          </div>
        </div>
      </div>
      <!--サブコンテンツ19-->
      <div class="sub-contents cfx">
        <div class="left-wrap flL">
          <div class="top-wrap">
            <div class="top-image"><a class="img-zoom" href="#"><img src="../images/index/top-image.jpg" alt="トップ画像"></a></div>
            <span class="category"><a class="opa8" href="#">サービス・プロダクト紹介</a></span>
          </div>
        </div>
        <div class="right-wrap flL">
          <h1><a class="color-c block" href="#">株式会社スタメンが第三者割当増資で総額2.8億円を資金調達ー福利厚生プラットフォームサービス『TUNAG（ツナグ）』本格展開へ</a></h1>
          <div class="bottom-wrap cfx">
            <div class="auther flL">
              <a class="auther-hover block" href="#">
                <span class="photo"><img src="../images/index/auther.jpeg" alt="人画像"></span>
                <span class="name">Masaki Wakameda</span>
              </a>
            </div>
            <div class="date flR">
              <span class="number">2017.04.01</span>
            </div>
          </div>
        </div>
      </div>
      <!--サブコンテンツ20-->
      <div class="sub-contents cfx">
        <div class="left-wrap flL">
          <div class="top-wrap">
            <div class="top-image"><a class="img-zoom" href="#"><img src="../images/index/top-image.jpg" alt="トップ画像"></a></div>
            <span class="category"><a class="opa8" href="#">サービス・プロダクト紹介</a></span>
          </div>
        </div>
        <div class="right-wrap flL">
          <h1><a class="color-c block" href="#">株式会社スタメンが第三者割当増資で総額2.8億円を資金調達ー福利厚生プラットフォームサービス『TUNAG（ツナグ）』本格展開へ</a></h1>
          <div class="bottom-wrap cfx">
            <div class="auther flL">
              <a class="auther-hover block" href="#">
                <span class="photo"><img src="../images/index/auther.jpeg" alt="人画像"></span>
                <span class="name">Masaki Wakameda</span>
              </a>
            </div>
            <div class="date flR">
              <span class="number">2017.04.01</span>
            </div>
          </div>
        </div>
      </div>
      <div class="page-list">
        <ul class="cfx">
          <li class="prev"><a class="colorback-c2" href="#"><</a></li>
          <li><a class="active colorback-c2" href="#">1</a></li>
          <li><a class="colorback-c2" href="#">2</a></li>
          <li><a class="colorback-c2" href="#">3</a></li>
          <li class="next"><a class="colorback-c2" href="#">></a></li>
        </ul>
      </div>
    </div>
    <!--記事が見つからなかった場合
    <div class="error">
      <h1>見つかりませんでした</h1>
      <p>ご指定の検索条件に合う投稿がありませんでした。他のキーワードでもう一度検索してみてください。</p>
      <form action="#" method="post">
        <input type="text" name="" value="" placeholder="記事を検索">
        <button class="colorback-c" type="submit" name="" value="">
        検索する
        </button>
      </form>
    </div>
    -->
  </article>
  <?php html_aside(); ?>
</div><!--page-wrap終了-->
<!--ここまででコンテントの内容終わる　-->
<?php html_footer(); ?>
</div>	<!--wrap終了-->
</body>
</html>
