<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="description" content="太研規劃設計顧問有限公司是專業的景觀規劃設計顧問公司,以Landscape Urbanism 的概念,反思傳統都市設計操作,探討未來都市紋理與都市景觀及其附加購件之演變消長,並試圖找出未來城市景觀發展的契機及可能。 公司總監吳書原畢業於英國倫敦AA建築聯盟學院,以在英國倫敦多年的工作經驗,豐富的國際背景為業主提供新的觀點及動力, 並具有能夠與國際團隊合作、溝通與協調之能力。">
		<meta name="keywords" content="太研,太研規劃, MOTIF, MOTIF LANDSCAPE, 太研規劃設計顧問有限公司, 景觀設計, 景觀, LANDSCAPE, 建築,設計,DESIGN,Iandscape architecture,景觀建築, 空間設計, 規劃, MOTIF DESIGN, 規劃設計, 景觀顧問, 都市設計, URBAN,URBANism,AA,建築學院聯盟 ">
		<meta http-equiv = "X-UA-Compatible" cotent = "IE=edge,chrome=1"/>
		<meta name="google-site-verification" content="CkNRz_UpXanklO9UZYgQabxQhXmWFawY2ofJqdi2_gs" />
		<meta name="HandheldFriendly" content="true" />
		<meta name="author" content="太研規劃設計顧問有限公司">
		<meta name="copyright" CONTENT="太研規劃設計顧問有限公司所有">
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="theme/js/plugin/jquery.bxslider/jquery.bxslider.js"></script>
		<link rel="icon" type="image/png" href="theme/images/metered-manual.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="theme/css/style.css?version=1" />
		<!-- TODO: 連結Bootstrap所需要的js -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<title>│  太研規劃設計顧問有限公司</title>
        <script>
            $(document).ready(function() {

                $(".pic_vis").hover(function() {
                    var pic_vis = $(this).siblings().children(".pic_vis_text2").text();
                    $(".pic_vis_text2:contains(" + pic_vis + ")").parent().css("visibility", "visible");
                }, function() {
                    var pic_vis = $(this).siblings().children(".pic_vis_text2").text();
                    $(".pic_vis_text2:contains(" + pic_vis + ")").parent().css("visibility", "hidden");
				});
				
				$('#gotop').click(function () {
				$('html,body').animate({
					scrollTop: 0
				}, 'slow'); /* 返回到最頂上 */
				return false;
				});
			

				$(window).scroll(function () {
				if ($(this).scrollTop() > 0)
					{
						var nWidth = $(window).width();//取得使用者螢幕寬
						/*$(window).resize(function() {*/
						if(nWidth>1140)
							{
							$('#gotop').fadeIn();
							}
						else 
							{
								$('#gotop').fadeOut();
							}
					}
				else
					{
						$('#gotop').fadeOut();
					}
				});



				
				$(".category").on("click", function(){
					var type = $(this).attr("data-type");
					if (type !== "all"){
						$(".case_list > a").hide()
						$(".case_list").find(`.${type}`).css("display", "inline-block")
					}
					else {
						$(".case_list > a").css("display", "inline-block")
					}
				})
				
            });
        </script>
    </head>
    <body>
			<a href="#" id="gotop">
			</a>
        <div class="wrapper">
            <?php include 'header.php' ?>
            <div class="showcase_page content clearfix inner_wrapper">

				<!-- second menu -->
				<div class="showcase_second_menu clearfix">
					<ul>
						<li><a class="category" href="javascript:;" data-type="all">all</a></li>
						<li><a class="category" href="javascript:;" data-type="residence">residence</a></li>
						<li><a class="category" href="javascript:;" data-type="culture">culture</a></li>
						<li><a class="category" href="javascript:;" data-type="park">park</a></li>
						<li><a class="category" href="javascript:;" data-type="garden">garden</a></li>
						<li><a class="category" href="javascript:;" data-type="education" >education</a></li>
						<li><a class="category" href="javascript:;" data-type="healthcare">healthcare</a></li>
						<li><a class="category" href="javascript:;" data-type="museum">museum</a></li>
						<li><a class="category" href="javascript:;" data-type="headquarter">headquarter</a></li>
						<li><a class="category" href="javascript:;" data-type="social_housing">social housing</a></li>
						<li><a class="category" href="javascript:;" data-type="master_plan">master plan</a></li>
						<li><a class="category" href="javascript:;" data-type="land_art_and_curation">land art & curation</a></li>
						<li><a class="category" href="javascript:;" data-type="london">london</a></li>
					</ul>
				</div>

				<!-- list -->
				<div class="case_list">
					<a href="./casefile/1.php" class="culture museum">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/01_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Brick Yard 33 1/3 (BY33)│陽明山美軍俱樂部</span></div>
						</div>
					</a>
					<a href="./casefile/2.php" class="healthcare culture">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/02_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Andante Cantabile│宏濟心樂章</span></div>
						</div>
					</a>
					<a href="./casefile/3.php" class="culture park">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/03_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">西區門戶│三井廣場</span></div>
						</div>
					</a>
					<a href="./casefile/4.php" class="land_art_and_curation master_plan">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/04_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">2018 TFE.│臺中花博植栽佈展 x 策展</span></div>
						</div>
					</a>
					<a href="./casefile/5.php" class="land_art_and_curation">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/05_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">臺灣的野草地圖 x 島嶼裡的山和海│烏日高鐵</span></div>
						</div>
					</a>
					<a href="./casefile/6.php" class="land_art_and_curation">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/06_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">花博指標系統設計</span></div>
						</div>
					</a>
					<a href="./casefile/60.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/07_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">i-life│僑昱建築</span></div>
						</div>
					</a>
					<a href="./casefile/14.php" class="headquarter">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/08_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Lungyen Group Headquarter</span></div>
						</div>
					</a>
					<a href="./casefile/15.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/09_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Green-Life│僑昱建築</span></div>
						</div>
					</a>
					<a href="./casefile/16.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/10_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Bliss Origin│馥華原美</span></div>
						</div>
					</a>
					<a href="./casefile/17.php" class="garden">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/11_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Zen garden│屋久紀</span></div>
						</div>
					</a>
					<a href="./casefile/61.php" class="garden">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/12_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">璞園春生生</span></div>
						</div>
					</a>
					<a href="./casefile/7.php" class="london">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/13_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">LEICESTER SQUARE REDESIGN</span></div>
						</div>
					</a>
					<a href="./casefile/8.php" class="residence london">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/14_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Melody Lane</span></div>
						</div>
					</a>
					<a href="./casefile/9.php" class="london">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/15_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Aldgate Place Park</span></div>
						</div>
					</a>
					<!-- <a href="./casefile/10.php" class="london">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/Old_Bailey_Open_Space.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Old Bailey Open Space</span></div>
						</div>
					</a>
					<a href="./casefile/11.php" class="london">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/Regent_Place_London.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Regent Place London</span></div>
						</div>
					</a>
					<a href="./casefile/12.php" class="london">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/London_Chelsea_Barrack.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">London Chelsea Barrack</span></div>
						</div>
					</a> -->
					<a href="./casefile/63.php" class="garden">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/16_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">臺南育德路自宅</span></div>
						</div>
					</a>
					<a href="./casefile/20.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/17_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Qingpu Project A│璞園建築 </span></div>
						</div>
					</a>
					<a href="./casefile/21.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/18_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Qingpu Project B│璞園建築</span></div>
						</div>
					</a>
					<a href="./casefile/22.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/19_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Jut Land Project A│忠泰建設大稻埕集合住宅</span></div>
						</div>
					</a>
					<a href="./casefile/23.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/20_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Bo'ai Street Condominium│久泰永和博愛街</span></div>
						</div>
					</a>
					<a href="./casefile/24.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/21_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Xingnan Section Condominium│王泰中和興南段</span></div>
						</div>
					</a>
					<a href="./casefile/25.php" class="residence park">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/22_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Zhonghe Condominium & Large Park</span></div>
						</div>
					</a>
					<a href="./casefile/26.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/23_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Taipei Tower│富邦建設</span></div>
						</div>
					</a>
					<a href="./casefile/27.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/24_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">The Seed of Happiness│國泰禾</span></div>
						</div>
					</a>
					<a href="./casefile/28.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/25_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Tianmu Project│璞園建築</span></div>
						</div>
					</a>
					<a href="./casefile/29.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/26_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Tucheng Project│馥華城安</span></div>
						</div>
					</a>
					<a href="./casefile/30.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/27_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Zhilan Project│芝蘭段</span></div>
						</div>
					</a>
					<a href="./casefile/31.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/28_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">創健建設月亮公園</span></div>
						</div>
					</a>
					<a href="./casefile/32.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/29_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Beian Project│忠泰建設</span></div>
						</div>
					</a>
					<a href="./casefile/33.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/30_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">T-Park Landscape Design│遠揚建設</span></div>
						</div>
					</a>
					<a href="./casefile/34.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/31_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Tamsui Project│麗源建設</span></div>
						</div>
					</a>
					<a href="./casefile/64.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/32_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Shilin Project A│達麗建設 </span></div>
						</div>
					</a>
					<a href="./casefile/36.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/33_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Bali Project│明緯建設</span></div>
						</div>
					</a>
					<a href="./casefile/37.php" class="garden">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/34_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Pause Landis│璞石麗緻溫泉會館</span></div>
						</div>
					</a>
					<a href="./casefile/38.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/35_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Xindian Project│鑫怡建設</span></div>
						</div>
					</a>
					<a href="./casefile/39.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/36_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Xindian Project│國泰建設</span></div>
						</div>
					</a>
					<a href="./casefile/40.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/37_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Dafeng Project│順天建設</span></div>
						</div>
					</a>
					<a href="./casefile/41.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/38_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Xinzhuang Project│長群建設</span></div>
						</div>
					</a>
					<a href="./casefile/19.php" class="residence">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/39_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">T-Park Landscape Design│遠揚建設</span></div>
						</div>
					</a>
					<a href="./casefile/42.php" class="culture">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/40_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Tamkang Church Landscape Design│淡江教會 </span></div>
						</div>
					</a>
					<a href="./casefile/43.php" class="museum">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/41_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Chiayi Fine Arts Museum│嘉義美術館</span></div>
						</div>
					</a>
					<a href="./casefile/44.php" class="culture">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/42_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Shuijiaoshe Cultural Park│水交社文化園區</span></div>
						</div>
					</a>
					<a href="./casefile/45.php" class="culture museum">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/43_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Tsai-liao Fossil Museum│菜寮化石館</span></div>
						</div>
					</a>
					<a href="./casefile/46.php" class="culture">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/44_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">DPD Life Memorial Park│大坪頂生命園區</span></div>
						</div>
					</a>
					<a href="./casefile/47.php" class="culture museum">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/45_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Hengshan Calligraphy Park│橫山書法公園</span></div>
						</div>
					</a>
					<a href="./casefile/48.php" class="culture master_plan">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/46_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Cishan Sugar Refinery│旗山糖廠</span></div>
						</div>
					</a>
					<a href="./casefile/49.php" class="education">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/47_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Taoyuan Xinwu High School│新屋高中</span></div>
						</div>
					</a>
					<a href="./casefile/50.php" class="culture">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/48_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Longtian Cultural Park│隆田考古園區</span></div>
						</div>
					</a>
					<a href="./casefile/51.php" class="park">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/49_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">原民生活地景│大雅汝鎏公園</span></div>
						</div>
					</a>
					<a href="./casefile/52.php" class="museum">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/50_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Taoyuan City Museum of Modern Art│桃園市立美術館</span></div>
						</div>
					</a>
					<a href="./casefile/53.php" class="education">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/51_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">中研院南部院區</span></div>
						</div>
					</a>
					<a href="./casefile/54.php" class="social_housing">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/52_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">San-Xing Sec. Social Housing│三興段公共住宅</span></div>
						</div>
					</a>
					<a href="./casefile/55.php" class="social_housing">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/53_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Xing-long Sec. Social Housing│興隆段公共住宅</span></div>
						</div>
					</a>
					<a href="./casefile/62.php" class="social_housing">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/54_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Tong-Rong Sec. Social Housing│同榮段公共住宅</span></div>
						</div>
					</a>
					<a href="./casefile/57.php" class="master_plan">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/55_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Wufeng District│霧峰園區整體規劃</span></div>
						</div>
					</a>
					<a href="./casefile/58.php" class="park master_plan">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/56_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">烏日第四墓園</span></div>
						</div>
					</a>
					<a href="./casefile/59.php" class="master_plan">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/57_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">臺中太平聯合辦公園</span></div>
						</div>
					</a>
				</div>
			</div>
			<?php include 'footer.php' ?>
        </div>
    </body>

</html>
