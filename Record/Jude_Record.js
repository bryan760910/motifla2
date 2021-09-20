$(document).ready(function(){   
    
    // 只變換main中的畫面，header&footer不動
    $("#menu li a:eq(0)").on("click",function(){
        $("#bgImg main:eq(1)").addClass("display_none");
        $("#bgImg main:eq(2)").addClass("display_none");
        $("#bgImg main:eq(0)").removeClass("display_none");
        $("#menu li a").css("color","white");
        $(this).css("color","darkgray");
        $('#bgImg').removeClass('productsBG')
        $('#bgImg').removeClass('autobiographyBG')
        $('#bgImg').addClass('aboutMeBG')
    });
    $("#menu li a:eq(1)").on("click",function(){
        $("#bgImg main:eq(0)").addClass("display_none");
        $("#bgImg main:eq(2)").addClass("display_none");
        $("#bgImg main:eq(1)").removeClass("display_none");
        $("#menu li a").css("color","white");
        $(this).css("color","darkgray");
        $('#bgImg').removeClass('aboutMeBG')
        $('#bgImg').removeClass('autobiographyBG')
        $('#bgImg').addClass('productsBG')
    });
    $("#menu li a:eq(2)").on("click",function(){
        $("#bgImg main:eq(0)").addClass("display_none");
        $("#bgImg main:eq(1)").addClass("display_none");
        $("#bgImg main:eq(2)").removeClass("display_none");
        $("#menu li a").css("color","white");
        $(this).css("color","darkgray");
        $('#bgImg').removeClass('productsBG')
        $('#bgImg').removeClass('aboutMeBG')
        $('#bgImg').addClass('autobiographyBG')
    });    
    
    //現在時間，即時更新。
    function time(){
        var now= new Date();
		var nowY= now.getFullYear();
		var nowM= now.getMonth()+1;
		var nowD= now.getDate();
		var nowH= now.getHours();
		var nowI= now.getMinutes();
		var nowS= now.getSeconds();
		var nowW= now.getDay();
		switch(nowW){
			case 0:
				nowW = "SUN";
				break;
			case 1:
				nowW = "MON";
				break;
			case 2:
				nowW = "TUE";
				break;
			case 3:
				nowW = "WED";
				break;	
			case 4:
				nowW = "THU";
				break;
			case 5:
				nowW = "FRI";
				break;	
			case 6:
				nowW = "SAT";
				break;				
		}
        if(nowS<10){
            nowS = "0" + nowS;
        }
        if(nowI<10){
            nowI = "0" + nowI;
        }
		var today= nowY + "年" + nowM + "月" + nowD + "日" + " "  + nowW + "  " + nowH + ":" + nowI + ":" + nowS;
		$("#showTime").html(today); 
    }
    time();
    setInterval(time,1000);
   
    
    // fancybox視窗自定義
    $('.fancybox').fancybox();

    
    // 預設圖片淡出淡入的動畫時間
	var fadeSpeed = 600;
	// 把每一個 .slideshow 取出來做處理
	$('.slideshow').each(function(){
		// 先取得相關的 ul , li
		// 並產生控制器
		var $this = $(this), 
			$ul = $this.find('ul'), 
			$li = $ul.find('li'), 
			$controller = $('<div class="slideshowController"><a href="#" class="before glyphicon glyphicon-chevron-left"></a><a href="#" class="next glyphicon glyphicon-chevron-right"></a></div>').css('opacity', 0), 
			len = $li.length, index = 0;
		// 先把第一張圖片之外的都透明度設成 0
		$li.eq(index).css('z-index', 2).siblings().css('opacity', 0);
 
		// 加入控制器並當滑鼠移入時顯示; 滑鼠移出時隱藏
		$this.append($controller).hover(function(){
            // 滑鼠移入時
			$controller.stop().animate({
				opacity: 1
			});
		}, function(){
            // 滑鼠移出時
			$controller.stop().animate({
				opacity: 0
			});
		});
 
		// 當點擊到控制器上面的按鈕時
		$controller.delegate('a', 'click', function(){
			// 先取得按鈕的 class
			var $a = $(this), 
				className = $a.attr('class');
			// 依按鈕功能來決定上下張圖片索引
            if(className == 'next glyphicon glyphicon-chevron-right'){
                index = (index + 1) % len;
                show();
            }
            else if(className == 'before glyphicon glyphicon-chevron-left'){
                index = (index - 1 + 4) % len;
                show();
            }
			// 切換圖片
			return false;
		});
 
		// 淡入淡出圖片
		function show() {
			$li.eq(index).animate({
				opacity: 1, 
				zIndex: 2
			}, fadeSpeed).siblings(':visible').animate({
				opacity: 0, 
				zIndex: 1
			}, fadeSpeed);
		}
	});
    
    
}); 