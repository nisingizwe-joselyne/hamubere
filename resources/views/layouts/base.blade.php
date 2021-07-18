
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bootstrap-ecommerce by Vosidiy">

    <title>Hamubere site</title>

    <link rel="shortcut icon" type="{{asset('frontend/image/x-icon')}}" href="{{asset('frontend/images/favicon.ico')}}">

    <!-- jQuery -->
    <script src="{{asset('frontend/js/jquery-2.0.0.min.js')}}" type="text/javascript"></script>
     <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.0/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.0/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.0/dist/js/uikit-icons.min.js"></script>
    <!-- Bootstrap4 files-->
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <link href="{{asset('frontend/css/bootstrap.css?v=1.0')}}" rel="stylesheet" type="text/css" />

    <!-- Font awesome 5 -->
    <link href="{{asset('frontend/fonts/fontawesome/css/fontawesome-all.min.css')}}" type="text/css" rel="stylesheet">

    <!-- plugin: fancybox  -->
    <script src="{{asset('frontend/plugins/fancybox/fancybox.min.js')}}" type="text/javascript"></script>
    <link href="{{asset('frontend/plugins/fancybox/fancybox.min.css')}}" type="text/css" rel="stylesheet">

    <!-- plugin: owl carousel  -->
    <link href="{{asset('frontend/plugins/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/plugins/owlcarousel/assets/owl.theme.default.css')}}" rel="stylesheet">
    <script src="{{asset('frontend/plugins/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- custom style -->
    <link href="{{asset('frontend/css/ui.css?v=1.0')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="{{asset('frontend/js/script.js')}}" type="text/javascript"></script>

    <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function() {
            // jQuery code

        });
        // jquery end
    </script>

</head>

<body>
    <header class="section-header bg-dark">
        <section class="header-main">
            <div class="container bg-secondary">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="brand-wrap">
                            <img class="logo" src="{{asset('frontend/images/logo-dark.png')}}">
                            <h2 class="logo-text">Hamubere</h2>
                        </div>
                        <!-- brand-wrap.// -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                       
                        <!-- search-wrap .end// -->
                    </div>
                    <!-- col.// -->
        <div class="col-lg-3 col-sm-6">
                        <!-- widgets-wrap.// -->
                    </div>
                    <!-- col.// -->
                </div>
                <!-- row.// -->
            </div>
            <!-- container.// -->
        </section>
        <!-- header-main .// -->

        <nav class="navbar navbar-expand-lg ">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white hover-text-danger" href="/"><strong>Home</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><strong>About us</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><strong>Delivery</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><strong>Secure Payments</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><strong>Contact us</strong></a>
                        </li>
                    </ul>
                </div>
 <div class="row d-flex widget-header">
                <!-- cart session -->
               <div class="col-lg-6 col-sm-6">
                <div class="dropdown ">
                   <button type="button" class="btn btn-primary" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                   </button>
                  <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                        </div>
                        <?php $total = 0 ?>
                        @foreach((array) session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity'] ?>
                        @endforeach
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                        </div>
                    </div>
                        @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                             <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="{{ $details['photo'] }}" />
                                </div>
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-product">
                                    <p>{{ $details['name'] }}</p>
                                    <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-4 delete-product">
                                  <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{$id}}"><i class="fa fa-trash-o">delete</i></button>   
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                  </div>
                  </div>    
                 </div>
                 </div> 
                 </div>
                    <!-- auth session -->
                    <div class="col-lg-6 col-sm-6">
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
        </div>

                <!-- collapse .// -->
        </div>
            <!-- container .// -->
        </nav>

<div class="container bg-secondary-dark">
    <div class="row align-items-center p-2 ">
     <div class="col-lg-3">
                        <form action="#" class="search-wrap">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="">
                    <div class="input-group-append">
                         <div class="nav-item dropdown rounded-lg border-solid border-2">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>All Categories</strong></a>
                        
                         <div class="dropdown-menu p-4" aria-labelledby="dropdown07">
                                <a class="dropdown-item" href="">Electronics</a>
                                <a class="dropdown-item" href="">Furniture</a>
                                <a class="dropdown-item" href="">Fashion</a>
                                <a class="dropdown-item" href="">Shoes</a>
                                <a class="dropdown-item" href="">Electronics</a>
                                <a class="dropdown-item" href="">Furniture</a>
                                <a class="dropdown-item" href="">Fashion</a>
                                <a class="dropdown-item" href="">Shoes</a>
                            </div>
                        
                        </div>    
                    </div>
                 </div> 
                        </form>
                        <!-- search-wrap .end// -->
       </div>
   <!-- second division -->
         <div class="col-lg-9 col-sm-9">
                        <form action="#" class="search-wrap">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- search-wrap .end// -->
                    </div>

    </div>
    </div>   

    </header>
    @yield('index')
    @yield('categorydetail') 
    @yield('productdetail') 
    @yield('blogdetails')
    @yield('content')
    @yield('contentcart')
    @yield('checkoutcontent')
    <footer class="section-footer bg-dark white">
        <div class="container">
            <section class="footer-top padding-top">
                <div class="row">
                    <aside class="col-sm-3 col-md-3 white">
                        <h5 class="title">Customer Services</h5>
                        <ul class="list-unstyled">
                            <li> <a href="#">Help center</a></li>
                            <li> <a href="#">Money refund</a></li>
                            <li> <a href="#">Terms and Policy</a></li>
                            <li> <a href="#">Open dispute</a></li>
                        </ul>
                    </aside>
                    <aside class="col-sm-3  col-md-3 white">
                        <h5 class="title">My Account</h5>
                        <ul class="list-unstyled">
                            <li> <a href="#"> User Login </a></li>
                            <li> <a href="#"> User register </a></li>
                            <li> <a href="#"> Account Setting </a></li>
                            <li> <a href="#"> My Orders </a></li>
                            <li> <a href="#"> My Wishlist </a></li>
                        </ul>
                    </aside>
                    <aside class="col-sm-3  col-md-3 white">
                        <h5 class="title">About</h5>
                        <ul class="list-unstyled">
                            <li> <a href="#"> Our history </a></li>
                            <li> <a href="#"> How to buy </a></li>
                            <li> <a href="#"> Delivery and payment </a></li>
                            <li> <a href="#"> Advertice </a></li>
                            <li> <a href="#"> Partnership </a></li>
                        </ul>
                    </aside>
                    <aside class="col-sm-3">
                        <article class="white">
                            <h5 class="title">Contacts</h5>
                            <p>
                                <strong>Phone: </strong> +250799776553
                                <br>
                                <strong>Fax:</strong> +25073123456
                            </p>

                            <div class="btn-group white">
                                <a class="btn btn-facebook" title="Facebook" target="_blank" href="#"><i class="fab fa-facebook-f  fa-fw"></i></a>
                                <a class="btn btn-instagram" title="Instagram" target="_blank" href="#"><i class="fab fa-instagram  fa-fw"></i></a>
                                <a class="btn btn-youtube" title="Youtube" target="_blank" href="#"><i class="fab fa-youtube  fa-fw"></i></a>
                                <a class="btn btn-twitter" title="Twitter" target="_blank" href="#"><i class="fab fa-twitter  fa-fw"></i></a>
                            </div>
                        </article>
                    </aside>
                </div>
                <!-- row.// -->
                <br>
            </section>
            <!-- //footer-top -->
        </div>
        <!-- //container -->
    </footer>
    <!-- ========================= FOOTER END // ========================= -->
@yield('scripts')
</body>

</html>