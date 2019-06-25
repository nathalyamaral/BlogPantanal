<!DOCTYPE html>
<html>
<head>
    <title>Lockscreen | Admire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{asset('admin/assets/img/logo1.ico')}}"/>
    <!-- Global styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('admin/assets/css/components.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('admin/assets/css/custom.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('admin/assets/css/pages/login.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('admin/assets/vendors/wow/css/animate.css')}}"/>
    <!--End of global styles-->
    <link rel="stylesheet" href="{{asset('admin/assets/css/pages/lockscreen.css')}}"/>
</head>
<body>
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="{{asset('admin/assets/img/loader.gif')}}" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div>
    <div class="login-container fadeInDown">
        <div class="row">
            <div class="col-lg-12 login_border_radius1 lockscreen_img">
                <div id="output"></div>
                <p></p>

                <div class="avatar"></div>
                <p></p>
            </div>
            <div class="col-lg-12 login_border_radius lockscreen_content">
                <div class="form-box">
                    <form method="POST"  action="{{ route('admin.login.unlock') }}">
                        @csrf
                        <div class="form">
                            <p class="form-control-static">{{ collect(explode(' ', ucwords(strtolower(Auth::user()->name))))->slice(0, 1)->implode(' ')}}</p>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <button class="btn btn-primary btn-block" type="submit">GO</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script type="text/javascript" src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/vendors/wow/js/wow.min.js')}}"></script>
<!-- end of global js-->
<!-- page level js-->
<script type="text/javascript" src="{{asset('admin/assets/js/pages/lockscreen.js')}}"></script>
</body>

</html>