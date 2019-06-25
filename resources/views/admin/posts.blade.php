@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Users
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('admin/assets/vendors/select2/css/select2.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('admin/assets/css/pages/dataTables.bootstrap.css')}}"/>
    <!--End of plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('admin/assets/css/pages/tables.css')}}"/>
    <!-- end of page level styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('admin/assets/vendors/sweetalert/css/sweetalert2.min.css')}}"/>
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('admin/assets/css/pages/sweet_alert.css')}}"/>
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6 col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-user"></i>
                        User Grid
                    </h4>
                </div>
                <div class="col-lg-6 col-sm-8 col-12">
                    <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Users</a>
                        </li>
                        <li class="active breadcrumb-item">User Grid</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-header bg-white">
                    User Grid
                </div>
                <div class="card-block m-t-35" id="user_body">
                    <div class="table-toolbar">
                        <div class="btn-group">
                            @can('edit_post', $posts)<a href="{{route('admin.form-add-post')}}" id="editable_table_new" class=" btn btn-default">
                                Add Post  <i class="fa fa-plus"></i>
                            </a>
                            @endcan
                        </div>
                        <div class="btn-group float-right users_grid_tools">
                            <div class="tools"></div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <table class="table  table-striped table-bordered table-hover dataTable no-footer" id="editable_table" role="grid">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">#</th>
                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">Titulo</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Autor</th>
                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Criado</th>
                                    <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">Editado</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Ação</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse ($posts as $post)
                                    <tr role="row" class="even">
                                        <td class="sorting_1">{{$post->id}}</td>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->user->name}}</td>
                                        <td class="center">{{date('j M Y - H:i', strtotime($post->created_at))}}</td>
                                        <td class="center">{{date('j M Y - H:i', strtotime($post->updated_at))}}</td>
                                        
                                        <td>
                                            <div class="row examples"> 
                                                @can('view_post', $post)
                                                <a href="{{route('blogsingle', ['id' => $post->id])}}" target="_blank" data-toggle="tooltip" data-placement="top" title="View Post"><i class="fa fa-eye text-success m-l-10"></i></a>&nbsp; &nbsp;
                                                @endcan
                                                @if(Gate::check('delete_post', $post) || Gate::check('updatePost', $post))
                                                    <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="{{route('admin.form-edit-post', ['id' => $post->id])}}"><i class="fa fa-pencil text-warning"></i></a>&nbsp; &nbsp;
                                                @endif

                                                @can('delete_post', $post)
                                                    <a class="delete hidden-xs hidden-sm delete-post" data-toggle="tooltip" data-animation="false" data-placement="top" title="Delete" data-id="{{ $post->id }}" data-token="{{csrf_token()}}" href="#"><i class="fa fa-trash text-danger"></i></a>
                                                @endcan

                                            </div> 
                                        </td>
                                    
                                        </tr> 
                                    @empty
                                        
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
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
    <script type="text/javascript" src="{{asset('admin/assets/vendors/select2/js/select2.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/vendors/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/vendors/datatables/js/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/vendors/datatables/js/dataTables.responsive.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/vendors/datatables/js/dataTables.buttons.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/vendors/datatables/js/buttons.colVis.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/vendors/datatables/js/buttons.html5.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/vendors/datatables/js/buttons.bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/vendors/datatables/js/buttons.print.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/vendors/sweetalert/js/sweetalert2.min.js')}}"></script>
    <!-- end plugin scripts -->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('admin/assets/js/pages/sweet_alerts.js')}}"></script>
    <!--End of plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('admin/assets/js/pages/users.js')}}"></script>
    <!-- end page level scripts -->
@stop