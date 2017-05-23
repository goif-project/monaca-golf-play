
	// ナビの表示・非表示
	$(function(){
		$(".batu,nav").click(function(){
			$("nav").fadeOut(500,"easeOutQuart");
		});
		$(".menu-trigger").click(function(){
			$("nav").fadeIn(500,"easeOutQuart");
		});
	});

	// ログイン・新規登録表示
		$(function(){
			$(".inner-wrap,input").click(function(){
				return false;
			});
			$(".batu,.over-wrap").click(function(){
				$(".over-wrap,.inner-wrap").fadeOut(500,"easeOutQuart");
			});
			$(".login,.signup").click(function(){
				$(".over-wrap,.inner-wrap").fadeIn(500,"easeOutQuart");
			});
			$("#login-btn a,.login").click(function(){
				$(".signup-wrap").hide();
				$(".login-wrap").show();
				$("#login-btn").addClass("active");
				$("#signup-btn").removeClass("active");
			});
			$("#signup-btn a,.signup").click(function(){
				$(".login-wrap").hide();
				$(".signup-wrap").show();
				$("#signup-btn").addClass("active");
				$("#login-btn").removeClass("active");
			});

		});
		//トップへのボタンをクリックしたらトップへ行く
		$(function(){
		  var topBtn = $('#topbtn');
		  topBtn.hide();
		  var showFlag = false;
		    $(window).scroll(function () {
		    if ($(this).scrollTop() > 100) {
		        if (showFlag == false) {
		          showFlag = true;
		          topBtn.fadeIn();
		        }
		      } else {
		        if (showFlag) {
		            showFlag = false;
		            topBtn.fadeOut();
		        }
		      }
		    });
		});

	// ページ内スクロール
	$(function(){
		$('a[href^="#"]').click(function(){
	    var a=1500,b=$(this).attr("href"),c=$("#"==b||""==b?"html":b),d=c.offset().top;
	    return $("body,html").animate({scrollTop:d},a,"easeInQuint"),!1
	  });
	});

	//サイドバースクロール時に固定
	$(function(){
		aside_scroll();
		$(window).resize(function() {
			aside_scroll();
		});
	});
	function aside_scroll(){
		var width=window.innerWidth;
		if(width>=640){
			if($('#aside-wrap').hasClass('static-side')){
				$('#aside-wrap').removeClass('static-side');
			}
			//各エリアの高さを取得
			var pageH = $('body').height();
			var windowH = $(window).height();
			var mainH = $('article').outerHeight();
			var sideH = $('#aside-wrap').outerHeight();
			var headerH = $('header').outerHeight();
			var footerH = $('footer').outerHeight();

			//サイドバーの高さ+ヘッダーの高さ
			var viewSide = sideH + headerH ;
			//サイドバーを固定する高さ
			var fixedSide = headerH + sideH - windowH;
			//ページを最後までスクロールした時の高さ
			var scrollBottom = pageH - windowH - footerH;

			//ウィンドウサイズを変更した時にウィンドウの高さを取得し直す
			$(window).resize(function(){
				windowH = $(this).outerHeight();
				windowW = $(this).outerWidth();
			});

			$(window).scroll(function(){
				//スクロールの値を取得
				var scrollTop = $(this).scrollTop();
				/*ウィンドウサイズよりサイドバーの方が長く、
				尚かつサイドバーの最後までスクロールされたら*/
				if(windowH < viewSide && scrollTop > fixedSide ) {
					//サイドバーを固定
					$('#aside-wrap').addClass('fixed-side');
				}else{
					//条件から外れたらサイドバーの位置を初期値にする
					$('#aside-wrap').removeClass('fixed-side');
				}
				//ページの最後までスクロールされたら
				if( scrollTop > scrollBottom){
					//#wrapの下を基準としてサイドバーを絶対配置
					$('#aside-wrap').removeClass('fixed-side');
					$('#aside-wrap').addClass('bottom-side');
				}
				else{
					$('#aside-wrap').removeClass('bottom-side');
				}
				//メインエリアの方がサイドバーより短かったら
				if( mainH < sideH ){
					//サイドバーの位置を初期値にする
					$('#aside-wrap').addClass('static-side');
				}
			});
		}else{
			if($('#aside-wrap').hasClass('fixed-side')){
				$('#aside-wrap').removeClass('fixed-side');
			}
			if($('#aside-wrap').hasClass('bottom-side')){
				$('#aside-wrap').removeClass('bottom-side');
			}
			$('#aside-wrap').addClass('static-side');
		}
	}
