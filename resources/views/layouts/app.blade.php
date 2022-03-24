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
            <div id="demo-1" data-zs-src='["images/hero.jpg"]' data-zs-overlay="dots">
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
                                        <li data-id="1"><a href="{{ url('products/detail/SPT-Home/1') }}"><span>SPT-Home</span></a></li>
                                        <li><a href="#"><span>SPT-Mini</span></a></li>
                                        <li><a href="#"><span>SPT-30 Series</span></a></li>
                                        <li><a href="#"><span>SPT-35 Series</span></a></li>
                                        <li><a href="#"><span>SPT-50 Series</span></a></li>
                                        <li><a href="#"><span>SPT-60F</span></a></li>
                                        <li><a href="#"><span>SP-4EL</span></a></li>
                                       <li class="last"><a href="#"><span>QP-15F</span></a></li>
                                     </ul>
                                 </li>

                                 <li><a href="{{ url('products/Salaat Clock/2') }}">Salaat Clock<i class="glyphicon glyphicon-triangle-bottom"> </i></a>
                                    <ul>
                                    <li><a href="#">SC-106P</a></li>
                                    <li><a href="#">SC-106MMD</a></li>
                                    <li><a href="#">SC-106AT</a></li>
                                    <li><a href="#">SC-206AT</a></li>
                                    <li><a href="#">SC-206MMD</a></li>
                                    <li><a href="#">SC-306MMD</a></li>
                                    <li><a href="#">SC-4i</a></li>
                                    <li><a href="#">SC-106J Jumbo</a></li>
                                    <li><a href="#">SC-8i</a></li>
                                    </ul>
                                 </li>
                                  <li><a href="{{ url('products/Plain Clock/3') }}">Plain Clock<i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
                                    <ul>
                                      <li><a href="#">PC-8i LED</a></li>
                                      <li><a href="#">PC-10i S LED</a></li>
                                      <li><a href="#">PC-15i LED</a></li>

                                   </ul>
                                 </li>

                                 <li><a href="{{ url('products/Plain Clock MX/4') }}">Plain Clock MX<i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
                                  <ul>
                                    <li><a href="#">PC-MX12</a></li>
                                    <li><a href="#">PC-MX12TH</a></li>
                                    <li><a href="#">PC-MX18x35</a></li>
                                    <li><a href="#">PC-2i</a></li>
                                    <li><a href="#">Urdu Clock</a></li>
                                 </ul>
                               </li>


                               <li><a href="{{ url('products/Classic Intecom/5') }}">Classic Intecom<i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
                                  <ul>
                                    <li><a href="#">IC-16</a></li>
                                    <li><a href="#">IC-64E</a></li>

                                 </ul>
                               </li>

                               <li><a href="{{ url('products/Salat Panel LED/6') }}">Salat Panel LED<i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
                                  <ul>
                                    <li><a href="#">SP-50 LED</a></li>
                                    <li><a href="#">SP-60 LED</a></li>

                                 </ul>
                               </li>

                               <li><a href="{{ url('products/Panel Horizontal/7') }}">Panel Horizontal <i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
                                  <ul>
                                    <li><a href="#">SP-24H LED</a></li>
                                    <li><a href="#">SP-30H LED</a></li>
                                    <li><a href="#">SP-40H MX</a></li>

                                 </ul>
                               </li>

                               <li><a href="{{ url('products/Jamat Next/8') }}">Jamat Next<i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
                                  <ul>
                                    <li><a href="#">SCH-15</a></li>
                                    <li><a href="#">SPN-30H LED</a></li>


                                 </ul>
                               </li>


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
