$(function(){
	carousel("#carousel");
	editorHeight();
	notice();
	menu();
	grid();
	news("#newsLeft");
})
//全局
	function editorHeight() {
		divHeight("#notice");
		divHeight("#grid");
		divHeight("#news");
		divHeight("#join");
		scrollMouseMid();
	}
//	设置每块大div的高度等于当前屏幕高
	function divHeight(div) {
		$(div).height($(window).height());
	}
//	鼠标中间滚动整屏效果
	function scrollMouseMid() {

	}
//////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
//	菜单div
	function menu() {
		menuMouse();
	}
	function menuMouse() {
		$("#menu dt").hover(function() {
			$(this).css({"background":"rgb(255,255,255)","color":"rgb(64,64,64)"});
		},function(){
			$(this).css({"background":"","color":""});
		})
	}
	
//////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
//	轮播div(参数：轮播图片的父div)
	function carousel(div) {
		carouselHeight();
		carouselNumber(4,div);
		carouselImg(1,"img1.jpg",div);
		carouselImg(2,"img2.jpg",div);
		carouselImg(3,"img3.jpg",div);
		carouselImg(4,"img4.jpg",div);
		carouselFlash(div);
	}
//	轮播大图片div高度自适应
	function carouselHeight() {
		$("#carousel").height($(window).height()-($("#top").height()+$("#menu").height()));
	}
//	设置轮播图片数量（参数1:数量;参数2：轮播图片所在的父div）
	function carouselNumber(carouselNum,div) {
		for(var i=0;i<carouselNum;i++){
			$(div+">ul").append("<li></li>");
		}
		carouselCss(div);
	}
//	设置轮播图片样式（参数：轮播图片所在的父div）
	function carouselCss(div) {
		$(div+">ul").css({"width":100+"%","height":100+"%"});
		$(div+">ul li").css({"width":100+"%","height":100+"%","display":"none"});
		$(div+">ul li:eq(0)").show();
	}
//	首页大图轮播动画
	function carouselFlash(div){
		var carouselTimes=1;
		var carouselDiv=div;
		function flash(){
			$(carouselDiv+">ul li").eq(carouselTimes).siblings().removeClass("carouselShow");
			$(carouselDiv+">ul li").eq(carouselTimes).addClass("carouselShow");
			$(carouselDiv+">ul li").hide();
			$(".carouselShow").fadeIn();
			carouselTimes++;
			if(carouselTimes==4){
				carouselTimes=0;
			}
		}
		setInterval(flash,4000);
	}
//	设置轮播图片（参数1：轮播图片序号；参数2：图片文件名）
	function carouselImg(imgNum,imgName,div) {
		imgNum=imgNum-1;
		$(div+">ul li").eq(imgNum).css("background-image","url(img/"+imgName+")");
	}
//////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
//	静态海报div
	function notice() {
		noticeBgImg("img4.jpg");
	}
	function noticeBgImg(imgName) {
		$("#notice").css("background-image","url(img/"+imgName+")");
	}
//////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
//	格子div
	function grid() {
		gridNav();
	}
//	格子上下居中
	function gridNav() {
		$(".gridNav").height(($("#grid").height()-$("#grid ul").height())/2);
	}
//////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
//	新闻div
	function news(div) {
		newsNav();
		carouselNumber(4,div);
		carouselImg(1,"img1.jpg",div);
		carouselImg(2,"img2.jpg",div);
		carouselImg(3,"img3.jpg",div);
		carouselImg(4,"img4.jpg",div);
		carouselFlash(div);
		newsMouse();
	}
//	格子上下居中
	function newsNav() {
		$(".newsNav").height(($("#news").height()-$("#news .divCenter").height())/2);
	}
//news右侧鼠标事件
	function newsMouse() {
		$("#newsRight li").hover(function() {
			$(this).css({"background":"rgb(226,90,90)"});
			$(this).children().css({"color":"rgb(255,255,255)"});
		},function() {
			$(this).css({"background":""});
			$(this).children().css({"color":""});
		})
	}

