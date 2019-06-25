@extends('layouts/default') {{-- Page title --}} @section('title') Dashboard @parent @stop {{-- page level styles --}} @section('header_styles')
<!--Plugin styles-->
<link type="text/css" rel="stylesheet" href="{{asset('admin/assets/vendors/c3/css/c3.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('admin/assets/vendors/toastr/css/toastr.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('admin/assets/vendors/switchery/css/switchery.min.css')}}" />
<!--page level styles-->
<link type="text/css" rel="stylesheet" href="{{asset('admin/assets/css/pages/new_dashboard.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/pages/widgets.css')}}">
<!-- end of page level styles -->
@stop {{-- Page content --}} @section('content')
<header class="head">
    <div class="main-bar">
        <div class="row">
            <div class="col-6">
                <h4 class="m-t-5">
                        <i class="fa fa-home"></i>
                        Dashboard
                    </h4>
            </div>
        </div>
    </div>
</header>
<div class="outer">
    <div class="inner bg-container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-12">
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <div class="bg-primary top_cards">
                            <div class="row icon_margin_left">

                                <div class="col-lg-5 col-5 icon_padd_left">
                                    <div class="float-left">
                                        <span class="fa-stack fa-sm">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-shopping-cart fa-stack-1x fa-inverse text-primary sales_hover"></i>
</span>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-7 icon_padd_right">
                                    <div class="float-right cards_content">
                                        <span class="number_val" id="sales_count"></span><i class="fa fa-long-arrow-up fa-2x"></i>
                                        <br/>
                                        <span class="card_description">Sales</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="bg-success top_cards">
                            <div class="row icon_margin_left">
                                <div class="col-lg-5  col-5 icon_padd_left">
                                    <div class="float-left">
                                        <span class="fa-stack fa-sm">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-eye fa-stack-1x fa-inverse text-success visit_icon"></i>
</span>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-7 icon_padd_right">
                                    <div class="float-right cards_content">
                                        <span class="number_val" id="visitors_count"></span><i class="fa fa-long-arrow-up fa-2x"></i>
                                        <br/>
                                        <span class="card_description">Visitors</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="bg-warning top_cards">
                            <div class="row icon_margin_left">
                                <div class="col-lg-5 col-5 icon_padd_left">
                                    <div class="float-left">
                                        <span class="fa-stack fa-sm">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-usd fa-stack-1x fa-inverse text-warning revenue_icon"></i>
</span>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-7 icon_padd_right">
                                    <div class="float-right cards_content">
                                        <span class="number_val" id="revenue_count"></span><i class="fa fa-long-arrow-up fa-2x"></i>
                                        <br/>
                                        <span class="card_description">Revenue</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="bg-mint top_cards">
                            <div class="row icon_margin_left">
                                <div class="col-lg-5 col-5 icon_padd_left">
                                    <div class="float-left">
                                        <span class="fa-stack fa-sm">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-users  fa-stack-1x fa-inverse text-mint sub"></i>
