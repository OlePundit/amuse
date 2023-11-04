<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    


 
    <!-- Scripts -->
    @vite(['resources/sass/app.scss','resources/css/app.css', 'resources/js/app.js'])
    @yield('scripts')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/storage/pink-final.png" width="96">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Camps
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/summer-camp">Amuse Summer Camp</a></li>
                            <li><a class="dropdown-item" href="/public-holiday-camps">Public holiday camps</a></li>
                            <li><a class="dropdown-item" href="/random-days">Random days</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/birthday-packages">Birthday packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/school-packages">School packages</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Weekends
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/saturday-camp">Saturday camp</a></li>
                            <li><a class="dropdown-item" href="/tamasha-bustani">Tamasha Bustani</a></li>
                            <li><a class="dropdown-item" href="/yoga-for-adults">Yoga for adults</a></li>
                            <li><a class="dropdown-item" href="/outdoor-gym">Outdoor gym</a></li>
                            <li><a class="dropdown-item" href="/bootcamp-challenges">Boot camp challenges</a></li>
                            <li><a class="dropdown-item" href="/mountain-biking">Mountain biking</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/archery">Archery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/adventures">Adventures</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/obstacle-course">Obstacle course</a>
                        </li>
                    </ul>
                   

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        @if(Auth::user())
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="/profile/{{ Auth::user()->id }}">Dashboard</a>
                        </div>
                        @endif
                        @auth

                        @if(Auth::user()->role_id === 3 )                        
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="/coach_dashboard">Coach Dashboard</a>
                        </div>       
                        @endif
                        @endauth
                        <li class="nav-item">
                            <a class="nav-link" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/booking/create">Book Now!</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact us</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
        <footer>
            <div class="footer-content">
                <div class="quick-links">
                    <img src="/storage/pink-final.png" width="96">
                    <ul class="links-list" style="list-style-type:none;">
                        <li>Home</li>
                        <li>Blog</li>
                        <li>About us</li>
                        <li>Contact us</li>
                        <li>Privacy policy</li>

                    </ul>

                </div>
                <div class="CTA">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12 col-md-12">
                            <h5>Subscribe to our news letter to get latest updates and news</h5>

                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12 col-md-12 newsletter">
                            <form class="d-flex">
                                <input class="form-control" placeholder="Enter your email">
                                <button>Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="contacts">
                    <div class="contact-info">
                        <div class="frame-10">
                            <ul class="location" style="list-style-type:none;">
                                <li>Amuse Kenya LTD</li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewBox="0 0 4 4" fill="none">
                                <circle cx="2" cy="2" r="2" fill="#FBFCFA" fill-opacity="0.2"/>
                                </svg></li>
                                <li>0100800</li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewBox="0 0 4 4" fill="none">
                                <circle cx="2" cy="2" r="2" fill="#FBFCFA" fill-opacity="0.2"/>
                                </svg></li>
                                <li>Nairobi</li>
                            </ul>
                            <ul class="location" style="list-style-type:none;">
                                <li>Hello@amuseKE.com</li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewBox="0 0 4 4" fill="none">
                                <circle cx="2" cy="2" r="2" fill="#FBFCFA" fill-opacity="0.2"/>
                                </svg></li>
                                <li>070 7993 2905</li>                               
                            </ul>
                            <div class="copyright">
                            Copyright  - 2023 - Amuse Kenya
                            </div>
                        </div>
                        <div class="social-links">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <g clip-path="url(#clip0_578_240)">
                                <path d="M15.9283 8C15.9283 3.58172 12.4809 0 8.22832 0C3.97572 0 0.52832 3.58172 0.52832 8C0.52832 11.993 3.34408 15.3027 7.0252 15.9028V10.3125H5.07012V8H7.0252V6.2375C7.0252 4.2325 8.17478 3.125 9.9336 3.125C10.7758 3.125 11.6572 3.28125 11.6572 3.28125V5.25H10.6863C9.72982 5.25 9.43145 5.86672 9.43145 6.5V8H11.567L11.2256 10.3125H9.43145V15.9028C13.1126 15.3027 15.9283 11.993 15.9283 8Z" fill="#FBFCFA" fill-opacity="0.7"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_578_240">
                                <rect width="15.4" height="16" fill="white" transform="translate(0.52832)"/>
                                </clipPath>
                            </defs>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <g clip-path="url(#clip0_578_242)">
                                <path d="M5.43843 14.5005C11.2483 14.5005 14.427 9.49829 14.427 5.16173C14.427 5.0211 14.424 4.87735 14.418 4.73673C15.0363 4.27213 15.5699 3.69666 15.9937 3.03735C15.4179 3.30356 14.8064 3.47741 14.1803 3.55298C14.8396 3.14243 15.3332 2.49747 15.5696 1.73767C14.9495 2.11953 14.2712 2.3889 13.564 2.53423C13.0875 2.0082 12.4575 1.6599 11.7714 1.54319C11.0852 1.42648 10.3812 1.54786 9.76813 1.88855C9.15505 2.22925 8.66707 2.77029 8.37964 3.42803C8.0922 4.08577 8.02132 4.82357 8.17795 5.52735C6.92218 5.46188 5.69368 5.12296 4.57207 4.53255C3.45047 3.94215 2.4608 3.11345 1.66724 2.10017C1.26391 2.82265 1.14049 3.67759 1.32206 4.49122C1.50364 5.30485 1.97658 6.01612 2.64478 6.48048C2.14314 6.46393 1.65248 6.32361 1.21336 6.0711V6.11173C1.21291 6.86992 1.4652 7.60488 1.92733 8.19167C2.38947 8.77846 3.03293 9.18086 3.74834 9.33048C3.28365 9.46257 2.79594 9.48182 2.32294 9.38673C2.52482 10.0388 2.91759 10.6091 3.44645 11.018C3.97531 11.427 4.61387 11.6542 5.273 11.668C4.15399 12.5812 2.77168 13.0766 1.34871 13.0742C1.09636 13.0738 0.844256 13.0578 0.59375 13.0261C2.03933 13.9897 3.72093 14.5014 5.43843 14.5005Z" fill="#FBFCFA" fill-opacity="0.7"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_578_242">
                                <rect width="15.4" height="16" fill="white" transform="translate(0.59375)"/>
                                </clipPath>
                            </defs>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                            <g clip-path="url(#clip0_578_244)">
                                <path d="M8.36211 1.44062C10.4195 1.44062 10.6631 1.45 11.4722 1.4875C12.2241 1.52187 12.6302 1.65313 12.9009 1.7625C13.2588 1.90625 13.5175 2.08125 13.7852 2.35938C14.0559 2.64062 14.2213 2.90625 14.3597 3.27813C14.465 3.55938 14.5913 3.98438 14.6244 4.7625C14.6605 5.60625 14.6695 5.85938 14.6695 7.99375C14.6695 10.1313 14.6605 10.3844 14.6244 11.225C14.5913 12.0063 14.465 12.4281 14.3597 12.7094C14.2213 13.0813 14.0529 13.35 13.7852 13.6281C13.5145 13.9094 13.2588 14.0813 12.9009 14.225C12.6302 14.3344 12.2211 14.4656 11.4722 14.5C10.6601 14.5375 10.4164 14.5469 8.36211 14.5469C6.30477 14.5469 6.06113 14.5375 5.25203 14.5C4.50008 14.4656 4.09402 14.3344 3.82332 14.225C3.46539 14.0813 3.20672 13.9063 2.93902 13.6281C2.66832 13.3469 2.50289 13.0813 2.36453 12.7094C2.25926 12.4281 2.13293 12.0031 2.09984 11.225C2.06375 10.3813 2.05473 10.1281 2.05473 7.99375C2.05473 5.85625 2.06375 5.60313 2.09984 4.7625C2.13293 3.98125 2.25926 3.55938 2.36453 3.27813C2.50289 2.90625 2.67133 2.6375 2.93902 2.35938C3.20973 2.07812 3.46539 1.90625 3.82332 1.7625C4.09402 1.65313 4.50309 1.52187 5.25203 1.4875C6.06113 1.45 6.30477 1.44062 8.36211 1.44062ZM8.36211 0C6.27168 0 6.01 0.009375 5.18887 0.046875C4.37074 0.084375 3.80828 0.221875 3.32102 0.41875C2.8127 0.625 2.38258 0.896875 1.95547 1.34375C1.52535 1.7875 1.26367 2.23438 1.06516 2.75938C0.875664 3.26875 0.74332 3.85 0.707227 4.7C0.671133 5.55625 0.662109 5.82812 0.662109 8C0.662109 10.1719 0.671133 10.4438 0.707227 11.2969C0.74332 12.1469 0.875664 12.7313 1.06516 13.2375C1.26367 13.7656 1.52535 14.2125 1.95547 14.6562C2.38258 15.1 2.8127 15.375 3.31801 15.5781C3.80828 15.775 4.36773 15.9125 5.18586 15.95C6.00699 15.9875 6.26867 15.9969 8.3591 15.9969C10.4495 15.9969 10.7112 15.9875 11.5323 15.95C12.3505 15.9125 12.9129 15.775 13.4002 15.5781C13.9055 15.375 14.3356 15.1 14.7627 14.6562C15.1898 14.2125 15.4545 13.7656 15.65 13.2406C15.8395 12.7313 15.9719 12.15 16.008 11.3C16.0441 10.4469 16.0531 10.175 16.0531 8.00313C16.0531 5.83125 16.0441 5.55938 16.008 4.70625C15.9719 3.85625 15.8395 3.27188 15.65 2.76562C15.4605 2.23438 15.1989 1.7875 14.7688 1.34375C14.3416 0.9 13.9115 0.625 13.4062 0.421875C12.9159 0.225 12.3565 0.0875 11.5384 0.05C10.7142 0.009375 10.4525 0 8.36211 0Z" fill="#FBFCFA" fill-opacity="0.7"/>
                                <path d="M8.3625 3.89062C6.17883 3.89062 4.40723 5.73125 4.40723 8C4.40723 10.2688 6.17883 12.1094 8.3625 12.1094C10.5462 12.1094 12.3178 10.2688 12.3178 8C12.3178 5.73125 10.5462 3.89062 8.3625 3.89062ZM8.3625 10.6656C6.94582 10.6656 5.79684 9.47188 5.79684 8C5.79684 6.52813 6.94582 5.33437 8.3625 5.33437C9.77918 5.33437 10.9282 6.52813 10.9282 8C10.9282 9.47188 9.77918 10.6656 8.3625 10.6656Z" fill="#FBFCFA" fill-opacity="0.7"/>
                                <path d="M13.3976 3.72793C13.3976 4.25918 12.9825 4.68731 12.4742 4.68731C11.9629 4.68731 11.5508 4.25606 11.5508 3.72793C11.5508 3.19668 11.9659 2.76855 12.4742 2.76855C12.9825 2.76855 13.3976 3.19981 13.3976 3.72793Z" fill="#FBFCFA" fill-opacity="0.7"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_578_244">
                                <rect width="15.4" height="16" fill="white" transform="translate(0.662109)"/>
                                </clipPath>
                            </defs>
                            </svg>

                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
  $( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 3
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 3
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
  </script>
        <script>
  $( function() {
    $( "#date" ).datepicker();
  } );
  </script>
      <script>
  $( function() {
    $( "#dob" ).datepicker();
  } );
  </script>
    <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
      <script>
  $( function() {
    $( "#datepicker1" ).datepicker();
  } );
  </script>    
  <script>
  $( function() {
    $( "#datepicker2" ).datepicker();
  } );
  </script>
        <script>
  $( function() {
    $( "#datepicker3" ).datepicker();
  } );
  </script>
      <script>
  $( function() {
    $( "#datepicker4" ).datepicker();
  } );
  </script>
      <script>
  $( function() {
    $( "#datepicker5" ).datepicker();
  } );
  </script>
      <script>
  $( function() {
    $( "#datepicker6" ).datepicker();
  } );
  </script>
      <script>
  $( function() {
    $( "#datepicker7" ).datepicker();
  } );
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 0,
            loop: true,
            centeredSlides: true,
            grabCursor:true,
            breakpoints: {
                0: {
                slidesPerView: 1,
                },
                500: {
                slidesPerView: 2,
                },
                950: {
                slidesPerView: 3,
                },
                1260: {
                slidesPerView: 4,
                },
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            
        });
    });

  </script>
</body>
</html>
