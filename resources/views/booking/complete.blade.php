

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>Squad 101</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Erp, Allied Consulting , Erp Courses , Sap , IOT , Gis, Consulting, Support, Training,Outsourcing,Development,Integration,Application,SAP Consultancy , Technical Support" />

    <link rel="shortcut icon" type="image/png" href="/images/newlogo.png" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->

    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/styleSlider.css">
    <link rel="stylesheet" href="/css/squad.css">
    <link rel="stylesheet" href="/css/popUp.css">
    <link rel="stylesheet" href="/css/form.css">

    <link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <script type="text/javascript" src="/js/bootstrap-3.1.1.min.js"></script>



    <!-- fonts -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Acme' rel='stylesheet' type='text/css'>
    <!-- //fonts -->

    <!-- Spectrum -->

    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="/js/move-top.js"></script>
    <script type="text/javascript" src="/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <!--animate-->
    <link href="/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->

</head>

<body>
<div class="header">
    <div class="container">
        <div class="header-left grid">
            <div class="grid__item color-1 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s">

                <!--  <h1>
                            <img src="images/newlogo.png" style="display: inline;    margin-bottom: 20px; width:150px">
                            </h1>-->
            </div>


        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div id="myimage" class="banner">
    <div class="ban-top ">
        <div class="container">
            <div class="ban-top-con">
                <div class="top_nav_left">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                        </div>
                    </nav>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

</div>
<div class="row">

    <div class="col-sm-4" id='cssmenu'>
        <ul>
            <li class='active'><a href='/book'>New Booking</a></li>
            <li class="dropdown-item"><a href='/profile'>Profile</a></li>

            <li> <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{csrf_field()}}        <!--  General -->
                </form>
            </li>

            <li>
                @if(Auth::user()->days>=0&&Auth::user()->days<=14)
                    <img class="userImg" src="/images/RECRUIT.jpg"  title="Recruit-مجند">
                @elseif(Auth::user()->days>=15&&Auth::user()->days<=28)
                    <img class="userImg" src="/images/SERGEANT.jpg" title="Sergeant-ملازم">

                @elseif(Auth::user()->days>=29&&Auth::user()->days<=42)
                    <img class="userImg" src="/images/COMMANDO.jpg" title="Commando-فدائ">
                @elseif(Auth::user()->days>=43&&Auth::user()->days<=56)
                    <img class="userImg" src="/images/COLONEL.jpg" title="Colonel-عقيد">
                @elseif(Auth::user()->days>=57)
                    <img class="userImg" src="/images/GENERAL.jpg" width="500px" title="General-لواء" >
                @endif


                <p class="userName"> {{ Auth::user()->name }}</p>
                <img class="grid__item color-1 wow zoomIn logoImg" src="/images/ColoredLogo.png">
            </li>
        </ul>    </div>
    <div class="col-sm-8 rightBody">
        <form method="post" action="/complete/{{$day}}">
        {{csrf_field()}}        <!--  General -->

            <div style="" class="FirstSection grid__item color-1 wow zoomInUp" data-wow-delay=".5s">
                @if (Session::get("message"))
                    <h2 >{{Session::get("message")}}</h2>
                    <br>
                @endif
                <label class="Service leftLabel">
                    <input id="weekly" type="radio" name="type" value="weekly" />
                    <img class="circle weekly" src="/images/Estgmam.jpg">
                    <p class="serviceName">weekly</p>
                </label>

                <label class="Service rightLabel">
                    <input id="weekend" type="radio" name="type" value="weekend" checked/>
                    <img class="circle weekend" src="/images/Estgmam.jpg">

                    <p class="serviceName">weekend</p>
                </label>
            </div>

            <select id="numWeek" style="margin-bottom: 1px; margin-left:29%;height: 44px; padding-left: 30px;padding-right: 30px;"  name="number"  placeholder="number of weeks">
                <option>Choose number of weeks</option>
                <option value="1">one week</option>
                <option value="2">two weeks</option>
                <option value="3">three weeks</option>
                <option value="4">four weeks</option>

                <br/>
            </select>
            <h2 class="question">Do you have a Cobone?</h2>
<br/>
            <input id="cobone" style="    margin-bottom: 1px; margin-left:29%;height: 44px; padding-left: 30px;padding-right: 30px;" type="text" name="cobone"  placeholder="number of cobone">
            <br/>
<br/>

            <button style="margin-left: 38%;" class="btn btn-success" type="submit">
                Book
            </button>

        </form>


    </div>
</div>
<!-- smooth scrolling -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

<script src="/js/index.js"></script>


<script src="/js/popUp.js"></script>
<script src="/js/squad.js"></script>

</body>

</html>