<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/zoomslider.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/component.css') }}" />
    <script type="text/javascript" src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    <!--/web-fonts-->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
    <!--//web-fonts-->

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> --}}

    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<style>

    .notification {
      color: white;
      text-decoration: none;
      position: relative;
      display: inline-block;
      border-radius: 2px;
    }

    .notification:hover {
      /* background: red; */
    }

    .notification .badge {
      position: absolute;
      top: -10px;
      right: -10px;
      padding: 5px 10px;
      border-radius: 50%;
      background-color: red;
      color: white;
    }

    </style>
<body>
    <div id="app">
        <main class="py-4">
            <div id="demo-1" data-zs-src='["images/hero.jpg" , "images/hero2.jpg" , "images/hero.jpg"]' data-zs-overlay="dots">
                <div class="demo-inner-content">
                   <div class="header-top">
                        <!-- /header-left -->
		                <div class="header-left">
                            <!-- /sidebar -->
                          <div id="sidebar">
                               <h4 class="menu">Menu</h4>
                                    <ul>
                                  <li><a href="{{ url('products/Salaat Panel/1') }}">Salaat Panel<i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
                                    <ul id="cateogries">
                                        @foreach ($salaatPanel as $salaat)
                                            <li><a href="products/detail/{{ $salaat['sub_name'] }}/{{ $salaat['sub_id'] }}"><span>{{ $salaat['sub_name'] }}</span></a></li>
                                        @endforeach
                                     </ul>
                                 </li>

                                 <li><a href="{{ url('products/Salaat Panel Horizontal/2') }}">Salaat Panel Horizontal <i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
                                    <ul>
                                        @foreach ($salaatPanelHorizental as $salaatPanel)
                                        <li><a href="products/detail/{{ $salaatPanel['sub_name'] }}/{{ $salaatPanel['sub_id'] }}"><span>{{ $salaat['sub_name'] }}</span></a></li>
                                        @endforeach
                                   </ul>
                                 </li>

                                 <li><a href="{{ url('products/Salaat Panel Vertical/3') }}">Salaat Panel Vertical<i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
                                    <ul>
                                        @foreach ($salaatPanelVertical as $salaatPanelVerticals)
                                        <li><a href="products/detail/{{ $salaatPanelVerticals['sub_name'] }}/{{ $salaatPanelVerticals['sub_id'] }}"><span>{{ $salaat['sub_name'] }}</span></a></li>
                                        @endforeach
                                   </ul>
                                 </li>

                                 <li><a href="{{ url('products/Salaat Panel With Quran & Azan/4') }}">Salaat Panel With Quran & Azan <i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
                                    <ul>
                                        @foreach ($SalaatPanelWithQuranAzan as $SalaatPanelWithQuranAzans)
                                        <li><a href="products/detail/{{ $SalaatPanelWithQuranAzans['sub_name'] }}/{{ $SalaatPanelWithQuranAzans['sub_id'] }}"><span>{{ $salaat['sub_name'] }}</span></a></li>
                                        @endforeach
                                   </ul>
                                 </li>

                                 <li><a href="{{ url('products/Jamaat Next Change Panel/5') }}">Jamaat Next Change Panel<i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
                                    <ul>
                                        @foreach ($JamaatNextChangePanel as $JamaatNextChangePanels)
                                        <li><a href="products/detail/{{ $JamaatNextChangePanels['sub_name'] }}/{{ $JamaatNextChangePanels['sub_id'] }}"><span>{{ $salaat['sub_name'] }}</span></a></li>
                                        @endforeach
                                   </ul>
                                 </li>

                                 <li><a href="{{ url('products/Salaat Clock/6') }}">Salaat Clock<i class="glyphicon glyphicon-triangle-bottom"> </i></a>
                                    <ul>
                                        @foreach ($SalaatClock as $SalaatClocks)
                                        <li><a href="products/detail/{{ $SalaatClocks['sub_name'] }}/{{ $SalaatClocks['sub_id'] }}"><span>{{ $salaat['sub_name'] }}</span></a></li>
                                        @endforeach
                                    </ul>
                                 </li>

                                 <li><a href="{{ url('products/Salaat Clock With Quran & Azan/7') }}">Salaat Clock With Quran & Azan<i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
                                    <ul>
                                        @foreach ($SalaatClockWithQuranAzan as $SalaatClockWithQuranAzans)
                                        <li><a href="products/detail/{{ $SalaatClockWithQuranAzans['sub_name'] }}/{{ $SalaatClockWithQuranAzans['sub_id'] }}"><span>{{ $salaat['sub_name'] }}</span></a></li>
                                        @endforeach
                                   </ul>
                                 </li>


                                  <li><a href="{{ url('products/Plain Clock/8') }}">Plain Clock<i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
                                    <ul>
                                        @foreach ($PlainClock as $PlainClocks)
                                        <li><a href="products/detail/{{ $PlainClocks['sub_name'] }}/{{ $PlainClocks['sub_id'] }}"><span>{{ $salaat['sub_name'] }}</span></a></li>
                                        @endforeach
                                   </ul>
                                 </li>

                                 <li><a href="{{ url('products/Plain Clock Outdoor/9') }}">Plain Clock Outdoor<i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
                                    <ul>
                                        @foreach ($PlainClockOutdoor as $PlainClockOutdoors)
                                        <li><a href="products/detail/{{ $PlainClockOutdoors['sub_name'] }}/{{ $PlainClockOutdoors['sub_id'] }}"><span>{{ $salaat['sub_name'] }}</span></a></li>
                                        @endforeach
                                   </ul>
                                 </li>

                                 <li><a href="{{ url('products/Plain Clock MX Outdoor/10') }}">Plain Clock MX<i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
                                  <ul>
                                    @foreach ($PlainClockMXOutdoor as $PlainClockMXOutdoors)
                                    <li><a href="products/detail/{{ $PlainClockMXOutdoors['sub_name'] }}/{{ $PlainClockMXOutdoors['sub_id'] }}"><span>{{ $salaat['sub_name'] }}</span></a></li>
                                    @endforeach
                                 </ul>
                               </li>


                               <li><a href="{{ url('products/Salaat Clock With Quran & Azannn/11') }}">Salaat Clock With Quran & Azannn<i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
                                  <ul>
                                      @foreach ($SalaatClockWithQuranAzannn as $SalaatClockWithQuranAzannns)
                                        <li><a href="products/detail/{{ $SalaatClockWithQuranAzannns['sub_name'] }}/{{ $SalaatClockWithQuranAzannns['sub_id'] }}"><span>{{ $salaat['sub_name'] }}</span></a></li>
                                      @endforeach
                                 </ul>
                               </li>


                               <li><a href="{{ url('products/Apartment Intercom/12') }}">Apartment Intercom<i class="glyphicon glyphicon-triangle-bottom"> </i> </a></li>
                               <li><a href="{{ url('products/PABX/13') }}">PABX<i class="glyphicon glyphicon-triangle-bottom"> </i> </a></li>
                               <li><a href="{{ url('products/School Timer/14') }}">School Timer<i class="glyphicon glyphicon-triangle-bottom"> </i> </a></li>
                               <li><a href="{{ url('products/Gold Rate/15') }}">Gold Rate<i class="glyphicon glyphicon-triangle-bottom"> </i> </a></li>
                               <li><a href="{{ url('products/Home Water Management/16') }}">Home Water Management<i class="glyphicon glyphicon-triangle-bottom"> </i> </a></li>
                               <li><a href="{{ url('products/Home & Office Time Products/17') }}">Home & Office Time Products<i class="glyphicon glyphicon-triangle-bottom"> </i> </a></li>
                               <li><a href="{{ url('products/Outdoor Time Products/18') }}">Outdoor Time Products<i class="glyphicon glyphicon-triangle-bottom"> </i> </a></li>
                               <li><a href="{{ url('contact-us') }}">Contact Us<i class="glyphicon glyphicon-triangle-bottom"> </i> </a></li>

                              </ul>
                             <div id="sidebar-btn">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                             </div>
                         </div>
                        </div>
                        <!-- //header-left -->
                             <div class="search-box">
                                <div id="sb-search" class="sb-search">
                                    {{-- <form action="#" method="post">
                                        <input name="name" class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
                                        <input class="sb-search-submit" type="submit" value="">
                                        <span class="sb-icon-search"> </span>
                                    </form> --}}
                                </div>
                                    <!-- search-scripts -->
                                    <script src="js/classie.js"></script>
                                    <script src="js/uisearch.js"></script>
                                    <script>
                                        new UISearch( document.getElementById( 'sb-search' ) );
                                    </script>
                                    <!-- //search-scripts -->
                                <ul>
                                         {{-- <li><a href="#" data-toggle="modal" data-target="#myModal4"><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Select Your Location</a></li> --}}

                                    <li>
                                         <button id="showRight" class="navig">
                                            <a href="{{ route('cart') }}" class="notification">
                                                <span><i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i></span>
                                                <span class="badge">{{ count((array) session('cart')) }}</span>
                                            </a>
                                         </button>

                                        <div class="cbp-spmenu-push">
                                           {{-- <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
                                            <h3>Login</h3>
                                                <div class="login-inner">
                                                    <div class="login-top">
                                                    <form action="#" method="post">
                                                        <input type="text" name="email" class="email" placeholder="Email" required=""/>
                                                        <input type="password" name="password" class="password" placeholder="Password" required=""/>
                                                        <input type="checkbox" id="brand" value="">
                                                        <label for="brand"><span></span> Remember me</label>
                                                    </form>
                                                    <div class="login-bottom">
                                                        <ul>
                                                            <li>
                                                                <a href="#">Forgot password?</a>
                                                            </li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="submit" value="LOGIN"/>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="social-icons">
                                                    <ul>
                                                        <li><a href="#"><span class="icons"></span><span class="text">Facebook</span></a></li>
                                                        <li class="twt"><a href="#"><span class="icons"></span><span class="text">Twitter</span></a></li>
                                                        <li class="ggp"><a href="#"><span class="icons"></span><span class="text">Google+</span></a></li>
                                                    </ul>
                                                </div>
                                                </div>
                                           </nav> --}}
                                        </div>

                                        <!--Navigation from Right To Left-->
                                    </li>
                                </ul>

                            </div>

                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        <!--banner-info-->
                        <div class="banner-info">
                            <h1><a href="#">Systems <span class="logo-sub">Integration</span> </a></h1>
                            <h2><span>COME LOOK </span> <span>AT THE SELECTION! </span></h2>
                            <p>Eye it – try it – buy it!</p>
                        </div>
                        <!--//banner-info-->
                </div>
            </div>
        <!-- discounts-->
            @yield('content')
        </main>
    </div>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=3360837535" class="whatsappIcon" target="_blank">
    <i class="fa fa-whatsapp whatsappIcon-float"></i>
    </a>


</body>
</html>

<script src="js/classie2.js"></script>
<script>
    var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
        showRight = document.getElementById( 'showRight' ),
        body = document.body;

    showRight.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( menuRight, 'cbp-spmenu-open' );
        disableOther( 'showRight' );
    };

    function disableOther( button ) {
        if( button !== 'showRight' ) {
            classie.toggle( showRight, 'disabled' );
        }
    }
</script>
<script>
    var sidebarbtn = document.getElementById('sidebar-btn');
    var sidebar = document.getElementById('sidebar');
    sidebarbtn.addEventListener('click', function () {
        if(sidebar.classList.contains('visible')){
            sidebar.classList.remove('visible');
        }else {
            sidebar.className = 'visible';
        }
    });
</script>
