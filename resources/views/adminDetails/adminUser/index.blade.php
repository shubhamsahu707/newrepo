
@include('header')
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                  <a href="{{URl('index')}}"><button type="button" class="btn btn-primary">ADD </button></a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Members List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="pre-scrollable">
                            <table width="100%" class="table" id="table">
                                <thead>
                                    <tr  >
                                        <th>#</th>
                                        <th>Membership ID</th>
                                        <th>Main Applicant Name</th>
                                        <th>Co-Applicant Name</th>
                                        <th>Location</th>
                                        <th>Date of Joining</th>
                                        <th>Date of Validity</th>
                                       
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                
                                <tbody>

                                    <tr class="success">
                                       <td>1</td>
                                        <td>Ram</td>
                                         <td>Kam</td>
                                         <td>Shaym</td>
                                         <td>Dhayam</td>
                                         <td>kaka</td>
                                         <td>HJfhjsa</td>
                                         
                                        <td><a class="fa fa-pencil btn btn-primary" href=""></a>&nbsp;&nbsp;&nbsp;<a class="fa fa-trash btn btn-danger" href=""></a></td>
                                    </tr>
                                    
                                </tbody>

                            </table>
                            </div><!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                    
            <!-- /.row -->
        </div>
        @stop
        <script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
 </script>