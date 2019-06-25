@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Add User
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!-- plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('admin/assets/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('admin/assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}"/>
    <!--end of page level css-->

    <!--style multi option-->
    <link type="text/css" rel="stylesheet" href="{{asset('admin/assets/vendors/inputlimiter/css/jquery.inputlimiter.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('admin/assets/vendors/chosen/css/chosen.css')}}"/>
    <!--end style multi option-->
    <link type="text/css" rel="stylesheet" href="{{asset('admin/assets/vendors/inputlimiter/css/select2.min.css')}}" /> 
@stop


{{-- Page content --}}
@section('content')

    <header class="head">

        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="nav_top_align">
                        <i class="fa fa-user"></i>
                        Add User
                    </h4>
                </div>
                <div class="col-lg-6">
                    <div class="float-right">
                        <ol class="breadcrumb nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Dashboard
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
                    <form enctype="multipart/form-data" method="POST" class="form-horizontal login_validator" id="tryitForm" action={{route('admin.updateUser', ['id' => $user->id])}}>
                        {{ method_field('PUT') }}
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-3 text-center text-lg-right">
                                        <label class="col-form-label">Profile Pic</label>
                                    </div>
                                    <div class="col-lg-6 text-center text-lg-left">
                                            <div class="col-lg-6 text-center text-lg-left">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new img-thumbnail text-center">
                                                                <img src="
                                                                @empty($user->image)
                                                                    {{asset('admin/assets/img/avatar.png')}}
                                                                @else        
                                                                    {{asset('images/profiles/'.$user->image)}}
                                                                @endempty
                                                                "   alt="admin" class="admin_img_width"></div>
                                                        <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                                        <div class="m-t-20 text-center">
                                                                    <span class="btn btn-primary btn-file">
                                                                        <span class="fileinput-new">Select image</span>
                                                                        <span class="fileinput-exists">Change</span>
                                                                        <input type="file" accept="image/png, image/jpeg, image/gif" name="image"></span>
                                                            <a href="#" class="btn btn-warning fileinput-exists"
                                                               data-dismiss="fileinput">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                    </div>
                                </div>
                                <div class="form-group row m-t-25">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="u-name" class="col-form-label">Nome de usuário *</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                        <span class="input-group-addon"> <i class="fa fa-user text-primary" aria-hidden="true"></i>
                                        </span>
                                    <input value="{{$user->name}}"type="text" name="name" id="u-name"
                                                       class="form-control">
                                            </div>
    
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="email" class="col-form-label">Email
                                                *</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope text-primary"></i></span>
                                            <input value="{{$user->email}}" type="text" placeholder=" " id="email" name="email"
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="pwd" class="col-form-label">Senha
                                                *</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock text-primary"></i></span>
                                                <input type="password" name="password" id="pwd"
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="cpwd" class="col-form-label">Confirmar Senha *</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock text-primary"></i></span>
                                                <input type="password" name="confirmpassword" placeholder=" " id="cpwd"
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="email" class="col-form-label">Nível de acesso *
                                                </label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <select name='role' class="form-control">
                                                        <option value="">Selecione um nível de acesso...</option>
                                                        @forelse ($roles as $role)
                                                            @foreach ($user->roles as $roleuser)
                                                                <option value={{$role->id}} {{ ($roleuser->id == $role->id) ? 'selected' : '' }}>{{$role->name}}</option>
                                                            @endforeach
                                                        @empty
                                                        <option>Nenhum nível de acesso disponível</option>
                                                        @endforelse
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                                <div class="col-lg-3 text-lg-right">
                                                    <label for="email" class="col-form-label">Biografia (Max 300 caract...)
                                                    </label>
                                                </div>
                                                <div class="col-xl-6 col-lg-8">
                                                    <div class="input-group">
                                                            <textarea id="text4" name="biography" class="form-control" cols="50" rows="5" maxlength="300">{{$user->biography}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                    <div class="form-group row">
                                        <div class="col-lg-9 push-lg-3">
                                            <button class="btn btn-primary" type="submit">
                                                <i class="fa fa-user"></i>
                                                Edit User
                                            </button>
                                            <button class="btn btn-warning" type="reset" id="clear">
                                                <i class="fa fa-refresh"></i>
                                                Edit reset
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

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- plugin scripts-->
    <script type="text/javascript" src="{{asset('admin/assets/js/pluginjs/jasny-bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/vendors/holderjs/js/holder.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
    <!-- end of plugin scripts-->
    <script type="text/javascript" src="{{asset('admin/assets/js/pages/validationUpdate.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/form.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/assets/vendors/inputlimiter/js/jquery.inputlimiter.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/vendors/chosen/js/chosen.jquery.js')}}"></script>
    <!-- end of page level js -->
    <script type="text/javascript" src="{{asset('admin/assets/vendors/inputlimiter/js/select2.min.js')}}"></script>
   <script>
    $('.js-example-basic-multiple').select2();
    $(".js-example-basic-multiple").select2({
        placeholder: "Selecione as roles..."
    });
    </script>
@stop