</span>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-7 icon_padd_right">
                                    <div class="float-right cards_content">
                                        <span class="number_val" id="subscribers_count"></span><i class="fa fa-long-arrow-down fa-2x"></i>
                                        <br/>
                                        <span class="card_description">Subscribers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 col-12 stat_align">
                <div class="card weather_section md_align_section">
                    <div class="card-block">
                        <div class="row margin_align">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="icon sun-shower">
                                            <div class="cloud"></div>
                                            <div class="sun">
                                                <div class="rays"></div>
                                            </div>
                                            <div class="rain"></div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="weather-value">
                                            <span class=" text-white"><span class="degree">25&deg;</span>
                                            </span>
                                        </div>
                                        <div class="weather_location">
                                            <span class="text-white"><i class="fa fa-map-marker"></i> Corumbá</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row weekly_report">
                                    <div class="col-3">
                                        <span>Mon</span>
                                        <br/>
                                        <img src="{{asset('admin/assets/img/w1.png')}}" alt="weather">
                                        <p>27&deg;</p>
                                    </div>
                                    <div class="col-3">
                                        <span>Tue</span>
                                        <br/>
                                        <img src="{{asset('admin/assets/img/w2.png')}}" alt="weather">
                                        <p>23&deg;</p>
                                    </div>
                                    <div class="col-3">
                                        <span>Wed</span>
                                        <br/>
                                        <img src="{{asset('admin/assets/img/w3.png')}}" alt="weather">
                                        <p>19&deg;</p>
                                    </div>
                                    <div class="col-3">
                                        <span>Thu</span>
                                        <br/>
                                        <img src="{{asset('admin/assets/img/w4.png')}}" alt="weather">
                                        <p>38&deg;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12 m-t-35">
                <div class="social-counter text-center">
                    <ul class="m-b-0">
                        <li class="facebook">
                            <a href="#">
                                <div class="row">
                                    <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-facebook"></i></span></div>
                                    <div class="col-8 text-left social_fa_top"><span class="count"><span id="fb_count">354</span>K</span> Likes</div>
                                </div>
                            </a>
                        </li>
                        <li class="twitter">
                            <a href="#">
                                <div class="row">
                                    <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-twitter"></i></span></div>
                                    <div class="col-8 text-left social_fa_top"><span class="count" id="tw_count">547</span> Followers</div>
                                </div>
                            </a>
                        </li>
                        <li class="google">
                            <a href="#">
                                <div class="row">
                                    <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-google-plus"></i></span></div>
                                    <div class="col-8 text-left social_fa_top"><span class="count" id="g+_count">678</span> Followers</div>
                                </div>
                            </a>
                        </li>
                        <li class="youtube">
                            <a href="#">
                                <div class="row">
                                    <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-youtube"></i></span></div>
                                    <div class="col-8 text-left social_fa_top"><span class="count"><span id="youtube_count">21</span>K</span> Subscribers</div>
                                </div>
                            </a>
                        </li>
                        <li class="soundcloud">
                            <a href="#">
                                <div class="row">
                                    <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-soundcloud"></i></span></div>
                                    <div class="col-8 text-left social_fa_top"><span class="count" id="sc_count">845</span> Followers</div>
                                </div>
                            </a>
                        </li>
                        <li class="instagram">
                            <a href="#">
                                <div class="row">
                                    <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-instagram"></i></span></div>
                                    <div class="col-8 text-left social_fa_top"><span class="count">2M</span> Followers</div>
                                </div>
                            </a>
                        </li>
                        <li class="linkedin">
                            <a href="#">
                                <div class="row">
                                    <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-linkedin"></i></span></div>
                                    <div class="col-8 text-left social_fa_top"><span class="count" id="in_count">124</span> Followers</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        
        <div class="col-lg-8 col-12">
            <div class="row">
                <div class="col-lg-7 col-12 m-t-35">
                    <div class="card to_do">
                        <div class="card-header bg-white">
                            To Do List
                        </div>
                        <div class="card-block no-padding to_do_section">
                            <div class="row">
                                <div class="todo_section">
                                    <form class="list_of_items">
                                        <div class="todolist_list showactions px-3">
                                            <div class="row">
                                                <div class="col-9 nopad custom_textbox1">
                                                    <div class="todo_primarybadge"></div>
                                                    <div class="todoitemcheck checkbox-custom">
                                                        <input type="checkbox" class="striked large" />
                                                    </div>
                                                    <div class="todotext todoitem todo_width">Meeting with CEO</div>
                                                </div>
                                                <div class="col-3  showbtns todoitembtns">
                                                    <a href="#" class="todoedit">
                                                        <span class="fa fa-pencil"></span>
                                                    </a>
                                                    <span class='dividor'>|</span>
                                                    <a href="#" class="tododelete redcolor">
                                                        <span class="fa fa-trash"></span>
                                                    </a>
                                                </div>
                                                <span class="seperator"></span>
                                            </div>
                                        </div>
                                        <div class="todolist_list showactions px-3">
                                            <div class="row">
                                                <div class="col-9 nopad custom_textbox1">
                                                    <div class="todo_dangerbadge bg-danger"></div>
                                                    <div class="todoitemcheck">
                                                        <input type="checkbox" class="striked" />
                                                    </div>
                                                    <div class="todotext todoitem todo_width">Team Out</div>
                                                </div>
                                                <div class="col-3  float-right showbtns todoitembtns">
                                                    <a href='#' class='todoedit'>
                                                        <span class='fa fa-pencil'></span>
                                                    </a>
                                                    <span class='dividor'>|</span>
                                                    <a href="#" class="tododelete redcolor">
                                                        <span class="fa fa-trash"></span>
                                                    </a>
                                                </div>
                                                <span class="seperator"></span>
                                            </div>
                                        </div>
                                        <div class="todolist_list showactions px-3">
                                            <div class="row">
                                                <div class="col-9 nopad custom_textbox1">
                                                    <div class="todo_warningbadge"></div>
                                                    <div class="todoitemcheck">
                                                        <input type="checkbox" class="striked" checked/>
                                                    </div>
                                                    <div class="todotext todoitem todo_width strikethrough">Review on Sales</div>
                                                </div>
                                                <div class="col-3 float-right showbtnschk showbtns todoitembtns">
                                                    <a href="#" class="todoedit">
                                                        <span class="fa fa-pencil"></span>
                                                    </a>
                                                    <span class='dividor'>|</span>
                                                    <a href="#" class="tododelete redcolor">
                                                        <span class="fa fa-trash"></span>
                                                    </a>
                                                </div>
                                                <span class="seperator"></span>
                                            </div>
                                        </div>
                                        <div class="todolist_list showactions px-3">
                                            <div class="row">
                                                <div class="col-9 nopad custom_textbox1">
                                                    <div class="todo_infobadge"></div>
                                                    <div class="todoitemcheck">
                                                        <input type="checkbox" class="striked" />
                                                    </div>
                                                    <div class="todotext todoitem todo_width">Analysis on Views</div>
                                                </div>
                                                <div class="col-3 float-right showbtns todoitembtns">
                                                    <a href="#" class="todoedit">
                                                        <span class="fa fa-pencil"></span>
                                                    </a>
                                                    <span class='dividor'>|</span>
                                                    <a href="#" class="tododelete redcolor">
                                                        <span class="fa fa-trash"></span>
                                                    </a>
                                                </div>
                                                <span class="seperator"></span>
                                            </div>
                                        </div>
                                        <div class="todolist_list showactions px-3">
                                            <div class="row">
                                                <div class="col-9 nopad custom_textbox1">
                                                    <div class="todo_warningbadge"></div>
                                                    <div class="todoitemcheck">
                                                        <input type="checkbox" class="striked" checked/>
                                                    </div>
                                                    <div class="todotext todoitem todo_width strikethrough">Seminar on Market</div>
                                                </div>
                                                <div class="col-3 float-right showbtnschk showbtns todoitembtns">
                                                    <a href="#" class="todoedit">
                                                        <span class="fa fa-pencil"></span>
                                                    </a>
                                                    <span class='dividor'>|</span>
                                                    <a href="#" class="tododelete redcolor">
                                                        <span class="fa fa-trash"></span>
                                                    </a>
                                                </div>
                                                <span class="seperator"></span>
                                            </div>
                                        </div>
                                        <div class="todolist_list showactions px-3">
                                            <div class="row">
                                                <div class="col-9 nopad custom_textbox1">
                                                    <div class="todo_primarybadge"></div>
                                                    <div class="todoitemcheck">
                                                        <input type="checkbox" class="striked" />
                                                    </div>
                                                    <div class="todotext todoitem todo_width">Renewal Domain</div>
                                                </div>
                                                <div class="col-3  float-right showbtns todoitembtns">
                                                    <a href="#" class="todoedit">
                                                        <span class="fa fa-pencil"></span>
                                                    </a>
                                                    <span class='dividor'>|</span>
                                                    <a href="#" class="tododelete redcolor">
                                                        <span class="fa fa-trash"></span>
                                                    </a>
                                                </div>
                                                <span class="seperator"></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <form id="main_input_box" class="form-inline">
                                    <div class="input-group todo">
                                        <span class="input-group-btn">
                                                            <a class="btn btn-primary" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-contentwrapper=".mycontent" id="btn_color" data-badge="todo_mintbadge">Color&nbsp;&nbsp; <i
                                                                        class="fa fa-caret-right"> </i></a>
                                                            </span>
                                        <input id="custom_textbox" name="Item" type="text" required placeholder="Write and hit enter" class="input-md form-control" size="75" />
                                    </div>
                                </form>
                            </div>
                            <div class="mycontent">
                                <div class="border_color bg-danger border_danger" data-color="btn-danger" data-badge="bg-danger"></div>
                                <div class="border_color bg-primary border_primary" data-color="btn-primary" data-badge="bg-primary"></div>
                                <div class="border_color bg-info border_info" data-color="btn-info" data-badge="bg-info"></div>
                                <div class="border_color bg-mint border_mint" data-color="btn-mint" data-badge="bg-mint"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12 m-t-35">
                    <div class="block widget-notes">
                        <div class="card" id="notes_section">
                            <div class="card-header bg-white">
                                Notes
                            </div>
                            <div class="content">
                                <div class="notes" contenteditable="true">
                                    <div>Send e-mails.
                                        <br> Sometimes on purpose
                                        <br> It is a long established
                                        <br> Contrary to popular belief.
                                        <br> <i>Bootstrap4 admire admin</i>
                                        <br>Company status
                                        <br> Sometime is special
                                        <br> <b>Meeting with CEO</b>
                                        <br> Team out
                                        <br> welcome to admire

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.inner -->
</div>
<!-- /.outer -->
</div>
<!-- /.outer -->
@stop {{-- page level scripts --}} @section('footer_scripts')
<!--  plugin scripts -->
<script type="text/javascript" src="{{asset('admin/assets/vendors/raphael/js/raphael-min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/vendors/d3/js/d3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/vendors/c3/js/c3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/vendors/toastr/js/toastr.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/vendors/switchery/js/switchery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/vendors/flotchart/js/jquery.flot.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/vendors/flotchart/js/jquery.flot.resize.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/vendors/flotchart/js/jquery.flot.stack.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/vendors/flotchart/js/jquery.flot.time.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/vendors/flotspline/js/jquery.flot.spline.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/vendors/flotchart/js/jquery.flot.categories.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/vendors/flotchart/js/jquery.flot.pie.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/vendors/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/vendors/jquery_newsTicker/js/newsTicker.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/vendors/countUp.js/js/countUp.min.js')}}"></script>
<!--end of plugin scripts-->
<!--<script type="text/javascript" src="{{asset('admin/assets/js/pages/new_dashboard.js')}}"></script>-->
<script type="text/javascript" src="{{asset('admin/assets/js/pages/widgets2.js')}}"></script>
<!-- end page level scripts -->
@stop