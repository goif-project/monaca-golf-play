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
<link rel="stylesheet" href="'.$level.'css/report.css" type="text/css" />
<link rel="stylesheet" href="'.$level.'css/linkcard.css" type="text/css" />
';
//使用するjavascript(jQuery)を記入
$js = '<script type="text/javascript" src="'.$level.'js/share.js"></script>';
//サイトのタイトルを記入
$title = 'Nagoya Startup News 記事タイトル';
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
  <li><a class="underline" href="#">Nagoya Startup News</a></li>
  <li><a class="underline" href="#">イベント・勉強会</a></li>
  <li><a class="underline" href="#">理系学生の就活を革新する「LabBase」運営の株式会社POLが新たに名古屋支部を設立予定理系学生の就活を革新する「LabBase」運営の株式会社POLが新たにああああ</a></li>
</ol>
<div class="page-wrap cfx">
  <article>
    <div class="report-wrap">
      <h1>理系学生の就活を革新する「LabBase」運営の株式会社POLが新たに名古屋支部を設立</h1>
      <div class="sns-share">
        <ul class="sns-area">
          <li>
            <a
              href="http://b.hatena.ne.jp/entry/{Permalink}"
              class="hatena-bookmark-button sns-bookmark sns-link"
              data-hatena-bookmark-title="{Title}"
              data-hatena-bookmark-layout="simple"
              title="このエントリーをはてなブックマークに追加">
              <span class="hatena"></span><span class="sns-txt">Bookmark</span></a>
          </li>
          <li>
            <a
              class="sns-facebook sns-link"
              href="https://www.facebook.com/sharer/sharer.php?u={URLEncodedPermalink}"
              onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;"
              target="_blank">
              <i class="fa fa-facebook-official" ></i><span class="sns-txt">Facebook</span></a>
          </li>
          <li>
            <a
              class="sns-twitter sns-link"
              href="http://twitter.com/intent/tweet?text={Title} {URLEncodedPermalink}" target="_blank">
              <i class="fa fa-twitter" aria-hidden="true"></i><span class="sns-txt">Twitter</span></a>
          </li>
          <li>
            <a
              class="sns-googleplus sns-link"
              href="https://plus.google.com/share?url={URLEncodedPermalink}"
              onclick="window.open(this.href, 'GooglePlusWindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;"
              target="_blank">
              <i class="fa fa-google-plus"></i><span class="sns-txt">Google+</span></a>
          </li>
         <li>
            <a
              class="sns-pocket sns-link"
              href="http://getpocket.com/edit?url={URLEncodedPermalink}"
              onclick="window.open(this.href, 'pocket_window', 'width=550, height=350, menubar=no, toolbar=no, scrollbars=yes'); return false;"
              >
              <i class="fa fa-get-pocket" aria-hidden="true"></i><span class="sns-txt">Pocket</span></a>
          </li>
        </ul>
      </div>
      <div class="report-auther cfx">
        <p class="title flL">投稿者</p>
        <div class="auther flL">
          <a class="auther-hover block" href="#">
            <span class="photo"><img src="../images/index/auther.jpeg" alt="人画像"></span>
            <span class="name">Masaki Wakameda</span>
          </a>
        </div>
        <div class="date flR">
          <span class="janru txC"><a class="opa6" href="#">イベント・勉強会</a></span>
          <span class="number txR">2017.04.01</span>
        </div>
      </div>
      <!--ここから記事-->
      <div class="report-detail">
        <p><img src="../images/index/top-image.jpg" alt="記事画像"></p>
        <p>理系学生の就活にはまだまだ解決すべき課題が多いと思います。昼夜研究室にこもりっきりになり、就活に時間を割けないという学生も多く、採用側も理系学生とマッチングする機会が少ないのが現状です。</p>
        <p>そんな問題に立ち向かうサービス「<a class="underline" href="https://labbase.jp/" target="_blank">LabBase</a>」を作っているのが、東京都中央区に本社を置くITスタートアップ企業の株式会社POL。今回はPOLがLabBaseの名古屋支部を立ち上げるにあたり、POL代表取締役の加茂氏と採用担当の松崎氏にインタビューをさせて頂きました。</p>
        <h2>プロフィール</h2>
        <div class="comment">
          <img src="../images/index/top-image.jpg" alt="記事画像">
          <p class="italic">代表取締役の加茂氏（左）と採用担当の松崎氏（右）</p>
        </div>
        <h3>加茂 倫明</h3>
        <p>1994年生まれ。株式会社POL代表取締役。東京大学教養学部２年生。高校時代から起業したいと考え始め、その後ベンチャー数社で長期インターンを経験。2015年9月からは半年間休学してシンガポールに渡り、REAPRAグループのHealthBankにてプロダクトマネージャーとしてオンラインダイエットサービスの立ち上げを行った。その後2016年9月に株式会社POLを創業。</p>
        <h3>松崎 太河</h3>
        <p>1993年生まれ。株式会社POL、学生統括、採用担当。東京大学３年。大学1年生の頃から精力的にインターン活動を行う。大学3年次は休学してベトナムのIT企業でインターン。20人規模の複数のプロジェクトマネージャーを歴任。現在は、全国の学生拠点のマネジメント、組織の拡大に伴う採用活動を担当する。</p>
        <hr>
        <h2>ー今年２月にローンチしたばかりのLabBaseですが、はじめにどのようなサービスか教えて下さい。</h2>
        <div class="comment">
          <img src="../images/index/top-image.jpg" alt="記事画像">
          <p class="italic">既に100社以上の事前登録を集めているLabBase</p>
        </div>
        <p><strong>加茂</strong>：LabBaseとは、理系人材のダイレクトリクルーティングが可能なデータベースです。学生は研究内容をまとめておくだけで企業からスカウトをもらうことができます。また今後は、就活以外の研究室をITで効率化する機能をどんどん追加していく予定です。</p>
        <p>一方で、採用市場では理系人材の需要はどんどん伸びており、この機会ロスをすぐに解消しなくてはならないと思いました。会社を作る直前で、元ガリバーインターナショナル専務取締役、現FiNC社外取締役の吉田も巻き込んで共同創業したという流れです。</p>
        <h2>ー加茂さんの原体験がサービスに反映されているんですね。どこの理系学生も同じような課題を抱えているのでしょうか？</h2>
        <div class="comment">
          <img src="../images/index/top-image.jpg" alt="記事画像">
          <p class="italic">約20名ほどのスタッフが活動するPOL</p>
        </div>
        <p><strong>加茂</strong>：定量的に言うと、リクナビ・マイナビあたりの規模の人材サービスはみんな登録するのですが、企業が主体的に学生にコンタクトできるサービスはどれもユーザーのほとんどが文系で、理系は2割弱ほどです。というのも、理系学生は就活意欲が顕在化していない層が多く、また研究室の外の情報が入っていきにくいためだと考えています。</p>
        <p>母数で見れば文理半々なのに、理系学生が就活市場に出てきづらいといった問題は、もう何年も前から実は言われています。</p>
        <h2>ーなるほど。松崎さんは会社設立後にメンバーとなったとお聞きしましたが、どのような理由でPOLで働いているのですか？</h2>
        <p><strong>松崎</strong>：研究室や研究室の学生が抱える解決を解決することは、ゆくゆくは日本の研究開発の底上げにも繋がっていくという非常に大きな広がりをみることができるので、いち早くその世界が実現できるようにPOLで働いています。また全員が経営者意識をもつなど、組織としても非常に高いところを目指しているので、それに全力で取り組んでいける環境にも魅力を感じています。</p>
        <div class="comment">
          <img src="../images/index/top-image.jpg" alt="記事画像">
          <p class="italic">各大学の担当となるインターン生にフィードバックをする加茂氏</p>
        </div>
        <p><strong>松崎</strong>：今はスタッフ全員合わせて20名ほどで、半分弱はリモートワークをしています。北海道大学、東北大学、東京大学、東京理科大学、京都大学、大阪大学、九州大学…と、全国各地にスタッフが点在しています。ちなみに東海エリアはまだ担当がいないです…！</p>
        <p>採用は、比較的若手ユーザーの多いWantedlyに力を入れて採用をしています。関東以外のエリアだと直接お会いできなかったりもするので、Skypeでの面接も対応しています。あとはリファイラル採用（縁故採用）ですね。僕らは大学生でもあるので、各大学の学生にアプローチをして、共感してくれる仲間を探しています。</p>
        <p>募集を出してまだ1ヶ月でほどですが、20名近くになるまで採用できているので手応えはかなり感じていますね。</p>
        <h2>ー各拠点で働くスタッフはどのような役割を担うのでしょうか？</h2>
        <p><strong>加茂</strong>：スタッフによって役割が違いますが、大きく分けると、1つはユーザー獲得です。LabBaseというサービスがあることを各大学の研究室に伝えてもらい、価値を届けるのがミッションです。</p>
        <p>もう1つがサービスの改善。研究室に行ってユーザーとなる人たちのリアルな課題を吸い上げてサービスに反映する為にヒアリングをしてもらっています。</p>
        <p>それ以外にも、今年の4月に立ち上げる理系学生向けメディアのライターや、新規サービスの企画などもドンドン任せていきたいと思っています。</p>
        <p><strong>松崎</strong>：年齢や場所に関係なくコミット次第で役割を与えていて、今は東北大の1年生にキャンペーン施策や、新規機能の計画を任せていています。そういった気概のあるメンバーが各地で出てくると、LabBaseとしても会社としても成長すると信じています。</p>
        <h2>ー各拠点を立ち上げ中のLabBaseですが、今後どのように事業をスケールさせる予定なのでしょうか？</h2>
        <p><strong>加茂</strong>：今はユーザーとなる理系学生が研究した成果や実績をプロフィールに載せておくと、それを評価した企業からスカウトがくるシンプルな仕組みになっています。僕らはLabBaseを単なる就活サービスにするつもりはなくて、就活以外の研究室の課題も解決していきたいと思っています。</p>
        <p>例えば研究室版のSlackのような機能を実装して研究室内のコミュニケーションを促進させたり、同じような研究をしている学生とコミュニケーションできるSNS機能をつけて研究効率を上げたりするなどです。</p>
        <p>海外だと、研究室向けのクラウドサービスの事例が多くあるのですが、日本ではまだ無いのでその市場を獲得していきたいです。その為に、全国の研究室に根を張ってネットワーク化して、教授も巻き込みながらサービスをグロースさせていきたいです。</p>
        <p>それ以外にも、今年の4月に立ち上げる理系学生向けメディアのライターや、新規サービスの企画などもドンドン任せていきたいと思っています。</p>
        <p><strong>松崎</strong>：年齢や場所に関係なくコミット次第で役割を与えていて、今は東北大の1年生にキャンペーン施策や、新規機能の計画を任せていています。そういった気概のあるメンバーが各地で出てくると、LabBaseとしても会社としても成長すると信じています。</p>
        <h2>ー各拠点を立ち上げ中のLabBaseですが、今後どのように事業をスケールさせる予定なのでしょうか？</h2>
        <p><strong>加茂</strong>：今はユーザーとなる理系学生が研究した成果や実績をプロフィールに載せておくと、それを評価した企業からスカウトがくるシンプルな仕組みになっています。僕らはLabBaseを単なる就活サービスにするつもりはなくて、就活以外の研究室の課題も解決していきたいと思っています。</p>
        <p>例えば研究室版のSlackのような機能を実装して研究室内のコミュニケーションを促進させたり、同じような研究をしている学生とコミュニケーションできるSNS機能をつけて研究効率を上げたりするなどです。</p>
        <p>海外だと、研究室向けのクラウドサービスの事例が多くあるのですが、日本ではまだ無いのでその市場を獲得していきたいです。その為に、全国の研究室に根を張ってネットワーク化して、教授も巻き込みながらサービスをグロースさせていきたいです。</p>
        <h2>ー今回、名古屋支部担当を採用するに当たって、どんな人と一緒に働きたいですか？</h2>
        <p><img src="../images/index/top-image.jpg" alt="記事画像"></p>
        <p><strong>松崎</strong>：僕たちが会社を運営して行く上で大切にしていることが3つあります、１つ目は経営者視点をもつこと、２つ目は最高のチーム作りをすること、３つ目はユーザーへの価値を追求し続けることです。この3点に共感してくれる人と一緒に働きたいなと思っています。</p>
        <p>具体的にいうと、１つ目の経営者視点で言えば、毎週経営MTGをしていて各支部の担当もSkypeでミーティングに参加しています。経営に関することはなるべくオープンにしていて、スタッフ全員が経営陣になったつもりでパフォーマンスをしてもらっています。</p>
        <p>2つ目の最高のチーム作りですが、普通、リモートワークで全国に拠点を持って仕事するチームを作ることは並大抵のことでは無いと思います。そこにあえて挑むことで、全国の研究室にリーチできると確信しているので、離れていても強い連携ができるチームを育てていく意識をしています。</p>
        <p>3つ目のユーザー視点は、ユーザーにとって価値のあるものは何なのかを突き詰めるという意味で、全国の拠点からユーザーから出た意見を出来るだけ吸い上げることを意識して活動してほしいと思っています。</p>
        <p><strong>加茂</strong>：上記の3点を踏まえて、理系学生の問題を解決したい方や、地方から東京のバリバリのスタートアップで働きたい方にはぜひ力を貸して欲しいなと。Skype会議もアジェンダ組んで非常に生産性のある会議をしていますし、取締役の吉田の知見も得ることができます。吉田は10年で売上1000億を記録した日本で唯一の企業であるガリバーの元No.2。POLはメンバーこそ若いものの、普通のスタートアップでは体験できないレベル感でスタッフのみんなには仕事をしてもらっています。</p>
        <p>地方にいながらリモートワークで事業開発に携わることが出来るスタートアップはあまり無いと思うので、ぜひその点を楽しんで頂けると幸いです。皆さんのご応募お待ちしております！</p>
        <hr>
        <h2>編集部まとめ</h2>
        <p>独自の取り組みで全国に拠点を構え、事業をグロースさせる株式会社POL。理系学生の就活を変えるサービスは、名古屋から成長するかもしれません。東海エリアでスタートアップにジョインしてみたい方、レベルの高い環境で経験を積みたい方はぜひ応募してみてはいかがでしょうか。</p>
        <h2>補足(新しく追加したいと思っているもの)</h2>
        <h3>文字色</h3>
        <p class="blue">青色のテキスト</p>
        <p class="skyblue">水色のテキスト</p>
        <p class="red">赤色のテキスト</p>
        <p class="pink">ピンクのテキスト</p>
        <p class="orange">オレンジのテキスト</p>
        <p class="yellow">黄色のテキスト</p>
        <p class="green1">黄緑色のテキスト</p>
        <p class="green2">緑色のテキスト</p>
        <p>他にもおすすめの色あれば教えてください！</p>
        <p>色だけではなく他にもあれば教えてください！</p>
        <h3>名古屋支部の募集はこちらから</h3>
        <!--wantedly募集はここから-->
        <div class="linkcard"><div class="lkc-external-wrap"><a class="no_icon" href="https://www.wantedly.com/projects/90892" target="_blank"><div class="lkc-card"><div class="lkc-info"><span class="lkc-domain"><img class="lkc-favicon" src="http://www.google.com/s2/favicons?domain=www.wantedly.com" alt="" width="16" height="16">&nbsp;www.wantedly.com</span>&nbsp;<span class="lkc-share"> <span class="lkc-sns-fb">8&nbsp;shares</span></span></div><div class="lkc-content"><span class="lkc-thumbnail"><img class="lkc-thumbnail-img" src="http://s.wordpress.com/mshots/v1/https%3A%2F%2Fwww.wantedly.com%2Fprojects%2F90892?w=100" alt=""></span><span class="lkc-title">名大支部長募集！名古屋で誰よりも活躍したい学生マーケター募集！ by 株式会社POL</span><div class="lkc-url"><cite>https://www.wantedly.com/projects/90892</cite></div><div class="lkc-excerpt">LabBaseは「理系学生にとっての当たり前となる」 まだまだスタートをきったばかりですが、100社以上の企業から事前登録をいただく...</div></div><div class="clear"></div></div></a></div></div>
        <!--wantedly募集はここまで-->
        <!--カテゴリーエリア-->
        <div class="report-category cfx">
          <div class="category">
            <p class="title flL">カテゴリー</p>
            <p class="title-link flL"><a class="underline" href="#">インタビュー</a></p>
          </div>
          <div class="tag">
            <p class="title flL">タグ</p>
            <p class="tag-link flL"><a class="underline" href="#">マッチング</a></p>
            <p class="tag-link flL"><a class="underline" href="#">大学</a></p>
            <p class="tag-link flL"><a class="underline" href="#">人材理解</a></p>
          </div>
        </div>
      </div>
      <div class="sns-share">
        <ul class="sns-area">
          <li>
            <a
              href="http://b.hatena.ne.jp/entry/{Permalink}"
              class="hatena-bookmark-button sns-bookmark sns-link"
              data-hatena-bookmark-title="{Title}"
              data-hatena-bookmark-layout="simple"
              title="このエントリーをはてなブックマークに追加">
              <span class="hatena"></span><span class="sns-txt">Bookmark</span></a>
          </li>
          <li>
            <a
              class="sns-facebook sns-link"
              href="https://www.facebook.com/sharer/sharer.php?u={URLEncodedPermalink}"
              onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;"
              target="_blank">
              <i class="fa fa-facebook-official" ></i><span class="sns-txt">Facebook</span></a>
          </li>
          <li>
            <a
              class="sns-twitter sns-link"
              href="http://twitter.com/intent/tweet?text={Title} {URLEncodedPermalink}" target="_blank">
              <i class="fa fa-twitter" aria-hidden="true"></i><span class="sns-txt">Twitter</span></a>
          </li>
          <li>
            <a
              class="sns-googleplus sns-link"
              href="https://plus.google.com/share?url={URLEncodedPermalink}"
              onclick="window.open(this.href, 'GooglePlusWindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;"
              target="_blank">
              <i class="fa fa-google-plus"></i><span class="sns-txt">Google+</span></a>
          </li>
         <li>
            <a
              class="sns-pocket sns-link"
              href="http://getpocket.com/edit?url={URLEncodedPermalink}"
              onclick="window.open(this.href, 'pocket_window', 'width=550, height=350, menubar=no, toolbar=no, scrollbars=yes'); return false;"
              >
              <i class="fa fa-get-pocket" aria-hidden="true"></i><span class="sns-txt">Pocket</span></a>
          </li>
        </ul>
      </div>
      <div class="report-profile cfx">
        <p class="photo flL"><img src="../images/index/auther.jpeg" alt="人画像"></p>
        <div class="text-wrap flL">
          <h2>Masaki Wakameda について</h2>
          <p class="profile">1994年生まれ、栃木県出身。名古屋・タイ・東京のベンチャー3社を経て2015年4月にフリーランス（ライター&編集者）へ。名古屋のスタートアップの情報格差を解消すべく、5月よりNagoya Startup Newsを配信開始。8月に名古屋スタートアップ株式会社を設立し、国内外の複数のWebメディアを運営しています。</p>
          <p class="auther-link"><a class="underline" href="#">Masaki Wakameda の投稿をすべて表示 →</a></p>
          <p class="auther-sns">
            <a class="opa6 twitter" href="https://twitter.com/wakamesun2" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a><a class="opa6 facebook" href="https://www.facebook.com/masaki.wakameda" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
          </p>
        </div>
      </div>
      <div class="page-btn cfx">
        <div class="next-btn flR">
          <a class="opa6" href="#">
            <p class="next-title txC">次のページへ</p>
            <p class="btn-text"> 日本人向け海外旅行支援プラットホーム「トラベロコ」が「てるみくらぶ」利用者を支援へあベロコ」が「てるみくらぶ」利用者を支援へ…</p>
          </a>
        </div>
        <div class="prev-btn flL">
          <a class="opa6" href="#">
            <p class="prev-title txC">前のページへ</p>
            <p class="btn-text">日本人向け海外旅行支援プラットホーム「トラベロコ」が「てるみくらぶ」利用者を支援へ</p>
          </a>
        </div>
      </div>
      <!--ここまで記事-->
    </div>
  </article>
  <?php html_aside(); ?>
</div><!--page-wrap終了-->
<!--ここまででコンテントの内容終わる　-->
<?php html_footer(); ?>
</div>	<!--wrap終了-->
</body>
</html>
