<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>우정비에스씨</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:900" rel="stylesheet">
    <link href="/woojung3/assets/fontello/css/fontello.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="/woojung3/assets/css/default.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <nav id="top-nav">
            <div class="container">
                <p><img src="/woojung3/assets/images/top_nav.gif" alt=""></p>
            </div>
        </nav>
        <header id="header">
            <div class="container">
                <p><img src="/woojung3/assets/images/header.gif" alt=""></p>
            </div>
        </header>
        <aside id="aside">
            <p><img src="/woojung3/assets/images/side_nav.gif" alt=""></p>
        </aside>
        <main id="content">
            <div class="slogan">
                <div class="slogan-item">
                    <div class="container">
                        <div class="slogan-content">
                            <div class="slogan-body">
                                <h2>OPEN INNOVATION</h2>
                                <p>
                                    끊임없는 노력과 새로운 시도로 국내 생명과학<br>
                                    발전은 물론 연구현장의 안전을 넘어서 사람이 안심하고<br>
                                    살아가는 환경을 만드는 기업, 우정비에스씨
                                </p>
                            </div>
                            <div class="outline">
                                <div>
                                    <div class="top"></div>
                                    <div class="right"></div>
                                    <div class="bottom"></div>
                                    <div class="left"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slogan-item">
                    <div class="container">
                        <div class="slogan-content">
                            <div class="slogan-body">
                                <h2>OPEN INNOVATION</h2>
                                <p>
                                    끊임없는 노력과 새로운 시도로 국내 생명과학<br>
                                    발전은 물론 연구현장의 안전을 넘어서 사람이 안심하고<br>
                                    살아가는 환경을 만드는 기업, 우정비에스씨
                                </p>
                            </div>
                            <div class="outline">
                                <div>
                                    <div class="top"></div>
                                    <div class="right"></div>
                                    <div class="bottom"></div>
                                    <div class="left"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slogan-item">
                    <div class="container">
                        <div class="slogan-content">
                            <div class="slogan-body">
                                <h2>OPEN INNOVATION</h2>
                                <p>
                                    끊임없는 노력과 새로운 시도로 국내 생명과학<br>
                                    발전은 물론 연구현장의 안전을 넘어서 사람이 안심하고<br>
                                    살아가는 환경을 만드는 기업, 우정비에스씨
                                </p>
                            </div>
                            <div class="outline">
                                <div>
                                    <div class="top"></div>
                                    <div class="right"></div>
                                    <div class="bottom"></div>
                                    <div class="left"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slogan-controls">
                <div class="slogan-pager">
                    <a href="#" data-slide-index="0"><span>1</span></a>
                    <a href="#" data-slide-index="1"><span>2</span></a>
                    <a href="#" data-slide-index="2"><span>3</span></a>
                </div>
                <div class="slogan-auto"></div>
            </div>
            <div class="comm">
                <div class="container">
                    <p><img src="/woojung3/assets/images/img_content.png"></p>
                </div>
            </div>
        </main>
        <nav id="foot-nav">
            <div class="container">
                <p><img src="/woojung3/assets/images/foot_nav.gif"></p>
            </div>
        </nav>
        <footer id="footer">
            <div class="container">
                <p><img src="/woojung3/assets/images/copy.gif"></p>
            </div>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!--<script src="/woojung3/assets/jquery.mousewheel.min.js"></script>
    <script src="/woojung3/assets/jquery.easing.1.3.js"></script>-->
    <script src="/woojung3/assets/jquery.bxslider.min.js"></script>
    <script>
        (function($) {
            $(window).on('load', function() {
                $('.slogan').bxSlider({
                    auto: true,
                    autoControls: true,
                    pause: 6000,
                    mode: 'fade',
                    controls: false,
                    pagerCustom: $('.slogan-controls > .slogan-pager'),
                    autoControlsSelector: $('.slogan-controls > .slogan-auto'),
                    autoControlsCombine: true,
                    startText: '<i class="icon-play"></i>',
                    stopText: '<i class="icon-pause"></i>',
                    onSliderLoad: function(currentIndex) {
                        $('.slogan .slogan-item').eq(currentIndex).addClass('active');
                    },
                    onSlideAfter: function($slideElement, oldIndex, newIndex) {
                        $('.slogan .slogan-item').removeClass('active');
                        $slideElement.addClass('active');
                    }
                });
            });
        })(window.jQuery);
    </script>
</body>
</html>