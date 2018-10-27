<!DOCTYPE html>
<html>

<head>
    <title>Squad 101</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Erp, Allied Consulting , Erp Courses , Sap , IOT , Gis, Consulting, Support, Training,Outsourcing,Development,Integration,Application,SAP Consultancy , Technical Support" />

    <link href="css/bootstrap.css" rel="stylesheet" id="">
    <link rel="shortcut icon" type="image/png" href="images/newlogo.png" />


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


    <!-- Spectrum -->

    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
    <link href="css/profile.css" rel="stylesheet" id="bootstrap-css">

    <script src="js/bootstrap-3.1.1.min.js"></script>
    <script src="js/jquery-2.1.4.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>
<div class="header">
    <div class="container">
        <div class="header-left grid">
            <div class="grid__item color-1 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s">
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

<div class="info col-lg-12 col-sm-12">
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span>
                <div class="hidden-xs">bullets</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                <div class="hidden-xs">edit info</div>
            </button>
        </div>

    </div>

    <div class="well">
        <div class="col-sm-4" id='cssmenu'>
            <ul>
                <li class='dropdown-item'><a href='/book'>New Booking</a></li>
                <li class="active"><a href='/profile'>Profile</a></li>

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
                    <img class="grid__item color-1 wow zoomIn logoImg" src="images/ColoredLogo.png">
                </li>
            </ul>
        </div>


        <div class="tab-content col-sm-9">
            <div class="tab-pane  fade in active" id="tab1">
                @if(Auth::user()->days>=0&&Auth::user()->days<=14)
                    <img class="circletag" src="/images/RECRUIT.jpg"  title="Recruit-مجند">
                @elseif(Auth::user()->days>=15&&Auth::user()->days<=28)
                    <img class="circletag" src="/images/SERGEANT.jpg" title="Sergeant-ملازم">

                @elseif(Auth::user()->days>=29&&Auth::user()->days<=42)
                    <img class="circletag" src="/images/COMMANDO.jpg" title="Commando-فدائ">
                @elseif(Auth::user()->days>=43&&Auth::user()->days<=56)
                    <img class="circletag" src="/images/COLONEL.jpg" title="Colonel-عقيد">
                @elseif(Auth::user()->days>=57)
                    <img class="circletag" src="/images/GENERAL.jpg" width="500px" title="General-لواء" >
                @endif
                    <h4 id="pointsText">{{$user->bullets}}</h4>
                    <h1 id="pointsText">Bullets</h1>

            </div>
            <div class="tab-pane fade in" id="tab2">
                <div class="container">

                    <hr>
                    <div class="row">

                        <!-- edit form column -->
                        <div class="col-md-9 personal-info">
                            <div class="alert alert-info alert-dismissable" style="display:none;">
                                <a class="panel-close close" data-dismiss="alert">×</a>
                                <i class="fa fa-coffee"></i> This is an <strong>.alert</strong>. Use this to show important messages to the user.
                            </div>
                            <h3>Personal info</h3>

                            <form class="form-horizontal" method="post" action="/profile">
                            {{csrf_field()}}        <!--  General -->


                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Name:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" name="name" type="text" value="{{$user->name}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Adress</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" name="address" type="text" value="{{$user->address}}">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Phone</label>
                                    <div class="col-lg-8">
                                        <input class="form-control"  name="phone" type="text" value="{{$user->phone}}">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-primary" value="Save Changes">
                                        <span></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="tab-pane fade in" id="tab3">
                <h3>This is tab 3</h3>
            </div>
        </div>
    </div>

</div>


</body>

<script src="js/profile.js"></script>

</html>