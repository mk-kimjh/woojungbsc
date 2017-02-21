<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>우정비에스씨</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="/woojung2/assets/css/default.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:200,300,400" rel="stylesheet">
</head>
<body>
    <header id="header" class="scene">
        <nav id="nav">
            <div class="container">
                <p><img src="/woojung2/assets/images/img_nav.jpg"></p>
            </div>
        </nav>
        <div class="container">
            <div class="cloud"></div>
            <div class="building"></div>
            <div class="cover"></div>
            <p class="gnb"><img src="/woojung2/assets/images/img_gnb.png"></p>
            <div class="slogan">
                <div class="text">
                    <h2>Protect Your<br>Research<br>Investment</h2>
                    <hr>
                    <p>
                        국내 최고의 바이오 인프라 솔루션 기업 우정비에스씨<br>
                        <!-- span>지금까지 걸어온 30년... 이제부터가 시작입니다.</span -->
                        <span></span>
                    </p>
                </div>
                <div class="bar">
                    <span class="left"></span>
                    <span class="dot"></span>
                    <span class="right"></span>
                </div>
            </div>
        </div>
    </header>
    <main id="content">
        <div id="business" class="scene">
            <p><img src="/woojung2/assets/images/img_business_head.png"></p>
            <ul>
                <li><img src="/woojung2/assets/images/img_business_item_1_on.gif" alt=""></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div id="rnd" class="scene">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 figure">
                        <p class="prev"><img src="/woojung2/assets/images/btn_rnd_prev.png"</p>
                    </div>
                    <div class="col-lg-4 details">
                        <p class="text"><img src="/woojung2/assets/images/txt_rnd.png"></p>
                        <p class="next"><img src="/woojung2/assets/images/btn_rnd_next.png"</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="news" class="scene">
            <div class="container">
                <p><img src="/woojung2/assets/images/img_news.jpg"></p>
            </div>
        </div>
        <div id="only" class="scene">
            <div class="container">
                <p><img src="/woojung2/assets/images/txt_only.png"></p>
            </div>
        </div>
        <div id="comm" class="scene">
            <div class="container">
                <p><img src="/woojung2/assets/images/txt_comm.jpg"></p>
            </div>
        </div>
    </main>
    <footer id="footer">
        <nav id="foot-nav">
            <div class="container">
                <p><img src="/woojung2/assets/images/txt_foot_nav.jpg"></p>
            </div>
        </nav>
        <div id="copy">
            <div class="container">
                <p><img src="/woojung2/assets/images/txt_copy.jpg"></p>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="/woojung2/assets/jquery.mousewheel.min.js"></script>
    <script src="/woojung2/assets/jquery.easing.1.3.js"></script>
    <script src="/woojung2/assets/jquery.typed.js"></script>
    <script>
        (function($) {
            var sceneIndex = 0;
            var $scene = $('.scene');
            var isScrolling = false;
            
            function moveScene() {
                isScrolling = true;
                $('html, body').stop().animate({
                    scrollTop: $scene.eq(sceneIndex).offset().top
                }, 1000, 'easeOutQuint', function() {
                    $scene.removeClass('on');
                    $scene.eq(sceneIndex).addClass('on');
                    isScrolling = false;
                });
            }
            
            $(document).on('mousewheel', function(event) {
                if (event.deltaY == 1) {
                    if (isScrolling == false && sceneIndex > 0) {
                        sceneIndex--;
                        moveScene();
                    }
                }
                if (event.deltaY == -1) {
                    if (isScrolling == false && sceneIndex < $scene.length - 1) {
                        sceneIndex++;
                        moveScene();
                    }
                }
                event.preventDefault();
            });
            
            $(window).on('load', function() {
                $('#header .slogan').addClass('on');
                $('#header .cloud').addClass('move');
                window.setTimeout(function() {
                    $("#header .slogan .text p span").typed({
                        strings: ["지금까지 걸어온 30년... 이제부터가 시작입니다."],
                        typeSpeed: 50,
                        showCursor: false
                    });
                }, 1500);
            });
            
            $(document).on('click', '#header .slogan', function() {
                $('#header .slogan .bar').toggleClass('on');
            });
            
        })(jQuery);
    </script>
</body>
</html>