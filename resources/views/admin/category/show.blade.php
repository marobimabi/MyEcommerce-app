@extends('layouts.adminbase')

@section('title', 'Category List')

@section('sidebar')

@stop


@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <a href="/admin/category/create" class="btn btn-secondary btn-sm">Add Category</a>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Category List</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <!-- table -->
                            <!-- table -->
                            <div class="col-md-12 col-sm-12 ">
                                <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Keywords</th>
                                        <th>descrition</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Created Date</th>
                                        <th>Updated Date</th>


                                    </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->title}}</td>
                                            <td>{{$data->keywords}}</td>
                                            <td>{{$data->description}}</td>
                                            <td>{{$data->image}}</td>
                                            <td>{{$data->status}}</td>
                                            <td>{{$data->created_at}}</td>
                                            <td>{{$data->updated_at}}</td>

                                        </tr>

                                    </tbody>
                                </table>
                                <!--- end table -->
            <!-- /page content -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->
@endsection
