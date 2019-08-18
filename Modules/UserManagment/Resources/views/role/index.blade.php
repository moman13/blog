@extends('usermanagment::layouts.master')

@section('title', 'AdminLTE')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Role
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">role</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div align="right">
                            <button type="button" name="add_role" id="add_role" class="btn btn-success btn-sm">Add Role</button>
                        </div>
                        <br />
                        <table class="table table-bordered">
                            <tbody><tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Details</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>Admin</td>
                                <td>
                                    <small>Users have this role: </small>
                                    <span class="badge bg-red">5</span>
                                </td>
                                <td>
                                    <a class="btn btn-default">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                    <a class="btn btn-danger">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>

                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>SubAdmin</td>
                                <td>
                                    <small>Users have this role: </small>
                                    <span class="badge bg-red">5</span>
                                </td>
                                <td>
                                    <a class="btn btn-default">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                    <a class="btn btn-danger">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>

                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Writer</td>
                                <td>
                                    <small>Users have this role: </small>
                                    <span class="badge bg-red">2</span>
                                </td>
                                <td>
                                    <a class="btn btn-default">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                    <a class="btn btn-danger">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>

                                </td>
                            </tr>
                            </tbody></table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">«</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- ./row -->
    </section>
    <!-- /.content -->
@stop