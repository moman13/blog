@extends('usermanagment::layouts.master')

@section('title', 'AdminLTE')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit User Privlages
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="">users</li>
            <li class="active">edit</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody><tr>
                                <th>Menu</th>
                                <th>Add</th>
                                <th>Show</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>All</th>

                            </tr>
                            <tr>
                                <td>Posts</td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>

                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Users</td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>

                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Categories</td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>

                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Comments</td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>

                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Settings</td>
                                <td>
                                    <label>
                                        #

                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        #

                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>
                                    </label>
                                </td>
                            </tr>
                            </tbody></table>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-success pull-right">Save</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ./row -->
    </section>
    <!-- /.content -->
@stop