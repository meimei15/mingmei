/*轮播的标签页切换*/
$('.choice').on('click','li',function(){
 		var G_slider=document.querySelector('#G_slider');
		var H_slider=document.querySelector('#H_slider');
		if($(this).html()==='官方'){
			G_slider.style.display = 'block';
			H_slider.style.display = 'none';
			//console.log(this);
			this.className="fade";
			//var l1=document.querySelector('.choice>li:last-child');
				$('.choice>li:last-child').removeClass('fade').addClass('in');
			
		}else{
			 G_slider.style.display = 'none';
			 H_slider.style.display = 'block';
			 this.className="fade";
			//console.log(this);
			$('.choice>li:first-child').removeClass('fade').addClass('in');
		}

});



/*点击p模拟鼠标点击a标签事件实现跳转*/
$('.side_top>ul').on('click','p',function(){
	//console.log(this);
	this.previousElementSibling.click();
});
/**此方法只能实现一个*/
//$('#nav>div.side_top>ul li p').click(function(){
//	document.getElementById("alink").click();
//})
/**功能点1：页面加载完后，异步请求**/
$(function(){
	$('#main>ul.list').load('data/1.php');
});
$(function(){
	$('#footer_box>div.right_side').load('data/vap.php');
});
//svg绘图
(function line1(){
var ggg=document.getElementById('ggg');
var html='';
var val1=145+(95*Math.cos(0.1*Math.PI));
var val2=145-(95*Math.sin(0.1*Math.PI));
var val3=145-(95*Math.cos(0.1*Math.PI));
var val4=145-(95*Math.sin(0.1*Math.PI));
var val5=145-(95*Math.sin(0.2*Math.PI));
var val6=145+(95*Math.cos(0.2*Math.PI));
var val7=145+(95*Math.cos(0.3*Math.PI));
var val8=145+(95*Math.sin(0.3*Math.PI));
html += `
		<line x1="145" y1="145" x2="145" y2="50"></line>
		<line x1="145" y1="145" x2="${val1}" y2="${val2}"></line>
		<line x1="145" y1="145" x2="${val3}" y2="${val4}"></line>
		<line x1="145" y1="145" x2="${val5}" y2="${val6}"></line>
		<line x1="145" y1="145" x2="${val7}" y2="${val8}"></line>
		`;
$('#ggg').html(html);
})();

(function circle1(){
	var html='';
	var val1=145+(125*Math.cos(0.1*Math.PI));
	var val2=145-(125*Math.sin(0.1*Math.PI));
	var val3=145-(125*Math.cos(0.1*Math.PI));
	var val4=145-(125*Math.sin(0.1*Math.PI));
	var val5=145-(125*Math.sin(0.2*Math.PI));
	var val6=145+(125*Math.cos(0.2*Math.PI));
	var val7=145+(125*Math.cos(0.3*Math.PI));
	var val8=145+(125*Math.sin(0.3*Math.PI));
	html= `
		<circle r="20"cx="145"cy="20"fill="#aaa"></circle>
		<circle r="20"cx="${val1}"cy="${val2}"fill="#aaa"></circle>
		<circle r="20"cx="${val3}"cy="${val4}"fill="#aaa"></circle>
		<circle r="20"cx="${val5}"cy="${val6}"fill="#aaa"></circle>
		<circle r="20"cx="${val7}"cy="${val8}"fill="#aaa"></circle>
		`;
	$('#g1').html(html);
})();
function zhexian(a){
	//var a=[70,50,50,50,50];
	var html='';
	var Xa=145+(a[0]*Math.cos(0.5*Math.PI));
	var Ya=145-(a[0]*Math.sin(0.5*Math.PI));

	var Xb=145+(a[1]*Math.cos(0.1*Math.PI));
	var Yb=145-(a[1]*Math.sin(0.1*Math.PI));

	var Xc=145+(a[2]*Math.cos(0.3*Math.PI));
	var Yc=145+(a[2]*Math.sin(0.3*Math.PI));

	var Xd=145-(a[3]*Math.sin(0.2*Math.PI));
	var Yd=145+(a[3]*Math.cos(0.2*Math.PI));

	var Xe=145-(a[4]*Math.cos(0.1*Math.PI));
	var Ye=145-(a[4]*Math.sin(0.1*Math.PI));
	html= `
	<polyline points="${Xa},${Ya}  ${Xb},${Yb}  ${Xc},${Yc} ${Xd},${Yd} ${Xe},${Ye} ${Xa},${Ya}"
	        stroke="#EB6F01"fill="transparent">
	</polyline>
		`;
	$('#g0').html(html);
};

