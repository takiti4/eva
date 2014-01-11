<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Eva</title>
        <link rel="stylesheet" type="text/css" href="m/c/g.css">
        <link rel="stylesheet" type="text/css" href="m/c/mcs.css">
        <link rel="stylesheet" media="screen"  href="m/c/jquery.fancybox.css">
        <link rel="stylesheet" media="screen"  href="m/c/jquery.fancybox-buttons.css">
        <script src="m/j/jquery-1.9.1.min.js"></script>
        <script src="m/j/jquery.mousewheel.min.js"></script>
        <script src="m/j/jquery.mCustomScrollbar.min.js"></script>
        <script src="m/j/jquery.fancybox.pack.js"></script>
        <script src="m/j/jquery.fancybox-buttons.js"></script>
        <script src="m/j/jquery.fancybox-media.js"></script>
        <script src="m/j/jquery.slides.min.js"></script>

        <script>
            (function($){
                $(window).load(function(){
                    $(".left").mCustomScrollbar();
                });
            })(jQuery);

            $(document).ready(function() {
                $(".fancybox-button").fancybox({
                    openEffect  : 'none',
                    closeEffect : 'none',
                    prevEffect		: 'none',
                    nextEffect		: 'none',
                    closeBtn		: false,
                    helpers		: {
                        title	: { type : 'inside' },
                        buttons	: {}
                    }
                });
                $('.fancybox-media').fancybox({
                    openEffect  : 'none',
                    closeEffect : 'none',
                    closeBtn		: false,
                    helpers : {
                        media : {},
                        title	: { type : 'inside' },
                        buttons	: {}
                    }
                });
                $('#slides').slidesjs({
                    width: 208,
                    height: 116,
                    navigation: false,
                    pagination: {
                        effect: "fade"
                    },
                    effect: {
                        fade: {
                            speed: 400
                        }
                    },
                    play: {
                        active: false,
                        effect: "fade",
                        interval: 3000,
                        auto: true,
                        swap: true,
                        pauseOnHover: true,
                        restartDelay: 2500
                    }
                });

            });
        </script>
    </head>
    <body>
        <div class="body">
            <div class="head">
                <a class="logo" href="/" title="EVE Online - CNTL"></a>
                <div class="menu">
                    <ul>
                        <li>
                            <a>Общий мир</a>
                        </li>
                        <li>
                            <a>Своя Судьба</a>
                        </li>
                        <li>
                            <a>Мультимедия</a>
                        </li>
                        <li>
                            <a>Друзья</a>
                        </li>
                        <li>
                            <a>Retrebution</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="con">
                <div class="left">

                    <div class="help-box">
                        <div class="item">
                            <div class="_l"><a href="#">Форумы</a></div>
                            <div class="_r">Начните общаться с другими пилотами.</div>
                        </div>
                        <div class="item">
                            <div class="_l"><a href="#">Информация для игроков</a></div>
                            <div class="_r">Всё, что нужно для принятия решений.</div>
                        </div>
                        <div class="item">
                            <div class="_l"><a href="#">Eva Gate</a></div>
                            <div class="_r">Оставайтесь на связи с друзьями.</div>
                        </div>
                        <div class="item">
                            <div class="_l"><a href="#">Ваша учетная запись</a></div>
                            <div class="_r">Оплата подписки и прочие операции.</div>
                        </div>
                        <div class="item">
                            <div class="_l"><a href="#">Служба поддержки</a></div>
                            <div class="_r">Получите помощь от наших специалистов.</div>
                        </div>
                        <div class="item">
                            <div class="_l"><a href="#">Обновление игры</a></div>
                            <div class="_r">Ознакомтесь со списком нововведений.</div>
                        </div>
                    </div>


                    <div class="con-bg">
                        <div class="img full_width iHome">

                        </div>
                        <div class="text full_width">
                            <p>
                            Мир EVE Online - это своего рода конструктор;
                            его детали созданы разработчиками игры,
                            однако играют ими десятки тысяч человек, взаимодействующих друг с другом в рамках единого сервера.
                            Что именно соберут из этих деталей пилоты - решать им.
                            По их воле в Новом Эдеме гибнут корабли, появляются процветающие корпорации, уходят в небытие могущественные империи.
                            Каждое действие, совершаемое игроком, влияет на окружающий его мир - а он, в свою очередь, влияет на всех остальных игроков.
                            </p><p>
                            EVE Online - это игра, cюжет которой целиком и полностью определяется играющими в неё людьми.
                            Сложнейшая система связей между ними делает жизнь Нового Эдема реалистично непредсказуемой;
                            порой достаточно одной сделки, одного выстрела, одного слова, чтобы жизнь десятков тысяч пилотов изменилась навсегда.
                            </p>
                        </div>
                        <div class="text col3">
                            <span>
                                <h3>ВЫБЕРИ КОРАБЛЬ</h3>
                                <p>К твоим услугам сотни разнообразных моделей кораблей — для решения любых задач, на любой вкус.</p>
                            </span>
                            <span>
                                <h3>СДЕЛАЙ ЕГО УНИКАЛЬНЫМ</h3>
                                <p>При помощи сменных модулей любой корабль можно изменить до неузнаваемости.</p>
                            </span>
                            <span>
                                <h3>СОБЕРИ КОЛЛЕКЦИЮ</h3>
                                <p>На каждой станции у тебя есть безразмерный ангар, способный вместить все купленные корабли.</p>
                            </span>
                        </div>

                    </div>


                </div>
                <div class="right">
                    <div class="block b_1">
                        <div class="_h">Информация</div>
                        <div class="_c">
                            <div id="slides">
                                <a href="#">
                                    <img src="/m/slide/slide_1.jpg">
                                </a>
                                <a href="#">
                                    <img src="/m/slide/slide_2.jpg">
                                </a>
                                <a href="#">
                                    <img src="/m/slide/slide_3.jpg">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="block b_2">
                        <div class="_h">Скриншоты</div>
                        <div class="_c">
                            <div class="screen">
                                <a class="fancybox-button" href="/m/screen/Crielere_Lolbrerie_SinqLaison.jpg" rel="fancybox-button">
                                    <img src="/m/screen/ss_1.png">
                                    <span>Увеличить</span>
                                </a>
                                <a class="fancybox-button" href="/m/screen/NewCaldari_Kimotoro_TheForge.jpg" rel="fancybox-button">
                                    <img src="/m/screen/ss_2.png">
                                    <span>Увеличить</span>
                                </a>
                                <div style="display: none">
                                    <a class="fancybox-button" href="/m/screen/amarr_fleet_attack.jpg" rel="fancybox-button"></a>
                                    <a class="fancybox-button" href="/m/screen/gallente_dominix.jpg" rel="fancybox-button"></a>
                                    <a class="fancybox-button" href="/m/screen/ice_mining_ui.jpg" rel="fancybox-button"></a>
                                    <a class="fancybox-button" href="/m/screen/implants_boosters_ui.jpg" rel="fancybox-button"></a>
                                    <a class="fancybox-button" href="/m/screen/KhanidPrime_Nohsayess_Khanid.jpg" rel="fancybox-button"></a>
                                    <a class="fancybox-button" href="/m/screen/minmatar_wolfminmatar_wolf.jpg" rel="fancybox-button"></a>
                                    <a class="fancybox-button" href="/m/screen/MMD3B_730KH_GreatWildlands.jpg" rel="fancybox-button"></a>
                                    <a class="fancybox-button" href="/m/screen/planetary_ui.jpg" rel="fancybox-button"></a>
                                    <a class="fancybox-button" href="/m/screen/research_landmark_ui.jpg" rel="fancybox-button"></a>
                                    <a class="fancybox-button" href="/m/screen/SerpentisPrime_Phoenix_Fountain.jpg" rel="fancybox-button"></a>
                                    <a class="fancybox-button" href="/m/screen/sleeper_salvage_ui.jpg" rel="fancybox-button"></a>
                                    <a class="fancybox-button" href="/m/screen/tech1_ui.jpg" rel="fancybox-button"></a>
                                    <a class="fancybox-button" href="/m/screen/tech2_ui.jpg" rel="fancybox-button"></a>
                                    <a class="fancybox-button" href="/m/screen/war_fleet.jpg" rel="fancybox-button"></a>
                                    <a class="fancybox-button" href="/m/screen/Yulai_Sanctum_Genesis.jpg" rel="fancybox-button"></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="block b_3">
                        <div class="_h">Видеоролик</div>
                        <div class="_c">
                            <div class="screen">
                                <a class="fancybox-media" href="http://www.youtube.com/watch?v=lElTw27hDNs" rel="fancybox-video">
                                    <img src="/m/screen/video.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="menu">
                    <ul>
                        <li>
                            <a>Общий мир</a>
                        </li>
                        <li>
                            <a>Своя Судьба</a>
                        </li>
                        <li>
                            <a>Мультимедия</a>
                        </li>
                        <li>
                            <a>Друзья</a>
                        </li>
                        <li>
                            <a>Retrebution</a>
                        </li>
                    </ul>
                </div>
                <div class="copy">
                    &copy; 2013 - 2014, EveOnline. Все права защищены.
                </div>
                <div class="banner_88">
                </div>
                <div class="cc_p"></div>
            </div>
        </div>
    </body>
</html>