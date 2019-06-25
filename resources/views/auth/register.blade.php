<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Register | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="">
    <!-- Bootstrap CSS
        ============================================ -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/css/bootstrap.min.css')}}">
    <!-- font awesome CSS
        ============================================ -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
        ============================================ -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/css/owl.carousel.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/css/owl.theme.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/css/owl.transitions.css')}}">
    <!-- meanmenu CSS
        ============================================ -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/css/meanmenu/meanmenu.min.css')}}">
    <!-- animate CSS
        ============================================ -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/css/animate.css')}}">
    <!-- normalize CSS
        ============================================ -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/css/normalize.css')}}">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- Notika icon CSS
        ============================================ -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/css/notika-custom-icon.css')}}">
    <!-- wave CSS
        ============================================ -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/css/wave/waves.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/css/wave/button.css')}}">
    <!-- main CSS
        ============================================ -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/css/main.css')}}">
    <!-- style CSS
        ============================================ -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/css/style.css')}}">
    <!-- responsive CSS
        ============================================ -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/css/responsive.css')}}">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{asset('js/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Login Register area Start-->
    <div class="login-content">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
            <div class="nk-form">
                <form method="POST" action="{{ route('register') }}">
                        @csrf
                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                    <div class="nk-int-st">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nome" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                </div>

                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
                    <div class="nk-int-st">
                         <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                </div>

                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                    <div class="nk-int-st">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Senha" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>
                </div>

            </div>

            <div class="nk-navigation rg-ic-stl">
                <a href="{{route('login')}}" data-ma-action="nk-login-switch" data-ma-block="#l-login"><i class="notika-icon notika-right-arrow"></i> <span>Sign in</span></a>
               <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
            </div>
        </div>

        <!-- Register -->
        <div class="nk-block" id="l-register">
            <div class="nk-form">
                <form method="POST" action="{{ route('register') }}">
                        @csrf
                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                    <div class="nk-int-st">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                </div>

                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
                    <div class="nk-int-st">
                         <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                </div>

                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                    <div class="nk-int-st">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>
                </div>

                <a href="#l-login" data-ma-action="nk-login-switch" data-ma-block="#l-login" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow"></i></a>
            </div>

            <div class="nk-navigation rg-ic-stl">
                <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-login"><i class="notika-icon notika-right-arrow"></i> <span>Sign in</span></a>
               <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
            </div>
        </div>

        <!-- Forgot Password -->
        
    </div>
    <!-- Login Register area End-->
    <!-- jquery
        ============================================ -->
    <script src="{{asset('js/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{asset('js/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
        ============================================ -->
    <script src="{{asset('js/js/wow.min.js')}}"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="{{asset('js/js/jquery-price-slider.js')}}"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="{{asset('js/js/owl.carousel.min.js')}}"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{asset('js/js/jquery.scrollUp.min.js')}}"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{asset('js/js/meanmenu/jquery.meanmenu.js')}}"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="{{asset('js/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('js/js/counterup/counterup-active.js')}}"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{asset('js/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="{{asset('js/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('js/js/sparkline/sparkline-active.js')}}"></script>
    <!-- flot JS
        ============================================ -->
    <script type="text/javascript" src="{{asset('js/js/flot/jquery.flot.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/js/flot/jquery.flot.resize.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/js/flot/flot-active.js')}}"></script>
    <!-- knob JS
        ============================================ -->
    <script type="text/javascript" src="{{asset('js/js/knob/jquery.knob.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/js/knob/jquery.appear.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/js/knob/knob-active.js')}}"></script>
    <!--  wave JS
        ============================================ -->
    <script type="text/javascript" src="{{asset('js/js/wave/waves.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/js/wave/wave-active.js')}}"></script>
    <!-- icheck JS
        ============================================ -->
    <script type="text/javascript" src="{{asset('js/js/icheck/icheck.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/js/icheck/icheck-active.js')}}"></script>
    <!--  Chat JS
        ============================================ -->
    <script type="text/javascript" src="{{asset('js/js/chat/jquery.chat.js')}}"></script>
    <!--  todo JS
        ============================================ -->
    <script type="text/javascript" src="{{asset('js/js/todo/jquery.todo.js')}}"></script>
    <!-- plugins JS
        ============================================ -->
    <script type="text/javascript" src="{{asset('js/js/plugins.js')}}"></script>
    <!-- main JS
        ============================================ -->
    <script type="text/javascript" src="{{asset('js/js/main.js')}}"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script type="text/javascript" src="{{asset('js/js/tawk-chat.js')}}"></script>
</body>

</html>