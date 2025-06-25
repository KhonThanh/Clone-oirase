// JavaScript Document

$(window).load(function () {
	//総シーン数
	scene = 3;
	//シーン切替までの時間
	chgIntvl = 4000;
	//フェード速度
	fdSpd = 1500;
	//イベント写真のフェード速度と遅延時間
	fdSpd2 = 500;
	dly = 100;
	//本文コンテナのCSSを取得しておく
	$box = $('#box_scroll .container');
	boxMgn = $box.css('margin-top');
	boxH = $box.css('height');
	//変数定義
	crtScene = 1;	//現在のシーン
	
	setSize();
	$(window).resize(function(){
	   setSize();
	});
	
	$('#visual li:first').removeClass("active").fadeIn(fdSpd).addClass("active");
	$('#logo').delay(1000).fadeIn(fdSpd);
	$('#box_text1').delay(1000).fadeIn(fdSpd);
	
	rotateSS = function() {
		intvl = setInterval("slideShow()", chgIntvl);
	};
	
	$('#wrapper #button_skip').click(function() {
		slideShow("skip");
	});
	
	rotateSS();
});

function setSize() {
	//背景画像サイズ指定
	var imgW = 1920;
	var imgH = 1280;
	
	var winW = $(window).width();
	var winH = $(window).height();
	var scaleW = winW / imgW;
	var scaleH = winH / imgH;
	var fixScale = Math.max(scaleW, scaleH);
	var setW = imgW * fixScale;
	var setH = imgH * fixScale;
	var moveX = Math.floor((winW - setW) / 2);
	var moveY = Math.floor((winH - setH) / 2);

	$('#visual li img').css({
		'width': setW,
		'height': setH,
		'left' : moveX,
		'top' : moveY
	});
	
	if($box.height() >= winH) {
		$box.css({
			'top': 0,
			'margin-top': 0
		});
	} else {
		$box.css({
			'top': '50%',
			'margin-top': boxMgn
		});
	}
}

function slideShow(prm) {
	//背景の切り替え
	var $active = $('#visual li.active');
	if(prm != "skip") {
		if($active.next().length) {
			var $next = $active.next();
			$active.fadeOut(fdSpd).removeClass("active");
			$next.fadeIn(fdSpd).addClass("active");
		}
	} else {
		$('#wrapper img#eventPhoto').stop();
		$('#box_text1').stop();
		$('#box_text2').stop();
		$('#visual li:last').fadeIn(fdSpd).addClass("active");
	}
	
	//本文・イベント写真の切替
	if(prm == "skip") {
location.href="ja/index.html";
return;
		crtScene = scene-1;
	}
	
	switch(crtScene) {
		case 1:
			$('#box_text1').fadeOut(fdSpd);
			$('#box_text2').fadeIn(fdSpd);
			$('#wrapper img.eventPhoto_01').delay(fdSpd+dly).fadeIn(fdSpd2);
			$('#wrapper img.eventPhoto_02').delay(fdSpd+dly*2).fadeIn(fdSpd2);
			$('#wrapper img.eventPhoto_03').delay(fdSpd+dly*3).fadeIn(fdSpd2);
			$('#wrapper img.eventPhoto_04').delay(fdSpd+dly*4).fadeIn(fdSpd2);
			$('#wrapper img.eventPhoto_05').delay(fdSpd+dly*5).fadeIn(fdSpd2);
			$('#wrapper img.eventPhoto_06').delay(fdSpd+dly*6).fadeIn(fdSpd2);
			$('#wrapper img.eventPhoto_07').delay(fdSpd+dly*7).fadeIn(fdSpd2);
			break;
		case 2:
			clearInterval(intvl);
			$('#wrapper #button_skip').fadeOut(500);
			$('#box_text1').fadeOut(fdSpd);
			$('#box_text2').fadeOut(fdSpd);
			$('#wrapper img#eventPhoto').fadeOut(fdSpd);
			$('#box_text3').fadeIn(fdSpd);
			$('#box_main').fadeIn(fdSpd);
			$('#box_scroll').fadeIn(fdSpd);
location.href="ja/index.html";
return;
			break;
	}
	
	crtScene++;
}
