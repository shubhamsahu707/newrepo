@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                  <a href="{{URL('admin')}}"><button type="button" class="btn btn-primary">ADD </button></a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="panel-body"> 
            	<div class="box-body">
               <table id="example2" class="table table-bordered table-striped" style="width:100%">
        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
            
</div>
</div>
</div>

@stop
  