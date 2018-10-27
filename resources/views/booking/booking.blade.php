

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

    <link rel="shortcut icon" type="image/png" href="images/newlogo.png" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/styleSlider.css">
    <link rel="stylesheet" href="css/squad.css">
    <link rel="stylesheet" href="css/popUp.css">
    <link rel="stylesheet" href="css/form.css">

    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>



    <!-- fonts -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Acme' rel='stylesheet' type='text/css'>
    <!-- //fonts -->

    <!-- Spectrum -->
    <!--//end-animate-->

    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
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
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
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
    <div class="ban-top">
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
        </ul>
    </div>


    <form id="Form" method="post" action="/book">
    {{csrf_field()}}        <!--  General -->

        <div class="col-sm-8 rightBody">
            @if (Session::get("message"))
                <h2 style="background-color: red">{{Session::get("message")}}</h2>
                <br>
            @endif
            <div style="" class="FirstSection grid__item color-1 wow zoomInUp" data-wow-delay=".5s">
                <h2 class="question">Choose Your Service Type</h2>
                <label class="Service leftLabel">
                    <input id="Estgmam" type="radio" name="Estgmam" value="recreation" />
                    <img class="circle" src="images/Estgmam.jpg">
                    <p class="serviceName">Recreation</p>
                </label>

                <label class="Service rightLabel">
                    <input id="Eqama" type="radio" name="Estgmam" value="stay" />
                    <img class="circle" src="images/Estgmam.jpg">

                    <p style="margin-left: 60px;" class="serviceName">Stay</p>
                </label>
                <label class="Service rightLabel">
                    <input id="Dayuse" type="radio" name="Estgmam" value="dayuse" />
                    <img class="circle" src="images/Estgmam.jpg">

                    <p class="serviceName">Day use</p>
                </label>




            </div>
            <div class="SecondSection grid__item color-1  wow zoomInUp" style="display:none;">
                <h2 class="question">Choose Your Room Type</h2>
                <label class="Service leftLabel leftLabelPage2">
                    <input id="Single" type="radio" name="room" value="single" />
                    <img id="Singleimg" class="circle" src="images/1.jpg">
                    <p class="serviceName">Single</p>
                </label>

                <label class="Service rightLabel">
                    <input id="Double" type="radio" name="room" value="double" />
                    <img id="Doubleimg" class="circle" src="images/2.png">

                    <p class="serviceName">Double</p>
                </label>

                <label class="Service rightLabel">
                    <input id="Quad" type="radio" name="room" value="quad" />
                    <img id="Quadimg" class="circle" src="images/4.png">

                    <p class="serviceName">Quad</p>
                </label>

                <div id="bathType" style="padding: 0px; display: none" class="switch-field">

                    <div style="float: left;" class="yesNo">
                        <input type="radio" id="switch_left" name="double" value="private" checked/>
                        <label style="width: 200px;" for="switch_left">With Shared Bathroom</label>
                        <input type="radio" id="switch_right" name="double" value="public" />
                        <label style="width: 200px;" for="switch_right">With Private Bathroom</label>
                    </div>
                </div>


                <h2 class="question" style="margin-bottom:10px">Choose The Month</h2>
                <div class="col-10">
                    <input class="form-control" name="month" type="month" value="2018-10" id="example-month-input">
                </div>
            </div>
            <ul showingpage='1' class="pager">
                <li style="display: none" id="previous" class="Previousbtn"><a href="#">Previous</a></li>


                <div class="popup" onclick="myFunction()">
                    <li class="nextbtn"><a href="#">Next</a></li>
                    <li class="submitbtn" style="display:none"><a href="#">Submit</a></li>
                    <span class="popuptext" id="myPopup">choose the type please</span>
                </div>
            </ul>
        </div>
    </form>
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

<script src="js/index.js"></script>


<script src="js/popUp.js"></script>
<script src="js/squad.js"></script>

</body>

</html>