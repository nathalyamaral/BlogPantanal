@extends('layouts/default') {{-- Page title --}} @section('title') Add Post @parent @stop {{-- page level styles --}} @section('header_styles')
<!-- plugin styles-->
<link type="text/css" rel="stylesheet" href="{{asset('admin/assets/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('admin/assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" />

<!--end of page level css-->

<!--style multi option-->
<link type="text/css" rel="stylesheet" href="{{asset('admin/assets/vendors/chosen/css/chosen.css')}}" />
<!--End of plugin styles-->
<link type="text/css" rel="stylesheet" href="{{asset('admin/assets/css/pages/form_elements.css')}}" />
<!--end style multi option-->
<link type="text/css" rel="stylesheet" href="{{asset('admin/assets/vendors/inputlimiter/css/select2.min.css')}}" /> 
@stop {{-- Page content --}} @section('content')

<header class="head">

    <div class="main-bar">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="nav_top_align">
                        <i class="fa fa-user"></i>
                        Add Post
                    </h4>
            </div>
            <div class="col-lg-6">
                <div class="float-right">
                    <ol class="breadcrumb nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Users</a>
                        </li>
                        <li class="breadcrumb-item active">Add User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="outer">
    <div class="inner bg-container">
        <div class="card">
                @if ($message = Session::get('info'))
                <div class="row form_div no-gutters no-gutters">
                        <div class="col-4 text-center">
                            <div></div>
                        </div>
                        <div class="col-4 text-center">
                                <div class="alert alert-info alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>	
                                            <strong>{{ $message }}</strong>
                                    </div>
                        </div>
                        <div class="col-4 text-center">
                            <div></div>
                        </div>
                    </div>
                
                @endif
            <div class="card-block m-t-35">
                <div>
                    <h4>Personal Information</h4>
                </div>
                <form method="POST" class="form-horizontal" id="tryitForm" action={{route('admin.update', ['id' => $post->id])}}>
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row m-t-25">
                                <div class="col-lg-3 text-center text-lg-right">
                                    <label class="col-form-label">Imagem banner*</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                <i class="fa fa-picture-o"></i> Imagem
                                            </a>
                                        </span>
                                        <input id="thumbnail" class="form-control" type="text" name="image_slug" value="{{$post->image_slug}}" readonly>
                                    </div>
                                    <img src="{{$post->image_slug}}" class="rounded mx-auto d-block" id="holder" style="margin-top:15px;max-height:100px;">
                                </div>
                            </div>
                            <div class="form-group row m-t-25">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="subject2" class="col-form-label">Titulo*</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-text-width" aria-hidden="true"></i></span>
                                        <input value="{{$post->title}}" name='title' type="text" id="subject2" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="email" class="col-form-label">Categoria *
                                    </label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <select name='categories_id' class="form-control">
                                            @forelse ($categories as $category)
                                            <option value={{$category->id}} {{ ($post->category->id == $category->id) ? 'selected' : '' }}>{{$category->name}}</option>
                                            @empty
                                            <option>Nenhuma categoria disponível</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="phone" class="col-form-label">Tags *
                                    </label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <select class="js-example-basic-multiple form-control" name="tags[]" multiple="multiple">
                                            @forelse ($tags as $tag)
                                            <option value={{$tag->id}}>{{$tag->name}}</option>
                                            @empty
                                            <option>Nenhuma tag disponível</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="card m-t-30 tinymce_full">
                                        <div class="card-header bg-white">
                                            <i class="livicon" data-name="umbrella" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Editor
                                        </div>
                                        <div>
                                            <textarea rows="20  " name="body" class="form-control my-editor">{{$post->body}}</textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                            <div class="form-group row">
                                <div class="col text-center">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-user"></i> Edit Post
                                    </button>
                                    <button class="btn btn-warning" type="reset" id="clear">
                                        <i class="fa fa-refresh"></i> Reset Edit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- /.inner -->
</div>

@stop {{-- page level scripts --}} @section('footer_scripts')
<!-- plugin scripts-->
<script type="text/javascript" src="{{asset('admin/assets/js/pluginjs/jasny-bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/vendors/holderjs/js/holder.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>

<!-- end of plugin scripts-->
<script type="text/javascript" src="{{asset('admin/assets/js/pages/validation.js')}}"></script>

<script type="text/javascript" src="{{asset('admin/assets/vendors/chosen/js/chosen.jquery.js')}}"></script>
<!-- end of page level js -->
<!--End of plugin scripts-->
<script type="text/javascript" src="{{asset('admin/assets/vendors/tinymce/js/tinymce.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/laravel-filemanager/js/lfm.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/vendors/inputlimiter/js/select2.min.js')}}"></script>

<script>
    $('#lfm').filemanager('image');
    $('.js-example-basic-multiple').select2();
    $('.js-example-basic-multiple').select2().val({!! json_encode($post->tags()->allRelatedIds()->toArray()) !!}).trigger('change');

    var editor_config = {
        path_absolute: "/",
        selector: "textarea.my-editor",
        plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback: function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.open({
                file: cmsURL,
                title: 'Filemanager',
                width: x * 0.8,
                height: y * 0.8,
                resizable: "yes",
                close_previous: "no"
            });
        }
    };

    tinymce.init(editor_config);
</script>
<!--Page level scripts-->
@stop