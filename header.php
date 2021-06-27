<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Steffan Harmaajarvi</title>
    <link rel="stylesheet" type="text/css" href="<?=SITEURL?>/css/main.css">
    <link rel="stylesheet" href="<?=SITEURL?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=SITEURL?>/css/owl.theme.default.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?=SITEURL?>/css/pagePreloadEffect.css"/>
    <script src="<?=SITEURL?>/js/modernizr.custom.js"></script>
    <script src="<?=SITEURL?>/js/jquery.scrolify.js"></script>
    <script type="text/javascript">
        var i = 1;
        $(function () {
            $.scrollify({
                section: ".section",
            });
        });
        $.scrollify({
            section: ".example-classname",
            sectionName: "section-name",
            interstitialSection: "",
            easing: "easeOutExpo",
            items: 1,
            scrollSpeed: 800,
            offset: 0,
            scrollbars: true,
            standardScrollElements: "",
            setHeights: true,
            overflowScroll: true,
            updateHash: true,
            touchScroll: true,
            before: function () {
            },
            after: function () {
                /*
                var scrollTop = $(window).scrollTop();

                if ((i == 1) || (scrollTop == 0)) {
                    i++;
                    $("#insta").attr('src','<?=SITEURL?>/images/insta.png');
                    $("#location").attr('src','<?=SITEURL?>/images/location.png');
                    $('.top_menu').removeClass("scrolled");
                    $('.top_menu').removeClass("black");

                    return true;

                }
                if ((i % 2) == 0) {

                    $("#insta").attr('src','<?=SITEURL?>/images/insta_black.png');
                    $("#location").attr('src','<?=SITEURL?>/images/location_black.png');
                    $('.top_menu').addClass("black");
                    $('.top_menu').removeClass("scrolled");


                }
                console.log(scrollTop);
                if ((scrollTop >= 100) || ((i % 2) == 1)) {

                    $("#insta").attr('src','<?=SITEURL?>/images/insta.png');
                    $("#location").attr('src','<?=SITEURL?>/images/location.png');

                    $('.top_menu').addClass("scrolled");
                    $('.top_menu').removeClass("black");

                }
                i++;
                */
            },
            afterResize: function () {
            },
            afterRender: function () {
            }
        });
    </script>
    <script type="text/javascript">


        //$(document).scroll(function() {

        //});
    </script>

</head>
<body>
<div id="ip-container" class="ip-container">
    <header class="ip-header">
        <div class="ip-loader">
            <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
                <path class="ip-loader-circlebg"
                      d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                <path id="ip-loader-circle" class="ip-loader-circle"
                      d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
            </svg>
        </div>
    </header>
