<?php

require 'env.php';

require 'header.php';

error_reporting(E_ALL);
ini_set('display_errors', '1');

$request = explode('/', $_SERVER['REQUEST_URI']);

$uri = $_SERVER['HTTP_HOST'];

if ( !empty($request[2]) ) {

    if ( file_exists( $request[2].".php" ) ) {

        require '$request[2].".php"';

    } else {

        $folder = $request[2];
        $file = $request[3];

        if ( file_exists($folder . '/' . $file . '.php') ) {

            require $folder . '/' . $file . '.php';


        }


    }


} else {
    ?>
        <header class="header section">
            <div class="top_menu_blur">

            </div>
            <div class="top_menu">
                <a href="http://instagram.com/steffan_ios"><img id="insta" src="<?=SITEURL?>/images/insta.png">@steffan_ios</a>
                <a href="tel:+79963436640">+7 (996) 343-66-40</a>
                <p><img id="location" src="<?=SITEURL?>/images/location.png"> Сахалин, Россия</p>
            </div>
            <div class="bio">
                <img class="steffan_img" src="images/steffan.jpg">
                <div class="titles">
                    <h1 id="step1"></h1>
                    <h2 id="step2"></h2>
                    <div class="techs">
                        <button id="swift" class="del">.vue</button>
                        <button id="html" class="del">.html</button>
                        <button id="php" class="del">.php</button>
                        <button id="css" class="del">.css</button>
                        <button id="sql" class="del">.sql</button>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <section class="courses section">
                <h1 class="section_title">Курсы</h1>
                <div class="courses_list">
                    <div class="owl-carousel owl-theme">
                        <a href="<?=SITEURL?>/course/web-design">
                            <div class="course_card">
                                <video width="500px" height="333px" muted autoplay="autoplay">
                                    <source src="<?=SITEURL?>/videos/web.mov" type="video/mp4">
                                </video>
                                <div class="course_desc">
                                    <h2><img class="course_logo" src="images/web_logo.png">Web-дизайн</h2>
                                </div>
                                <h2>
                                    <button id="swift" class="show">.html</button>
                                    <button id="swift" class="show">.css</button>
                                    <button id="swift" class="show">.js</button>
                                </h2>
                            </div>
                        </a>
                        <a href="<?=SITEURL?>/course/web-developement">
                            <div class="course_card">
                                <video width="500px" height="333px" muted autoplay="autoplay">
                                    <source src="<?=SITEURL?>/videos/web.mov" type="video/mp4">
                                </video>
                                <div class="course_desc">
                                    <h2><img class="course_logo" src="images/web_logo.png">Web-разработка</h2>
                                </div>
                                <h2>
                                    <button id="swift" class="show">.php</button>
                                    <button id="swift" class="show">.sql</button>
                                    <button id="swift" class="show">.json</button>
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <section class="videos section">
                <h1 class="section_title">Видео-уроки</h1>
                <div class="videos_list">
                    <div class="owl-carousel owl-theme">
                        <a href="https://youtu.be/0HtptcaZE1A">
                            <div class="video_card">
                                <img class="video_img" src="images/dark_theme_video.png">
                                <h2 class="video_desc">Тёмная и светлая тема</h2>
                                <h2>
                                    <button id="swift" class="show">.swift</button>
                                    <button id="xcode" class="show">xcode</button>
                                </h2>
                            </div>
                        </a>
                        <a href="https://youtu.be/aWZLUrgJQw0">
                            <div class="video_card">
                                <img class="video_img" src="images/video_arrays.png">
                                <h2 class="video_desc">Функция map</h2>
                                <h2>
                                    <button id="swift" class="show">.swift</button>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <section class="cms section">
                <h1 class="section_title">Портфолио</h1>
                <div class="cms_list">
                    <div class="left_side">
                        <img src="<?=SITEURL?>/images/cms-1.png">
                        <img class="gif" src="images/cms-2.gif">
                    </div>
                    <div class="right_side">
                        <h2><img src="<?=SITEURL?>/images/raice.png"> The Raice CMS</h2>
                        <h3>Система управлением контентом, полностью написанная мной, реализующая паттерн MVC. Позволяет
                            без труда создавать статьи, страницы, также оставлять комментарии.</h3>
                        <h4>
                            <button id="html" class="show">.html</button>
                            <button id="php" class="show">.php</button>
                            <button id="css" class="show">.css</button>
                            <button id="sql" class="show">.sql</button>
                        </h4>
                        <h4>
                            <button class="github show">
                                <img src="<?=SITEURL?>/images/github.png">
                                GitHub
                            </button>
                            <a href="cms/theraicecms.v.1.2.zip">
                                <button class="download show">
                                    <img src="<?=SITEURL?>/images/download.png">Скачать v. 1.2
                                </button>
                            </a>
                        </h4>
                    </div>
                </div>
            </section>
        </main>
    <?php

}

require 'footer.php';
