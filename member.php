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
		<META HTTP-EQUIV="pragma" CONTENT="no-cache"> 
		<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache, must-revalidate"> 
		<META HTTP-EQUIV="expires" CONTENT="0">
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="/theme/js/plugin/jquery.bxslider/jquery.bxslider.js"></script>
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
		<script type="text/javascript">
		$(function () {

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
					/*});*/
				}
			else
				{
					$('#gotop').fadeOut();
				}
			})
					$(".right_content #member_list tr td").hover(function () {
								var dataID = $(this).attr("data-id");
								if (dataID) {
									$(".member_detail").hide();
									$("." + dataID).show();
								}
					});

					$(".display_box > tbody > tr > td").hover(function () {
					$(".picbox").hide();
					$(this).find(".picbox").show();
					});
					$(".display_box > tbody > tr > td").mouseleave(function () {
					$(this).find(".picbox").hide();
					});					
		});
	</script>
	</head>
	<style>
	.col-12{
		margin-bottom: 50px;
	}

	</style>
	<body>
			<a href="#" id="gotop">
			</a>
		<div class="wrapper">
			<?php include 'header.php' ?>
			<div class="profile_page clearfix inner_wrapper" id="profile_page">
				<div class="member_second_menu clearfix">
					<ul>
						<li><a href="#profile_page" style="color:#333;">profile</a></li>
						<li><a href="#members">people</a></li>
						<li><a href="#jobs" >employment</a></li>
					</ul>
				</div>
				<div class="rightside">
                    <div class="right_content f_right">
						<img class ="right_content" src="theme/images/concept.jpg" />
                    </div>
                </div>
                <div class="leftside">
						<p class="title">Motif Planning & Design Consultants</p>
						<p class="desc" style="text-align: justify;">太研規劃設計顧問有限公司是專業的景觀規劃設計顧問公司，以Landscape Urbanism 的概念，反思傳統都市的設計操作，探討未來都市紋理與都市景觀及其附加構件之演變消長，並試圖找出未來景觀發展的契機及可能。</p>
						<br>
						<p class="desc" style="text-align: justify;">Motif 主持人 吳書原 畢業於英國AA建築學院，為英國皇家景觀建築師協會副會員(ALI)、目前於文化大學環境設計學院建築系擔任助理教授，在London及Taipei已累積多年跨國之工作資歷，執業尺度包含都市、住宅開放空間及公園之規劃與設計，期許以在倫敦多年之經驗，豐富的國際視野為業主提供新的觀點及動力。</p>
						<br>
                </div>
			</div>
			<div id="members"></div>
			<div class="member_page clearfix inner_wrapper" id="member-table">
				<div class="member_second_menu clearfix">
					<ul>
						<li><a href="#profile_page">profile</a></li>
						<li><a href="#members" style="color:#333;">people</a></li>
						<li><a href="#jobs" >employment</a></li>
					</ul>
				</div>
				<div class="right_content">
					<table class="display_box" id="member_list">
						<tbody>
							<tr>
								<td data-id="director__01">
									<img src="theme/images/member/boss.jpg" width="98" height="98" />
									<div class="picbox" style="position:absolute; top:0; left:0; display:none; z-index:1;">
										<img src="theme/images/member/boss.jpg" />
									</div>
								</td>
								<td></td>
								<td data-id="director__02">
									<img src="theme/images/member/director__02.jpg" width="98" height="98" />
									<div class="picbox" style="position:absolute; top:0; left:0; display:none; z-index:1;">
										<img src="theme/images/member/director__02.jpg" />
									</div>
								</td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td data-id="team__01">
									<img src="theme/images/member/team__01.jpg" width="98" height="98" />
									<div class="picbox" style="position:absolute; top:0; left:0; display:none; z-index:1;">
										<img src="theme/images/member/team__01.jpg" />
									</div>
								</td>
								<td></td>
								<td data-id="team__02">
									<img src="theme/images/member/team__02.jpg" width="98" height="98" />
									<div class="picbox" style="position:absolute; top:0; left:0; display:none; z-index:1;">
										<img src="theme/images/member/team__02.jpg" />
									</div>
								</td>
							</tr>
							<tr>
								<td data-id="team__03">
									<img src="theme/images/member/team__03.jpg" width="98" height="98" />
									<div class="picbox" style="position:absolute; top:0; left:0; display:none; z-index:1;">
										<img src="theme/images/member/team__03.jpg" />
									</div>
								</td>
								<td></td>
								<td data-id="team__04">
									<img src="theme/images/member/team__04.jpg" width="98" height="98" />
									<div class="picbox" style="position:absolute; top:0; left:0; display:none; z-index:1;">
										<img src="theme/images/member/team__04.jpg" />
									</div>
								</td>
								<td data-id="team__05">
									<img src="theme/images/member/team__05.jpg" width="98" height="98" />
									<div class="picbox" style="position:absolute; top:0; left:0; display:none; z-index:1;">
										<img src="theme/images/member/team__05.jpg" />
									</div>
								</td>
							</tr>
							<tr>
								<td></td>
								<td data-id="team__06">
									<img src="theme/images/member/team__06.jpg" width="98" height="98" />
									<div class="picbox" style="position:absolute; top:0; left:0; display:none; z-index:1;">
										<img src="theme/images/member/team__06.jpg" />
									</div>
								</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td data-id="team__07">
									<img src="theme/images/member/team__07.jpg" width="98" height="98" />
									<div class="picbox" style="position:absolute; top:0; left:0; display:none; z-index:1;">
										<img src="theme/images/member/team__07.jpg" />
									</div>
								</td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="left_content">
					<div class="member_detail director__01">
						<p class="name">吳書原 Shu Yuan Wu</p>
						<p class="desc">東海大學 景觀學士</p>
						<p class="desc">英國AA建築聯盟學院 景觀碩士</p>
						<p class="desc">英國建築學會 會員 AA</p>
						<p class="desc">英國皇家景觀建築師協會 副會員 ALI</p>
						<p class="desc">中國註冊一級景觀技師</p>
						<p class="desc">IFLA 國際景觀建築師學會 會員</p>
						<p class="desc">LIUK 英國皇家景觀建築師學會 副會員</p>
						<p class="title">專職實務經歷</p>
						<p class="desc">Burns + Nice London ,UK 都市設計師</p>
						<p class="desc">EDCO Design London ,UK 景觀建築師</p>
						<p class="desc">太研規劃設計顧問有限公司 主持人 / 設計總監 2012迄今</p>
						<p class="desc">2018 臺中世界花卉博覽會 策展人</p>
						<br />
						<p class="desc">1998 &nbsp;1998 BSc THU Landscape Architecture</p>
						<p class="desc">2004 &nbsp;2004 MA AA Landscape Urbanism</p>
						<p class="desc">2005 &nbsp;2005 Member of Architecture Association ,UK</p>
						<p class="desc">2006 &nbsp;2006 Associate Member of Landscape Institute ,UK</p>
						<p class="desc">2010 &nbsp;2010 Registered Landscape Architect (PRC) , CN</p>
						<br />
						<p class="desc">Practical Experience</p>
						<p class="desc">Burns + Nice Landscape Architect London ,UK</p>
						<p class="desc">EDCO Design London ,UK</p>
						<p class="desc">MOTIF Director 2012 until now</p>
					</div>
					<div class="member_detail director__02" style="display:none;">
						<p class="name">森田愛 Morita Ai</p>
						<p class="desc">日本籍的室內設計師，留學於德國與英國。畢業于日本學習院大學Gakushuin University 英米文學科。精通德文、英文、日文及中文，擅長溝通協調及業務整合。</p>
					</div>
					<div class="member_detail team__01" style="display:none;">
						<p class="name">耿寧 Slow Geng</p>
						<p class="desc">畢業於中原大學景觀學系，現為 Motif 專案經理，在景觀業界有多年實務經驗，擅長都市規劃設計、都市設計、電腦繪圖。</p>
					</div>
					<div class="member_detail team__02" style="display:none;">
						<p class="name">林弘雯 Maggie Lin</p>
						<p class="desc">畢業於文化大學景觀學系，現為 Motif 設計總監，之前為老圃造園工程資深專案經理及沐庭設計工作室主持人，於業界有20年以上專業資歷。</p>
					</div>
					<div class="member_detail team__03" style="display:none;">
						<p class="name">陳怡潔 Eleanor Chen</p>
						<p class="desc">畢業於中原大學景觀學系，現為 Motif 專案經理，在景觀業界有多年實務經驗，擅長都市規劃設計、3D電腦運算、電腦繪圖。</p>
					</div>
					<div class="member_detail team__04" style="display:none;">
						<p class="name">鄭凱元 Kai Yuan, Cheng</p>
						<p class="desc">畢業於中原大學景觀學系， 現為 Motif 設計師，擅長景觀設計、都市規劃設計、空間模擬、電腦繪圖。</p>
					</div>
					<div class="member_detail team__05" style="display:none;">
						<p class="name">吳怡諳 Ann Wu</p>
						<p class="desc">中華大學景觀建築學系畢業，現為 Motif 工務經理，有豐富的專業經歷，擅長施工圖說、預算編列等實務操作。</p>
					</div>
					<div class="member_detail team__06" style="display:none;">
						<p class="name">王珮軒 Labi Wang</p>
						<p class="desc">畢業於中原大學景觀學系，現為 Motif 專案經理，在景觀業界有多年實務經驗，擅長景觀設計、電腦繪圖、業務整合。</p>
					</div>
					<div class="member_detail team__07" style="display:none;">
						<p class="name">何品儀 Pin Ho</p>
						<p class="desc">畢業於中原大學景觀學系，現為 Motif 專案經理，在景觀業界有多年實務經驗，擅長都市規劃設計、3D電腦運算、電腦繪圖。</p>
					</div>
				</div>
			</div>

			<div class="row inner_wrapper" id="member-list">
            <!-- 電腦版每塊佔3/12, 平板電腦版每塊佔6/12, 手機版每塊佔12/12 -->
				<div class="col-12">
					<div class="member_second_menu clearfix">
						<ul>
							<li><a href="#profile_page">profile</a></li>
							<li><a href="#members" style="color:#333;">people</a></li>
							<li><a href="#jobs" >employment</a></li>
						</ul>
					</div>
					<div style="margin-bottom:40px;">
						<img class="card-img-top" src="theme/images/member/director__01.jpg" alt="">
						<p class="name">吳書原 Shu Yuan Wu</p>
						<p class="desc">1998 &nbsp;東海大學 景觀學士</p>
						<p class="desc">2004 &nbsp;英國AA建築聯盟學院 景觀碩士</p>
						<p class="desc">2005 &nbsp;英國建築學會 會員 AA</p>
						<p class="desc">2006 &nbsp;英國皇家景觀建築師協會 副會員 ALI</p>
						<p class="desc">2010 &nbsp;中國註冊一級景觀技師</p>
						<p class="title">專職實務經歷</p>
						<p class="desc">Burns + Nice London ,UK 都市設計師</p>
						<p class="desc">EDCO Design London ,UK 景觀建築師</p>
						<p class="desc">太研規劃設計顧問有限公司 主持人 / 設計總監 2012迄今</p>
						<br />
						<p class="desc">1998 &nbsp;1998 BSc THU Landscape Architecture</p>
						<p class="desc">2004 &nbsp;2004 MA AA Landscape Urbanism</p>
						<p class="desc">2005 &nbsp;2005 Member of Architecture Association ,UK</p>
						<p class="desc">2006 &nbsp;2006 Associate Member of Landscape Institute ,UK</p>
						<p class="desc">2010 &nbsp;2010 Registered Landscape Architect (PRC) , CN</p>
						<br />
						<p class="desc">Practical Experience</p>
						<p class="desc">Burns + Nice Landscape Architect London ,UK</p>
						<p class="desc">EDCO Design London ,UK</p>
						<p class="desc">MOTIF Director 2012 until now</p>
					</div>
					<ul>
						<li>
							<ol class="tr">
								<li><img src="theme/images/member/director__01.jpg" width="100%" height="100%" /></li>
								<li></li>
								<li><img src="theme/images/member/director__02.jpg" width="100%" height="100%" /></li>
								<li></li>
							</ol>
							<ol class="tr">
								<li></li>
								<li><img src="theme/images/member/team__01.jpg" width="100%" height="100%" /></li>
								<li></li>
								<li><img src="theme/images/member/team__02.jpg" width="100%" height="100%" /></li>
							</ol>
							<ol class="tr">
								<li><img src="theme/images/member/team__03.jpg" width="100%" height="100%" /></li>
								<li></li>
								<li><img src="theme/images/member/team__04.jpg" width="100%" height="100%" /></li>
								<li><img src="theme/images/member/team__05.jpg" width="100%" height="100%" /></li>
							</ol>
							<ol class="tr">
								<li></li>
								<li><img src="theme/images/member/team__06.jpg" width="100%" height="100%" /></li>
								<li></li>
								<li></li>
							</ol>
							<ol class="tr">
								<li><img src="theme/images/member/team__07.jpg" width="100%" height="100%" /></li>
								<li></li>
								<li><img src="theme/images/member/team__08.jpg" width="100%" height="100%" /></li>
								<li><img src="theme/images/member/team__09.jpg" width="100%" height="100%" /></li>
							</ol>
						</li>
					</ul>
				</div>
			</div>
				
			<div class="member_page clearfix inner_wrapper" id="jobs">
				<div class="member_second_menu clearfix">
					<ul>
						<li><a href="#profile_page">profile</a></li>
						<li><a href="#members">people</a></li>
						<li><a href="#jobs" style="color:#333;">employment</a></li>
					</ul>
				</div>
				<div class="right_content">
					<img class="right_content"src="theme/images/employment.jpg"/>
				</div>
				<div class="left_content">
					<p class="title">Jobs</p>
					<p class="desc" style="text-align: justify;">If you are interested in working with us , please e-mail your CV and portfolio, saved as a PDF or via URL</p>
					<br>
					<p class="title">Internships</p>
					<p class="desc" style="text-align: justify;">We are always looking for talented students of landscape architecture, urban planning, architecture and to join our
						team.
					</p>
					<p style="text-align: justify;">We accept 1 - 2 interns during the summer semester, that run from May through September. We do not accept interns for
						semesters less than 1 months. Applications including a CV and portfolio, saved as a PDF or via URL</p>
				</div>
			</div>
			<?php include 'footer.php' ?>
		</div>

	</body>
</html>
