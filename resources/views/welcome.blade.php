<!DOCTYPE html>
<!--
Template Name: Miraculous - Online Music Store Html Template
Version: 1.0.0
Author: Kamleshyadav
Website:
Purchase:
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Begin Head -->

<head>
    <title>Media</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Music">
    <meta name="keywords" content="">
    <meta name="author" content="kamleshyadav">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="/assets/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/js/plugins/swiper/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/js/plugins/nice_select/nice-select.css">
    <link rel="stylesheet" type="text/css" href="/assets/js/plugins/player/volume.css">
    <link rel="stylesheet" type="text/css" href="/assets/js/plugins/scroll/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/all.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/brands.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/solid.css">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="/assets/images/tabico.svg">

    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap-rtl.css"> -->

</head>



<style>
    @font-face {

        font-family: "Alarabiya";
        src: url("/assets/fonts/Alarabiya.ttf");

    }

    body {
        font-family: "Alarabiya", sans-serif
    }

    /* unvisited link */
    a:link {
        color: rgb(255, 255, 255);
    }

    /* visited link */
    a:visited {
        color: white;
    }

    /* mouse over link */
    a:hover {
        color: white;
    }

    /* selected link */
    a:active {
        color: white;
    }

    .tooltipm {
        position: relative;
        display: inline-block;
    }

    .tooltipm .tooltiptextm {
        visibility: hidden;
        width: 200px;
        background-color: #272f56;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;

        /* Position the tooltip */
        position: absolute;
        z-index: 1;
        top: 100%;
        left: 50%;
        margin-left: -60px;
    }



    .tooltipm:hover .tooltiptextm {
        visibility: visible;
        opacity: 1;
    }

    .bg-image {
        background-image: url(/images/banner.png);
        filter: blur(5px);
        -webkit-filter: blur(5px);
        width: 100%;
        height: 100%;
        position: absolute;
        /* background-position: center; */
        background-repeat: no-repeat;
        background-size: cover;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: -1;
    }

    .dark-image {
        background: linear-gradient(to top, #14182a, #252b4d3d);
        /* background: rgb(24 31 58 / 76%); */
        backdrop-filter: blur(3px);
        filter: blur(3px);
        -webkit-filter: blur(3px);
        width: 100%;
        height: 110%;
        position: absolute;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: -1;
    }

    /* width */
    ::-webkit-scrollbar {
        width: 7px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        border-radius: 5px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #ff4847;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #ff4847;
    }
</style>

<body style="direction: rtl;">

    <!----Loader Start---->
    <!-- <div class="ms_loader">
  <div class="wrap">
  <img src="/assets/images/loader.gif" alt="">
  </div>
 </div> -->
    <!----Main Wrapper Start---->
    <div class="ms_main_wrapper">
        <!---Side Menu Start--->

        <!---Main Content Start--->
        <div id="msContentWrapper" class="ms_content_wrapper padder_top80">
            <!---Header--->
            <div id="msHeader" class="ms_header" style="left: 0;">

                <div class="ms_top_left">
                    <a href="/">
                        <img src="/assets/images/logo.svg" class="logoo" style="display: block; margin-left: auto; margin-right: auto; zoom: 1.2;">
                    </a>
                </div>

            </div>



            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

                </ol>

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="ms-banner">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div id="msBannerImg" class="ms_banner_img">
                                            <img src="/assets/images/c1.png" alt="" class="sim"
                                                style="margin-top: 0; border-radius: 10px; width: 100%; height: 100%; object-fit: cover;">
                                        </div>
                                        <div id="msBannerText" class="ms_banner_text">


                                            <div style="cursor: default !important; text-decoration: none !important">
                                                <p id="mDesc" style="visibility: hidden;">Dream your moments, Until I
                                                    Met You, Gimme Some Courage,
                                                    Dark Alley, One More Of A Stranger, Endless<br> Things...
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item ">
                        <div class="ms-banner">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div id="msBannerImg" class="ms_banner_img">
                                            <img src="/assets/images/c2.png" alt="" class="sim"
                                                style="margin-top: 0; border-radius: 10px; width: 100%; height: 100%; object-fit: cover;">
                                        </div>
                                        <div id="msBannerText" class="ms_banner_text">


                                            <div style="cursor: default !important; text-decoration: none !important">
                                                <p id="mDesc" style="visibility: hidden;">Dream your moments, Until I
                                                    Met You, Gimme Some Courage,
                                                    Dark Alley, One More Of A Stranger, Endless<br> Things...
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item ">
                        <div class="ms-banner">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div id="msBannerImg" class="ms_banner_img">
                                            <img src="/assets/images/c3.png" alt="" class="sim"
                                                style="margin-top: 0; border-radius: 10px; width: 100%; height: 100%; object-fit: cover;">
                                        </div>
                                        <div id="msBannerText" class="ms_banner_text">


                                            <div style="cursor: default !important; text-decoration: none !important">
                                                <p id="mDesc" style="visibility: hidden;">Dream your moments, Until I
                                                    Met You, Gimme Some Courage,
                                                    Dark Alley, One More Of A Stranger, Endless<br> Things...
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>



                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>


            <br>


        </div>


    </div>


    </div>



    <br><br><br>
    <div id="about">
        <p class="shatxt" style="color: #ff3d33;">SHA100</p>
        <p class="titde" style="width: 60%; text-align: center; margin: auto; color: #d1d1d1;">
            لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات
            المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة
            مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف.
            خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد
            الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق "ليتراسيت"
            لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات
            المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة
            مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف.
            خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد
            الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق "ليتراسيت"
        </p>
    </div>
    <br><br><br>

    <div id="about" style="width: 60%; text-align: center; margin: auto;">
        <p class="shatxt" style="color: #ff3d33;">تواصل معنا </p>
        <p class="titde" style="color: #d1d1d1;">
            <br>

            <p class="tit" style="text-align: start !important;"> ألايميل </p>
            <input id="imgTxt" type="email" placeholder="someone@example.com" class="form-control">
            <br>
            <p class="tit" style="text-align: start !important;"> الاسم </p>
            <input id="imgTxt" type="email" placeholder="" class="form-control">
            <br>
            <p class="tit" style="text-align: start !important;"> الرسالة </p>
            <textarea id="Description" style="height: 100px;" rows="4" maxlength="1000" placeholder="" class="form-control"></textarea>
            <br>
            <div class="ms_upload_btn">
                <a href="#" class="ms_btn" >ارسال</a>
                
            </div>
        </p>
    </div>



    <script>
        var langLay = localStorage.getItem("langLay")

        var logReg = document.getElementById("logReg")
        var topSearch = document.getElementById("topSearch")
        var tit = document.querySelectorAll("#tit")
        var viewAll = document.querySelectorAll("#viewAll")
        var msBannerImg = document.querySelectorAll("#msBannerImg")
        var msBannerText = document.querySelectorAll("#msBannerText")
        var topSearch = document.getElementById("topSearch")
        var searchBox = document.getElementById("searchBox")
        var msContentWrapper = document.getElementById("msContentWrapper")
        var msHeader = document.getElementById("msHeader")
        var msSidemenuWrapper = document.getElementById("msSidemenuWrapper")
        var msNavClose = document.getElementById("msNavClose")
        var sideMenuIco = document.getElementById("sideMenuIco")
        var sideNavItem = document.querySelectorAll("#sideNavItem")



        var langLay = "ar"

        if (langLay == "ar") {

            // Arabaic layout


            topSearch.style.float = "right";
            tit.forEach(ele => {
                ele.style.float = "right";
            })
            viewAll.forEach(ele => {
                ele.style.float = "left";
            })
            msBannerImg.forEach(ele => {
                ele.style.float = "right";
            })
            msBannerText.forEach(ele => {
                ele.style.float = "right";
            })
            sideNavItem.forEach(ele => {
                ele.style.direction = "RTL"
            })
            mName.forEach(ele => {
                ele.style.textAlign = "end"
            })
            mDesc.forEach(ele => {
                ele.style.textAlign = "end"
            })
            mAction.forEach(ele => {
                ele.style.textAlign = "end"
            })



            searchBox.style.direction = "RTL";
            searchBox.style.paddingRight = "60px";


            msSidemenuWrapper.style.right = "0";

            msNavClose.style.left = "-24px";

            sideMenuIco.style.marginLeft = "0";
            sideMenuIco.style.marginRight = "20px";
            sideMenuIco.style.webkitTransform = "rotate(180deg)"



        } else if (langLay == "en") {

            // English layout




            tit.forEach(ele => {
                ele.style.float = "left";
            })
            viewAll.forEach(ele => {
                ele.style.float = "right";
            })
            msBannerImg.forEach(ele => {
                ele.style.float = "left";
            })
            msBannerText.forEach(ele => {
                ele.style.float = "left";
            })
            sideNavItem.forEach(ele => {
                ele.style.direction = "LTR"
            })
            mName.forEach(ele => {
                ele.style.textAlign = "start"
            })
            mDesc.forEach(ele => {
                ele.style.textAlign = "start"
            })
            mAction.forEach(ele => {
                ele.style.textAlign = "start"
            })

            searchBox.style.direction = "LTR";
            searchBox.style.paddingRight = "0px";


            msSidemenuWrapper.style.right = "initial";

            msNavClose.style.right = "-24px";

            sideMenuIco.style.marginLeft = "20px";
            sideMenuIco.style.marginRight = "0px";
            sideMenuIco.style.webkitTransform = "rotate(0deg)"

        }



        function openlink(e){
            window.open(e, '_blank');
        }


        function about() {
            var element = document.getElementById(id);
            element.scrollTop = element.scrollHeight - element.clientHeight;
        }



        function changelang(e) {
            if (e == 0) {
                document.getElementById("lang_en").checked = true;
                document.getElementById("lang_ar").checked = false;
                localStorage.setItem("langLay", "en")
            }
            if (e == 1) {
                document.getElementById("lang_en").checked = false;
                document.getElementById("lang_ar").checked = true;
                localStorage.setItem("langLay", "ar")
            }
        }

        function setNewLang() {
            location.reload();

        }


        function reDirect() {
            window.location.href = "movie.html";
        }

        function changeSideNavItemStyle() {
            var flag = msSidemenuWrapper.classList.contains("open_menu");
            if (flag == true) {
                sideNavItem.forEach(ele => {
                    ele.style.textAlign = "center"
                })
            } else {
                sideNavItem.forEach(ele => {
                    ele.style.textAlign = "start"
                })
            }

        }
    </script>


    <!----Queue Clear Model ---->
    <div class="ms_clear_modal">
        <div id="clear_modal" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="fa_icon form_close"></i>
                    </button>
                    <div class="modal-body">
                        <h1>Are you sure you want to clear your queue?</h1>
                        <div class="clr_modal_btn">
                            <a href="#">clear all</a>
                            <a href="#">cancel</a>
                        </div>
                    </div>.
                </div>
            </div>
        </div>
    </div>
    <!----Queue Save Modal---->
    <div class="ms_save_modal">
        <div id="save_modal" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="fa_icon form_close"></i>
                    </button>
                    <div class="modal-body">
                        <h1>Log in to start sharing your music!</h1>
                        <div class="save_modal_btn">
                            <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i> continue with
                                google
                            </a>
                            <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i> continue with
                                facebook</a>
                        </div>
                        <div class="ms_save_email">
                            <h3>or use your email</h3>
                            <div class="save_input_group">
                                <input type="text" placeholder="Enter Your Name" class="form-control">
                            </div>
                            <div class="save_input_group">
                                <input type="password" placeholder="Enter Password" class="form-control">
                            </div>
                            <button class="save_btn">Log in</button>
                        </div>
                        <div class="ms_dnt_have">
                            <span>Dont't have an account ?</span>
                            <a href="javascript:;" class="hideCurrentModel" data-toggle="modal"
                                data-target="#myModal">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    
    <br><br><br>
    <div class="mfooter">
        <p style="text-align: center;">© 2021 SHA100</p>
    </div>





    </div>
    <!--Warpper End-->


    <!--Main js file Style-->
    <script type="text/javascript" src="/assets/js/jquery.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/js/plugins/swiper/js/swiper.min.js"></script>
    <script type="text/javascript" src="/assets/js/plugins/player/jplayer.playlist.min.js"></script>
    <script type="text/javascript" src="/assets/js/plugins/player/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="/assets/js/plugins/player/audio-player.js"></script>
    <script type="text/javascript" src="/assets/js/plugins/player/volume.js"></script>
    <script type="text/javascript" src="/assets/js/plugins/nice_select/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="/assets/js/plugins/scroll/jquery.mCustomScrollbar.js"></script>
    <script type="text/javascript" src="/assets/js/custom.js"></script>
    <script type="text/javascript" src="/assets/js/all.js"></script>




    <script>
        jQuery(document).ready(function () {
            //initialize swiper when document ready
            var mySwiper = new Swiper('#swiper-container', {
                slidesPerView: 8,
                spaceBetween: 10,
                breakpoints: {
                    '1600': {
                        slidesPerView: 7,
                        spaceBetween: 10,
                    },
                    '1400': {
                        slidesPerView: 6,
                        spaceBetween: 10,
                    },
                    '1200': {
                        slidesPerView: 4,
                        spaceBetween: 10,
                    },
                    '780': {
                        slidesPerView: 3,
                        spaceBetween: 10,
                    },
                    '580': {
                        slidesPerView: 2,
                        spaceBetween: 5,
                    },
                    '480': {
                        slidesPerView: 2,
                        spaceBetween: 5,
                    },

                },
                // Optional parameters
                freeMode: true,
                loop: false,
                scrollbar: {
                    el: '.swiper-scrollbar',
                    hide: true,
                },
                navigation: {
                    nextEl: '#swipercustom-button-next',
                    prevEl: '#swipercustom-button-prev',
                },
                nav: true,
                autoplay: true,
                autoplayTimeout: 5000,
                navText: ["<i class='fa fa-arrow-left fa-lg'></i>",
                    "<i class='fa fa-arrow-right fa-lg'></i>"
                ]


            });

        });




        jQuery(document).ready(function () {
            //initialize swiper when document ready
            var mySwiper = new Swiper('#swiper-containers', {
                slidesPerView: 8,
                spaceBetween: 10,
                breakpoints: {
                    '1600': {
                        slidesPerView: 7,
                        spaceBetween: 10,
                    },
                    '1400': {
                        slidesPerView: 6,
                        spaceBetween: 10,
                    },
                    '1200': {
                        slidesPerView: 4,
                        spaceBetween: 10,
                    },
                    '780': {
                        slidesPerView: 3,
                        spaceBetween: 10,
                    },
                    '580': {
                        slidesPerView: 2,
                        spaceBetween: 5,
                    },
                    '480': {
                        slidesPerView: 2,
                        spaceBetween: 5,
                    },

                },
                // Optional parameters
                freeMode: true,
                loop: false,
                scrollbar: {
                    el: '.swiper-scrollbar',
                    hide: true,
                },
                navigation: {
                    nextEl: '#swipercustom-button-next',
                    prevEl: '#swipercustom-button-prev',
                },
                nav: true,
                autoplay: true,
                autoplayTimeout: 5000,
                navText: ["<i class='fa fa-arrow-left fa-lg'></i>",
                    "<i class='fa fa-arrow-right fa-lg'></i>"
                ]


            });

        });




        jQuery(document).ready(function () {
            //initialize swiper when document ready
            var mySwiper = new Swiper('#swiper-containerss', {
                slidesPerView: 8,
                spaceBetween: 10,
                breakpoints: {
                    '1600': {
                        slidesPerView: 7,
                        spaceBetween: 10,
                    },
                    '1400': {
                        slidesPerView: 6,
                        spaceBetween: 10,
                    },
                    '1200': {
                        slidesPerView: 4,
                        spaceBetween: 10,
                    },
                    '780': {
                        slidesPerView: 3,
                        spaceBetween: 10,
                    },
                    '580': {
                        slidesPerView: 2,
                        spaceBetween: 5,
                    },
                    '480': {
                        slidesPerView: 2,
                        spaceBetween: 5,
                    },

                },
                // Optional parameters
                freeMode: true,
                loop: false,
                scrollbar: {
                    el: '.swiper-scrollbar',
                    hide: true,
                },
                navigation: {
                    nextEl: '#swipercustom-button-next',
                    prevEl: '#swipercustom-button-prev',
                },
                nav: true,
                autoplay: true,
                autoplayTimeout: 5000,
                navText: ["<i class='fa fa-arrow-left fa-lg'></i>",
                    "<i class='fa fa-arrow-right fa-lg'></i>"
                ]


            });

        });
    </script>


    <script>
        function gotoBottom() {
            console.log("GG")
            var element = document.getElementById("about");
            element.scrollTop = element.scrollHeight - element.clientHeight;
        }
    </script>
</body>

</html>
