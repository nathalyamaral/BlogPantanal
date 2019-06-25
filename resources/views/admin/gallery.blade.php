@extends('layouts/default')

{{-- Page title --}}
@section('title')
Gallery
@parent
@stop
{{-- page level styles --}}
@section('header_styles')
<!--Plugin styles-->
<link type="text/css" rel="stylesheet" href="{{asset('admin/assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('admin/assets/vendors/fancybox/css/jquery.fancybox.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('admin/assets/vendors/fancybox/css/jquery.fancybox-buttons.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('admin/assets/vendors/fancybox/css/jquery.fancybox-thumbs.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('admin/assets/vendors/imagehover/css/imagehover.min.css')}}" />
<!--page level styles-->
<link type="text/css" rel="stylesheet" href="{{asset('admin/assets/css/pages/gallery.css')}}"/>
<!-- end of page level styles -->
@stop


{{-- Page content --}}
@section('content')
<header class="head">
    <div class="main-bar">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-4">
                <h4 class="nav_top_align">
                    <i class="fa fa-image"></i>
                    Gallery
                </h4>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-8">
                <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="index">
                            <i class="fa fa-home" data-pack="default" data-tags=""></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item active">Gallery</li>
                </ol>
            </div>
        </div>
    </div>
</header>
<div class="outer">
    <div class="inner bg-light lter bg-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-white">
                        Gallery
                    </div>
                    <div class="card-block m-t-35">
                        
                        <iframe id="lfm" src="laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>

                    </div>
                    <!-- /thumnail helper gallery -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- /.inner -->
</div>
<!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
<!--Plugin scripts-->
<script type="text/javascript" src="{{asset('admin/assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
<!--Plugin scripts-->
<script type="text/javascript" src="{{asset('admin/assets/vendors/holderjs/js/holder.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/vendors/fancybox/js/jquery.mousewheel.pack.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/vendors/fancybox/js/jquery.fancybox.pack.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/vendors/fancybox/js/jquery.fancybox-buttons.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/vendors/fancybox/js/jquery.fancybox-thumbs.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/vendors/fancybox/js/jquery.fancybox-media.js')}}"></script>
<!--End of plugin scripts-->
<script type="text/javascript" src="{{asset('admin/assets/js/pages/gallery.js')}}"></script>
<!-- end page level scripts -->

<script>
    $('#lfm').filemanager('image');
</script> 
@stop