//背景图片的切换
$('#coopList').on('click','li',function(){
	//console.log(this);
	var html=$('#first_1').html();
	if(this.innerHTML===html){
		$('#first_1').removeClass('choose-2').addClass('choose-1');
		console.log(this.id);
	}else if(this.innerHTML!==html) {
		$('#first_1').removeClass('choose-1').addClass('choose-2');
		//console.log(this);
	}
});
//标签页切换
function toggle(li){
	document.querySelector("#box>div[class*='show']").className="hide";
	document.querySelector("#box>div:nth-child("+li.id[3]+")").className="show hide";
}




//图片hover切换
$("#img").hover(function(){
	$(this).attr('src','AGE_files/bg-image/jianling.jpg');
	$(this).addClass('margin');
},function(){
	$(this).attr('src','imges_files/heinihao.jpg');
	$(this).removeClass('margin');
});


//文字，图标hover切换
$("#hover").hover(function(){
	$(this).css('color','#f0562d');
	$(this).children().css('backgroundPosition','-170px -134px');
	$('#game').css('display','block');
},function(){
	var   x=window.event.clientX;
	var   y=window.event.clientY;
	var game = document.getElementById("game");
	//console.log(x,y);
	var gamex1 = game.offsetLeft;
	var gamey1 = game.offsetTop;
	var gamex2 = game.offsetLeft + game.offsetWidth;
	var gamey2 = game.offsetTop + game.offsetHeight;
	//console.log(gamex1,gamex2,gamey1,gamey2);
	if( x < gamex1 || x > gamex2 || y < gamey1 || y > gamey2){
		//如果没进入#game，则执行。。
		$("#hover").css('color','#000');
		$("#hover").children().css('backgroundPosition','-150px -134px');
		$('#game').css('display','none');
	}else{
		$("#game").mouseleave(function(){
			$("#hover").css('color','#000');
			$("#hover").children().css('backgroundPosition','-150px -134px');
			$('#game').css('display','none');
		});
	}
});



$(function(){
	$('#game').load('config/game_rank.php');
});
$('#coopList').on('click','li',function(e){
	//console.log(this);
	e.preventDefault();
	$('[class=liang]').removeClass('liang');
	$(this).addClass('liang');
	if($(this).html().search(/s1/)!==-1){
		//console.log($(this).html().search(/s1/));
		var a=[70,50,50,80,50];
		zhexian(a);
	}else if($(this).html().search(/s2/)!==-1) {
		var a = [60, 30, 80, 40, 50];
		zhexian(a);
	}else if($(this).html().search(/s3/)!==-1) {
		var a = [48, 30, 55, 40, 71];
		zhexian(a);
	}else if($(this).html().search(/s4/)!==-1) {
		var a = [59, 44, 40, 51, 65];
		zhexian(a);
	}else if($(this).html().search(/s5/)!==-1) {
		var a = [50, 50, 50, 50, 50];
		zhexian(a);
	}else if($(this).html().search(/s6/)!==-1) {
		var a = [70, 35, 41, 70, 30];
		zhexian(a);
	}else if($(this).html().search(/s7/)!==-1) {
		var a = [70, 50, 80, 50, 60];
		zhexian(a);
	}else if($(this).html().search(/s8/)!==-1) {
		var a = [40, 70, 50, 56, 47];
		zhexian(a);
	}else if($(this).html().search(/s9/)!==-1) {
		var a = [70, 50, 50, 41, 50];
		zhexian(a);
	}else if($(this).html().search(/s0/)!==-1) {
		//console.log($(this).html().search(/s0/));
		var a = [63, 30, 69, 45, 64];
		zhexian(a);
	}
	//console.log($(this).html().search(/s11/));
	console.log($(this).html().replace(/(^\s*)|(\s*$)/g,'')[0]);
	console.log($(this).html()[100]);
});
$('#coopList').on('mouseleave','li',function(){
	timer=setTimeout(function(){
		$('#first_1').removeClass('choose-2').addClass('choose-1');
		$('[class=liang]').removeClass('liang');
		$(this).addClass('liang');
		var a=[70,50,50,80,50];
		zhexian(a);
		clearTimeout(timer);
	},3000);
});


var uname = sessionStorage['LoginName'];
if(uname){
	$('#welcome').html(uname+' Welcom come to SGSJ！');
}