
        <header>
            <div class="header-container">
                <div class="header-logo">
                    <a class="motif_logo_img" href="/index.php" style="display:none;">
                        <img src="/theme/images/logo001.jpg" width='140' height='30' />
                    </a>
                    <a class="motif_logo_img" href="/index.php">
                        <img src="/theme/images/logo02.jpg" width='140' height='30' />
                    </a>
                </div>
                <div class="header-nav">
                    <ul class="header_menu">
                        <li class="header_menu_li">
                            <a href="/member.php" class="header_menu_item" data-name="ABOUT" data-zhname="關於太研">ABOUT</a>
                        </li>
                        <li class="header_menu_li">
                            <a href="/showcase.php" class="header_menu_item" data-name="PROJECTS" data-zhname="案例實績">PROJECTS</a>
                        </li>
                        <li class="header_menu_li">
                            <a href="/Publications.php" class="header_menu_item" data-name="PUBLICATION" data-zhname="作品出版">PUBLICATION</a>
                        </li>
                        <li class="header_menu_li">
                            <a href="/awards.php" class="header_menu_item" data-name="AWARDS" data-zhname="獲獎資訊">AWARDS</a>
                        </li>
                        <li class="header_menu_li">
                            <a href="/contact.php" class="header_menu_item" data-name="CONTACT" data-zhname="聯絡我們">CONTACT</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <i id="menu-button" class="fas fa-bars fa-3x"></i>
                </div>
            </div>
            <p>太研規劃設計顧問有限公司 Motif Planning & Design Consultants</p>
        </header>
        <div class="mobile-nav-wrapper">
        <div class="header-container">
                <div class="header-logo">
                    <a class="motif_logo_img" href="/index.php" style="display:none;">
                        <img src="/theme/images/logo001.jpg" width='140' height='30' />
                    </a>
                    <a class="motif_logo_img" href="index.php">
                        <img src="/theme/images/logo02.jpg" width='140' height='30' />
                    </a>
                </div>
                <div class="header-nav">
                </div>
                <div>
                    <i id="menu-closebutton" class="fas fa-times fa-3x"></i>
                </div>
            </div>
                <ul>
                    <li>
                        <a href="/member.php">ABOUT</a>
                    </li>
                    <li>
                        <a href="/showcase.php">PROJECTS</a>
                    </li>
                    <li>
                        <a href="/Publications.php">PUBLICATION</a>
                    </li>
                    <li>
                        <a href="/awards.php">AWARDS</a>
                    </li>
                    <li>
                        <a href="/contact.php">CONTACT</a>
                    </li>
                </ul>
        </div>

<script>
    $(window).resize(function () {
        var nWidth = window.innerWidth;//取得使用者螢幕寬
        if (nWidth > 1140) {
            $('#menu-button').css("display", "none");
        }
        else if (nWidth <= 1140) {
            $('#menu-button').css("display", "block");
        }
    });
    $(function () {
        var nWidth = window.innerWidth;//取得使用者螢幕寬
        if (nWidth > 1140) {
            $('#menu-button').css("display", "none");
        }
        else if (nWidth <= 1140) {
            $('#menu-button').css("display", "block");
        }
        $(".header_menu_item").mouseenter(function () {

            var text = $(this).attr("data-zhname");

            var liwidth = $(this).width();
            var lipaddingright = parseInt($(this).parent("li").css("paddingRight"));
            var lipaddingleft = parseInt($(this).parent("li").css("paddingLeft"));
            var all = liwidth + lipaddingright + lipaddingleft;
            $(this).width(75);
            $(this).parent("li").css("paddingLeft", all - (75 + lipaddingright));
            $(this).html(text);
        }).mouseleave(function () {
            var text = $(this).attr("data-name");
            $(this).html(text);
            $(this).width("auto");
            $(this).parent("li").css("paddingLeft", "25px");
        });


        $(".motif_logo_img").mouseenter(function () {
            $(".motif_logo_img").eq(0).css("display", "inline-block");
            $(".motif_logo_img").eq(1).css("display", "none");
        }).mouseleave(function () {
            $(".motif_logo_img").eq(0).css("display", "none");
            $(".motif_logo_img").eq(1).css("display", "inline-block");
        });

        $("#menu-button").click(function () {
            $(".mobile-nav-wrapper").css("display", "block");
            $("#menu-closebutton").css("display", "block");
            $("#menu-button").css("display", "none");
        });
        $("#menu-closebutton").click(function () {
            $(".mobile-nav-wrapper").css("display", "none");
            $("#menu-closebutton").css("display", "none");
            $("#menu-button").css("display", "block");
        });
    });
</script>
