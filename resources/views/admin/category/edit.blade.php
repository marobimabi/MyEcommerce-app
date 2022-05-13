@extends('layouts.adminbase')

@section('title', 'Edit Category  List:',$data->title)

@section('sidebar')
    @parent
@stop

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <a href="" class="btn btn-secondary btn-sm">Add Category:</a>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Edit Category: {{$data->title}}</h2>
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

                            <!-- start form for validation -->
                            <form role="form" action="{{route('admin.category.update',['id'=>$data->id])}} method="post">
                               @csrf

                                <br />
                                <label for="fullname">Title * :</label>
                                <input type="text" id="fullname" class="form-control" name="title"  value="{{$data->title}}" />
                                <br />
                                <label for="fullname">Category * :</label>
                                <input type="text" id="fullname" class="form-control" name="parent_id" value="{{$data->parent_id}}" />
                                <br />
                                <label for="fullname">Keywords * :</label>
                                <input type="text" id="fullname" class="form-control" name="keywords" value="{{$data->keywords}}"  />
                                <br />
                                <label for="fullname">Description * :</label>
                                <input type="text" id="fullname" class="form-control" name="description" value="{{$data->description}}"/>
                                <br />
                                <label for="fullname">Image * :</label>
                                <input type="file" id="fullname" class="form-control" name="image" value="{{$data->image}}"/>
                                <br />
                                <label for="fullname"  >Status * :</label>
                                <select class="form-control"  name="status">
                                    <option selected>{{$data->status}}  </option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                                <br />

                                <button class="btn btn-primary"><span>Update Category</span></button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->
@endsection
