
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
        </ul>
    </div>
    <form id="Form" method="post" action="/createQuestionnaire/{{$id}}">
    {{csrf_field()}}        <!--  General -->

        <div class="col-sm-8 rightBody">
            <div class="ThirdSection grid__item color-1  wow zoomInUp" data-wow-delay="1s" >
                <h2 style="text-align: right;" class="question">استمارة الاشتراك في المعسكر </h2>
                <p style="text-align: right;">كلما زادت المعلومات والبيانات التي نتلقاها منك قبل بدء المعسكر، كلما زادت الفائدة التي يمكننا أن نقدمها لك. ولكن إذا كنت لا تريد أن تجيب عن بعض الأسئلة فسوف نتفهم. وعلي اي حال ان كل البيانات والمعلومات ستبقى سرية.</p>
                <div class="switch-field">
                    <div class="switch-title">هل انت مدخن؟</div>

                    <div class="yesNo">
                        <input type="radio" id="switch_left" name="question_one" value="yes" checked/>
                        <label for="switch_left">نعم</label>
                        <input type="radio" id="switch_right" name="question_one" value="no" />
                        <label for="switch_right">لا</label>
                    </div>
                </div>
                <div class="switch-field">
                    <div class="switch-title">هل تشرب الخمر؟</div>
                    <div class="yesNo">
                        <input type="radio" id="switch_left2" name="question_two" value="yes" checked/>
                        <label for="switch_left2">نعم</label>
                        <input type="radio" id="switch_right2" name="question_two" value="no" />
                        <label for="switch_right2">لا</label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="input-title" for="">كم عدد الوجبات التي تأكلها في اليوم؟</label>
                    <input type="number" name="question_three" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="input-title" for="">كم عدد المرات التي تأكل فيها اكل غير صحي/تأكل خارج المنزل؟</label>
                    <input type="number" name="question_four" class="form-control"required>
                </div>
                <div class="form-group">
                    <label class="input-title" for="">
                        هل عندك اي حساسية/مشكلات صحية من اي أطعمة؟ان كان لديك، برجاء الإيضاح</label>
                    <textarea class="form-control" name="question_five" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label class="input-title" for="">هل هناك اي اطعمة لا تحب/لن تستطيع تناولها؟</label>
                    <textarea class="form-control" name="question_six" rows="5" required></textarea>
                </div>
                <div class="switch-field">
                    <div class="switch-title">*هل ستتناول الأطعمة الحارة/الشطة؟</div>
                    <div class="yesNo">
                        <input type="radio" id="switch_left3" name="question_seven" value="yes" checked/>
                        <label for="switch_left3">نعم</label>
                        <input type="radio" id="switch_right3" name="question_seven" value="no" />
                        <label for="switch_right3">لا</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="input-title" for="">كم عدد اكواب الماء التي تشربها في اليوم؟</label>
                    <input type="number" name="question_eight" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="input-title" for="">كم عدد اكواب القهوة التي تشربها في اليوم؟</label>
                    <input type="number" name="question_nine" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="input-title" for="">كم عدد اكواب المياة الغازية التي تشربها في اليوم؟
                    </label>
                    <input type="number" name="question_ten" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="input-title" for="">ما هي كمية الخضروات التي تتناولها في اليوم؟
                    </label>
                    <input type="text" name="question_eleven" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="input-title" for="">ما هي كمية الفواكه التي تتناولها في اليوم؟
                    </label>
                    <input type="text" name="question_twelve" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="input-title" for="">ما هي كمية البروتين التي تتناولها في اليوم؟
                    </label>
                    <input type="text" name="question_thirteen" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="input-title" for="">ما هي كمية الكاربوهيدرات التي تتناولها في اليوم؟
                    </label>
                    <input type="text" name="question_fourteen" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="input-title" for="">ما هي كمية الحلويات التي تتناولها في اليوم؟
                    </label>
                    <input type="text" name="question_fifteen" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="input-title" for=""> برجاء كتابة نوع الأطعمة التي تتناولها في وجباتك في يومك العادي الإفطار - الغداء - العشاء - الوجبات الخفيفة</label>
                    <textarea class="form-control" name="question_sixteen" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label class="input-title" for="">هل يوجد اي معلومات اخري تريد اضافتها؟</label>
                    <textarea class="form-control" name="question_seventeen" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label class="input-title" for="">هل تقوم بأي تدريبات الأن؟ (ان كنت تقوم بتدريبات، فبرجاء ذكرها وذكر الكم)</label>
                    <textarea class="form-control" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label class="input-title" for="">هل كنت تمارس اي تدريبات في الماضي؟ (ان كنت قد قمت بتدريبات في الماضي، فبرجاء ذكرها)</label>
                    <textarea class="form-control" rows="5" required></textarea>
                </div>
                <div class="switch-field">
                    <div class="switch-title">*هل سبق ان قال لك الطبيب ان لديك مشكلة تتعلق بالقلب وانك لا تستطيع ممارسة الرياضة الا تحت اشراف الطبيب؟</div>
                    <div class="yesNo">
                        <input type="radio" id="switch_left4" name="switch_4" value="yes" checked/>
                        <label for="switch_left4">نعم</label>
                        <input type="radio" id="switch_right4" name="switch_4" value="no" />
                        <label for="switch_right4">لا</label>
                    </div>
                </div>
                <div class="switch-field">
                    <div class="switch-title">*هل تشعر بألم في الصدر عند القيام بمجهود؟</div>
                    <div class="yesNo">
                        <input type="radio" id="switch_left5" name="switch_5" value="yes" checked/>
                        <label for="switch_left5">نعم</label>
                        <input type="radio" id="switch_right5" name="switch_5" value="no" />
                        <label for="switch_right5">لا</label>
                    </div>
                </div>
                <div class="switch-field">
                    <div class="switch-title">هل تشعر احيانا بعدم اتزان/دوران؟</div>
                    <div class="yesNo">
                        <input type="radio" id="switch_left6" name="switch_6" value="yes" checked/>
                        <label for="switch_left6">نعم</label>
                        <input type="radio" id="switch_right6" name="switch_6" value="no" />
                        <label for="switch_right6">لا</label>
                    </div>
                </div>
                <div class="switch-field">
                    <div class="switch-title">*هل لديك اي مشكلات في المفاصل والتي من الممكن ان تسوء حالتها اذا قمت بممارسة الرياضة؟</div>
                    <div class="yesNo">
                        <input type="radio" id="switch_left7" name="switch_7" value="yes" checked/>
                        <label for="switch_left7">نعم</label>
                        <input type="radio" id="switch_right7" name="switch_7" value="no" />
                        <label for="switch_right7">لا</label>
                    </div>
                </div>
                <div class="switch-field">
                    <div class="switch-title">*هل تعاني من الارتفاع/الانخفاض في ضغط الدم؟</div>
                    <div class="yesNo">
                        <input type="radio" id="switch_left8" name="switch_8" value="yes" checked/>
                        <label for="switch_left8">نعم</label>
                        <input type="radio" id="switch_right8" name="switch_8" value="no" />
                        <label for="switch_right8">لا</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="input-title" for="">هل تتعاطي اي ادوية يجب علينا"Chefox" *معرفتها؟ (ان كنت تتعاطي الأدوية، فبرجاء ذكرها بالأدني)</label>
                    <textarea class="form-control" rows="5" required></textarea>
                </div>
                <div class="switch-field">
                    <div class="switch-title">هل انت حامل في اخر 6 شهور؟*</div>
                    <div class="yesNo">
                        <input type="radio" id="switch_left9" name="switch_9" value="yes" checked/>
                        <label for="switch_left9">نعم</label>
                        <input type="radio" id="switch_right9" name="switch_9" value="no" />
                        <label for="switch_right9">لا</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="input-title" for=""> اذا كنت قد قمت بعمل اي عمليات فبرجاء ذكرها هنا؟هل قمت بعمل اي عمليات جراحية صغيرة/كبيرة يجب علينا معرفتها.</label>
                    <textarea class="form-control" rows="5" required></textarea>
                </div>
                <div class="switch-field">
                    <div class="switch-title">هل هناك اي سبب يمنعك من ممارسة الرياضة والقيام بالتدريبات؟*</div>
                    <div class="yesNo">
                        <input type="radio" id="switch_left10" name="switch_10" value="yes" checked/>
                        <label for="switch_left10">نعم</label>
                        <input type="radio" id="switch_right10" name="switch_10" value="no" />
                        <label for="switch_right10">لا</label>
                    </div>
                </div>
            </div>
            <button style="margin-left: 38%;" class="btn btn-success" type="submit">
                Finish
            </button>
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

<script src="/js/index.js"></script>


<script src="/js/popUp.js"></script>
<script src="/js/squad.js"></script>

</body>

</html>

