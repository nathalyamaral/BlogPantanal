<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        @section('title') | Admire @show
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('admin/assets/img/logo1.ico')}}" />
    <!-- global styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('admin/assets/css/components.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('admin/assets/css/custom.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('admin/assets/css/pages/layouts.css')}}" />
    <link type="text/css" rel="stylesheet" href="#" id="skin_change" />
    <!-- end of global styles-->
    @yield('header_styles')
</head>

<body class="fixed_header">
    <!--</div>-->
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
    <div class="bg-dark" id="wrap">
        <div id="top" class="fixed">
            <!-- .navbar -->
            <nav class="navbar navbar-static-top">
                <div class="container-fluid m-0">
                    <a class="navbar-brand float-left text-center" href="{{route('admin.home')}}">
                        <h4 class="text-white"><img src="{{asset('admin/assets/img/logow.png')}}" class="admin_img" alt="logo"> DASHBOARD</h4>
                    </a>
                    <div class="menu">
                        <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars text-white"></i>
                    </span>
                    </div>
                    <div class="topnav dropdown-menu-right float-right">
                        <div class="btn-group">
                            <div class="notifications no-bg">
                                <a class="btn btn-default btn-sm messages" data-toggle="dropdown"> <i class="fa fa-envelope fa-1x text-white"></i>
                                    <!--<span class="bg-warning message_tags">4</span>-->
                                    <span class="badge badge-warning">8</span>
                                </a>
                                <div class="dropdown-menu drop_box_align" role="menu" id="messages_dropdown">
                                    <div class="popover-title">You have 8 Messages</div>
                                    <div id="messages">
                                        <div class="data">
                                            <div class="row">
                                                <div class="col-2">
                                                    <img src="{{asset('admin/assets/img/mailbox_imgs/5.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                                <div class="col-10 message-data"><strong>hally</strong> sent you an image.
                                                    <br>
                                                    <small>add to timeline</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="row">
                                                <div class="col-2">
                                                    <img src="{{asset('admin/assets/img/mailbox_imgs/8.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                                <div class="col-10 message-data"><strong>Meri</strong> invitation for party.
                                                    <br>
                                                    <small>add to timeline</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="row">
                                                <div class="col-2">
                                                    <img src="{{asset('admin/assets/img/mailbox_imgs/7.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                                <div class="col-10 message-data">
                                                    <strong>Remo</strong> meeting details .
                                                    <br>
                                                    <small>add to timeline</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="row">
                                                <div class="col-2">
                                                    <img src="{{asset('admin/assets/img/mailbox_imgs/6.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                                <div class="col-10 message-data">
                                                    <strong>David</strong> upcoming events list.
                                                    <br>
                                                    <small>add to timeline</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="row">
                                                <div class="col-2">
                                                    <img src="{{asset('admin/assets/img/mailbox_imgs/5.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                                <div class="col-10 message-data"><strong>hally</strong> sent you an image.
                                                    <br>
                                                    <small>add to timeline</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="row">
                                                <div class="col-2">
                                                    <img src="{{asset('admin/assets/img/mailbox_imgs/8.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                                <div class="col-10 message-data"><strong>Meri</strong> invitation for party.
                                                    <br>
                                                    <small>add to timeline</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="row">
                                                <div class="col-2">
                                                    <img src="{{asset('admin/assets/img/mailbox_imgs/7.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                                <div class="col-10 message-data">
                                                    <strong>Remo</strong> meeting details .
                                                    <br>
                                                    <small>add to timeline</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="row">
                                                <div class="col-2">
                                                    <img src="{{asset('admin/assets/img/mailbox_imgs/6.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                                <div class="col-10 message-data">
                                                    <strong>David</strong> upcoming events list.
                                                    <br>
                                                    <small>add to timeline</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popover-footer">
                                        <a href="{{ route('admin.inbox') }}">Inbox</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="btn-group">
                            <div class="notifications messages no-bg">
                                <a class="btn btn-default btn-sm" data-toggle="dropdown"> <i class="fa fa-bell text-white"></i>
                                    <!--<span class="bg-danger notification_tags">4</span>-->
                                    <span class="badge badge-danger">9</span>
                                </a>
                                <div class="dropdown-menu drop_box_align" role="menu">
                                    <div class="popover-title">You have 9 Notifications</div>
                                    <div id="notifications">
                                        <div class="data">
                                            <div class="row">
                                                <div class="col-2">
                                                    <img src="{{asset('admin/assets/img/mailbox_imgs/1.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                                <div class="col-10 message-data">
                                                    <i class="fa fa-clock-o"></i>
                                                    <strong>Remo</strong> sent you an image
                                                    <br>
                                                    <small class="primary_txt">just now.</small>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="row">
                                                <div class="col-2">
                                                    <img src="{{asset('admin/assets/img/mailbox_imgs/2.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                                <div class="col-10 message-data">
                                                    <i class="fa fa-clock-o"></i>
                                                    <strong>clay</strong> business propasals
                                                    <br>
                                                    <small class="primary_txt">20min Back.</small>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="row">
                                                <div class="col-2">
                                                    <img src="{{asset('admin/assets/img/mailbox_imgs/3.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                                <div class="col-10 message-data">
                                                    <i class="fa fa-clock-o"></i>
                                                    <strong>John</strong> meeting at Ritz
                                                    <br>
                                                    <small class="primary_txt">2hrs Back.</small>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="row">
                                                <div class="col-2">
                                                    <img src="{{asset('admin/assets/img/mailbox_imgs/6.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                                <div class="col-10 message-data">
                                                    <i class="fa fa-clock-o"></i>
                                                    <strong>Luicy</strong> Request Invitation
                                                    <br>
                                                    <small class="primary_txt">Yesterday.</small>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="row">
                                                <div class="col-2">
                                                    <img src="{{asset('admin/assets/img/mailbox_imgs/1.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                                <div class="col-10 message-data">
                                                    <i class="fa fa-clock-o"></i>
                                                    <strong>Remo</strong> sent you an image
                                                    <br>
                                                    <small class="primary_txt">just now.</small>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="row">
                                                <div class="col-2">
                                                    <img src="{{asset('admin/assets/img/mailbox_imgs/2.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                                <div class="col-10 message-data">
                                                    <i class="fa fa-clock-o"></i>
                                                    <strong>clay</strong> business propasals
                                                    <br>
                                                    <small class="primary_txt">20min Back.</small>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="row">
                                                <div class="col-2">
                                                    <img src="{{asset('admin/assets/img/mailbox_imgs/3.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                                <div class="col-10 message-data">
                                                    <i class="fa fa-clock-o"></i>
                                                    <strong>John</strong> meeting at Ritz
                                                    <br>
                                                    <small class="primary_txt">2hrs Back.</small>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="row">
                                                <div class="col-2">
                                                    <img src="{{asset('admin/assets/img/mailbox_imgs/6.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                                <div class="col-10 message-data">
                                                    <i class="fa fa-clock-o"></i>
                                                    <strong>Luicy</strong> Request Invitation
                                                    <br>
                                                    <small class="primary_txt">Yesterday.</small>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="row">
                                                <div class="col-2">
                                                    <img src="{{asset('admin/assets/img/mailbox_imgs/1.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                                <div class="col-10 message-data">
                                                    <i class="fa fa-clock-o"></i>
                                                    <strong>Remo</strong> sent you an image
                                                    <br>
                                                    <small class="primary_txt">just now.</small>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popover-footer">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group">
                            <div class="user-settings no-bg">
                                <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                    <img src="
                                    @empty(Auth::user()->image)
                                        {{asset('admin/assets/img/avatar.png')}}
                                    @else        
                                        {{asset('images/profiles/'.Auth::user()->image)}}
                                    @endempty
                                    " class="admin_img2 rounded-circle avatar-img" alt="avatar"> <strong>{{ collect(explode(' ', ucwords(strtolower(Auth::user()->name))))->slice(0, 1)->implode(' ')}}</strong>
                                    <span class="fa fa-sort-down white_bg"></span>
                                </button>
                                <div class="dropdown-menu admire_admin">
                                    <a class="dropdown-item title" href="#">
                                    Admire Admin</a>
                                    <a class="dropdown-item" href="{{route('admin.accountSettings')}}"><i class="fa fa-cogs"></i>
                                    Account Settings</a>
                                    <a class="dropdown-item" href="{{ route('admin.profile') }}">
                                        <i class="fa fa-user"></i> Perfil
                                    </a>
                                    <a class="dropdown-item" href="{{ route('admin.inbox') }}"><i class="fa fa-envelope"></i>
                                    Inbox</a>

                                    <a class="dropdown-item" href="{{ route('admin.locked') }}"><i class="fa fa-lock"></i>
                                    Lock Screen</a>
                                    <a class="dropdown-item" href="{{ route('admin.logout') }}" ><i class="fa fa-sign-out"></i>
                                    Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-toggleable-sm col-xl-6 col-lg-6 hidden-md-down float-right  top_menu" id="nav-content">
                        <ul class="nav navbar-nav top_menubar">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('admin.inbox') }}">
                                    <i class="fa fa-inbox"></i> <span class="quick_text">Inbox</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('admin.compose') }}">
                                    <i class="fa fa fa-edit"></i> <span class="quick_text">Compose</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{route('admin.gallery')}}">
                                    <i class="fa fa-picture-o"></i> <span class="quick_text">Gallery</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- /.container-fluid -->
            </nav>
            <!-- /.navbar -->
            <!-- /.head -->
        </div>
        <!-- /#top -->
        <div class="wrapper">
            <div id="left" class="fixed">
                <div class="menu_scroll">
                    <div class="media user-media bg-dark dker">
                        <div class="user-media-toggleHover">
                            <span class="fa fa-user"></span>
                        </div>
                        <div class="user-wrapper bg-dark">
                            <a class="user-link" href="">
                                <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture" src="
                                @empty(Auth::user()->image)
                                    {{asset('admin/assets/img/avatar.png')}}
                                @else        
                                    {{asset('images/profiles/'.Auth::user()->image)}}
                                @endempty
                                ">
                                <p class="text-white user-info">Bem vindo {{ collect(explode(' ', ucwords(strtolower(Auth::user()->name))))->slice(0, 1)->implode(' ')}}</p>
                            </a>

                            <div class="search_bar col-lg-12">
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="search">
                                    <span class="input-group-btn">
                                <button class="btn without_border" type="button"><span class="fa fa-search" >
                                </span></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #menu -->
                    <ul id="menu" class="bg-blue dker">
                        <li {!! (Request::is( 'admin/home')? 'class="active"': "") !!}>
                            <a href="{{ route('admin.home') }} ">
                                <i class="fa fa-home"></i>
                                <span class="link-title">&nbsp;Dashboard</span>
                            </a>
                        </li>
                  <li {!! (Request::is( 'admin/posts')|| Request::is( 'admin/post/create') || Request::is( 'admin/postsdeleted')? 'class="active"': "")!!}>
                            <a href="#">
                                <i class="fa fa-pencil-square-o"></i>
                                <span class="link-title">&nbsp; Posts</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li {!! (Request::is( 'admin/posts')? 'class="active"': "") !!}>
                                    <a href="{{ route('admin.posts')}}">
                                        <i class="fa fa-angle-right"></i> &nbsp; Listar Posts
                                    </a>
                                </li>

                        @can('edit_post') 
                         <li {!! (Request::is( 'admin/post/create')? 'class="active"': "") !!}>
                              <a href="{{route('admin.form-add-post')}}">
                                        <i class="fa fa-angle-right"></i> &nbsp; Adicionar Post
                                    </a>
                                </li>
                        @endcan
                        @can('delete_post')
                                <li {!! (Request::is( 'admin/postsdeleted')? 'class="active"': "") !!}>
                                    <a href="{{route('admin.postsdeleteds')}} ">
                                        <i class="fa fa-angle-right"></i> &nbsp; Posts Deletados
                                    </a>
                                </li>
                        @endcan
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-sitemap"></i>
                                <span class="link-title">&nbsp; Categorias & Tags</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-angle-right"></i> &nbsp;Categorias
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="sub-menu sub-submenu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-angle-right"></i> &nbsp;Listar Categorias
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-angle-right"></i> &nbsp;Adicionar Categorias
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i> &nbsp;Categorias Deletadas
                                                </a>
                                            </li>
                                    </ul>
                                </li>
                                <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i> &nbsp;Tags
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul class="sub-menu sub-submenu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i> &nbsp;Listar Tags
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i> &nbsp;Adicionar Tag
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                        <i class="fa fa-angle-right"></i> &nbsp;Tags Deletadas
                                                    </a>
                                                </li>
                                        </ul>
                                    </li>
                            </ul>
                        </li>
                    <li {!! (Request::is('admin/users')|| Request::is( 'admin/user/create') || Request::is( 'admin/usersdeleted')? 'class="active"': "")!!}>
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span class="link-title">&nbsp; Usuários</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul>
                                <li {!! (Request::is( 'admin/users')? 'class="active"': "") !!}>
                                        <a href="{{route('admin.users')}} ">
                                            <i class="fa fa-angle-right"></i> &nbsp; Listar Usuários
                                        </a>
                                    </li>
                                    <li {!! (Request::is( 'admin/user/create')? 'class="active"': "") !!}>
                                        <a href="{{route('admin.form-add-user')}} ">
                                            <i class="fa fa-angle-right"></i> &nbsp; Adicionar Usuário
                                        </a>
                                    </li>
                                    <li {!! (Request::is( 'admin/usersdeleted')? 'class="active"': "") !!}>
                                        <a href="{{route('admin.deleteds')}} ">
                                            <i class="fa fa-angle-right"></i> &nbsp; Usuários Deletados
                                        </a>
                                    </li>
                        </ul>
                    </li>
                    <li {!! (Request::is( 'admin/calendar')? 'class="active"': "") !!}>
                        <a href="{{ route('admin.calendar') }} ">
                            <i class="fa fa-calendar"></i>
                            <span class="link-title">&nbsp; Calendar</span>
                            <span class="badge badge-pill badge-primary float-right calendar_badge">7</span>
                        </a>
                    </li>
                    <li {!! (Request::is( 'admin/email/compose')|| Request::is( 'admin/email/inbox') || Request::is( 'mail_view')|| Request::is( 'mail_sent')|| Request::is( 'mail_spam')|| Request::is( 'mail_draft')|| Request::is( 'mail_trash') ? 'class="active"' : '') !!}>
                        <a href="#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="link-title">&nbsp; Email</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul>
                            <li {!! (Request::is( 'admin/email/compose')? 'class="active"': "") !!}>
                                <a href="{{ route('admin.compose') }} ">
                                    <i class="fa fa-angle-right"></i> &nbsp; Compose
                                </a>
                            </li>
                            <li {!! (Request::is( 'admin/email/inbox')? 'class="active"': "") !!}>
                                <a href="{{ route('admin.inbox') }}">
                                    <i class="fa fa-angle-right"></i> &nbsp; Inbox
                                </a>
                            </li>
                            <li {!! (Request::is( 'mail_view')? 'class="active"': "") !!}>
                                <a href="{{ URL::to('mail_view') }} ">
                                    <i class="fa fa-angle-right"></i> &nbsp; View
                                </a>
                            </li>
                            <li {!! (Request::is( 'mail_sent')? 'class="active"': "") !!}>
                                <a href="{{ URL::to('mail_sent') }} ">
                                    <i class="fa fa-angle-right"></i> &nbsp; Sent
                                </a>
                            </li>
                            <li {!! (Request::is( 'mail_spam')? 'class="active"': "") !!}>
                                <a href="{{ URL::to('mail_spam') }} ">
                                    <i class="fa fa-angle-right"></i> &nbsp; Spam
                                </a>
                            </li>
                            <li {!! (Request::is( 'mail_draft')? 'class="active"': "") !!}>
                                <a href="{{ URL::to('mail_draft') }} ">
                                    <i class="fa fa-angle-right"></i> &nbsp; Draft
                                </a>
                            </li>
                            <li {!! (Request::is( 'mail_trash')? 'class="active"': "") !!}>
                                <a href="{{ URL::to('mail_trash') }} ">
                                    <i class="fa fa-angle-right"></i> &nbsp; Trash
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li {!! (Request::is( 'admin/gallery')? 'class="active"': "") !!}>
                        <a href="{{route('admin.gallery')}} ">
                            <i class="fa fa-picture-o"> </i> &nbsp; Gallery
                        </a>
                    </li>
                    </ul>
                </div>
                <!-- /#menu -->
            </div>
            <!-- /#left -->
            <div id="content" class="bg-container fixed_header_menu_conainer fixed_header_menu_page">
                <!-- Content -->
                @yield('content')
                <!-- Content end -->
            </div>

        </div>
        @include('layouts.right_sidebar')
        <!-- # right side -->
    </div>

    <!-- global scripts-->
    <script type="text/javascript" src="{{asset('admin/assets/js/components.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/custom.js')}}"></script>
    <!-- end of global scripts-->
    <script type="text/javascript" src="{{asset('admin/assets/js/pages/fixed_menu.js')}}"></script>
    <!-- page level js -->
    @yield('footer_scripts')
    <!-- end page level js -->
</body>

</html>