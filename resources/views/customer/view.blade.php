@include('header')
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

<div id="page-wrapper">
<div class="col-md-12">
  <!-- Custom Tabs (Pulled to the right) -->
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs pull-right">
      
      <li ><a href="#tab_2-2" data-toggle="tab">All Messages</a></li>
      <li class="active"><a href="#tab_3-2" data-toggle="tab">Users Complain</a></li>
      <li class="pull-left header"><i class="fa fa-th"></i>All Information</li>
      <!-- <li class="active"><a href="#tab_1-1" data-toggle="tab">Account Payment details</a></li> -->
    </ul>
    <div class="tab-content">
      <div class="tab-pane" id="tab_1-1">
        <button class="btn-info" onclick="window.history.back();">Back</button>
        <div class="panel panel-default">
                <div class="panel-heading">
                    Account Details
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    
                    <table width="100%" class="table" id="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Membership ID</th>
                                <th>TXNID</th>
                                <th>Type</th>
                                <th>Credit</th>
                               <th>Paid</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        <?php $i=1; foreach ($tbl_mamberpayments   as $key => $value) {
                            
                           ?>
                            <tr>
                               <td><?php echo $i++  ;?></td>
                                <td><?php echo $value->member_id;?></td>
                                <td><?php echo $value->txnID;?></td>
                                 <td><?php echo $value->payType;?></td>
                                 <td><?php echo $value->payType;?></td>
                                <td><?php echo $value->paid;?></td>

                                <td><?php echo $value->payDate;?></td>
                            </tr>
                               <?php } ?>
                            
                        </tbody>

                    </table>
                    </div><!-- /.table-responsive -->
                    
                
                <!-- /.panel-body -->
            </div>
        
      </div>
      <style>
    #overflowTest {
        padding: 15px;
        width: 100%;
        height: 350px;
        overflow: scroll;
        border: 1px solid #ccc;
    }
    ul li{ text-decoration: none; list-style-type: none;}
    </style>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="tab_2-2">
       
        <div class="panel panel-default">
                <div class="panel-heading">
                    Message
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    
                   <ul class="chat" id='overflowTest'>
     <?php foreach($messages as $msg){ 
      if($msg->user_id==0){ ?>
                <li class="left clearfix img-circle">
                <div style="background: #ff9; height: 100px; width: 300px; margin-top: 20px; text-align: left;">
                <span class="chat-img pull-left">
                    <img src="{{ URL::to('/vendor/download.jpeg')}}" alt="User Avatar" class="img-circle" height="30" width="30"/>
                </span>
                    <div class="chat-body clearfix">
                        <div class="header">URL::                                    <strong class="primary-font img-circle"> <?php echo $msg->subject;?></strong> <small class="pull-right text-muted">
                                <span class="glyphicon glyphicon-time"></span>12 mins ago</small>
                        </div>
                        <p>
                            <?php echo $msg->message;?>
                        </p>
                    </div>
                    </div>
                </li>
                 <?php } else { ?>
                <li class="left clearfix">
                    <div style="background: #ff9; height: 100px; width: 300px; margin-top: 20px; text-align: right;">
                <span class="chat-img pull-left">
                    <img src="{{ URL::to('/vendor/download.jpeg')}}" alt="User Avatar" class="img-circle" height="30" width="30" />
                </span>
                    <div class="chat-body clearfix">
                        <div class="header">
                            <small class=" text-muted"><span class="glyphicon glyphicon-time"><?php echo $msg->created_at;?></span></small><br>
                            <strong class="pull-right primary-font"> <?php echo $msg->subject;?></strong>
                        </div><br>
                        <p>
                           <?php echo $msg->message;?>
                        </p>
                    </div>
                    </div>
                </li>
                <?php } }?>
               
            </ul>
                    </div><!-- /.table-responsive -->
                    
                
                <!-- /.panel-body -->
            </div>
        
      </div>
      <!-- /.tab-pane -->
     <div class="tab-pane active" id="tab_3-2">
       
        <div class="panel panel-default">
                <div class="panel-heading">
                  User Complain
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    
                    <table width="100%" class="table" id="table2">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Membership ID</th>
                                <th>User Name</th>
                                <th>Subject</th>
                               <th>Message</th>
                               <TH>Complain</TH>
                                <th>Date</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        <?php $i=1; foreach ($complains as $key => $value) {
                            
                           ?>
                            <tr>
                               <td><?php echo $i++;?></td>
                                <td><?php echo $value->member_id;?></td>
                                 <td><?php echo $value->user_name;?></td>  
                                 
                                 <td><?php echo $value->subject;?></td>
                                <td><?php echo $value->message;?></td>
                                <?php if($value->status_red==0){?>
                                <td colspan="2"><a class="btn btn-danger" href="{{url('admin/customer-view-message-show-single')}}/<?php echo $value->id;?>">Complain</a>
                                </td>

                                <?php } elseif($value->status_red==1){ ?>
                                <td colspan="2"><a href="{{url('admin/customer-view-message-show-single')}}/<?php echo $value->id;?>" class="btn btn-info">Continue</a><a href="{{url('admin/customer-view-message-show')}}/<?php echo $value->id;?>" class="btn btn-danger">Done</a></td>
                                <?php } else{ ?>
                                <td colspan="2"><a href="javascript:void(0);" class="btn btn-success">Done</a>
                                  <a href="{{url('admin/customer-view-message-show-single')}}/<?php echo $value->id;?>" class="btn btn-success">Done</a>
                                </td>
                                <?php }?>
                                <td><?php echo $value->created_at;?></td>
                            </tr>
                               <?php } ?>
                            
                        </tbody>

                    </table>
                    </div><!-- /.table-responsive -->
                    
                
                <!-- /.panel-body -->
            </div>
        
      </div>
      <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
  </div>
  <!-- nav-tabs-custom -->
</div>
<!-- /.col -->
</div>


@stop
<script>
$(document).ready(function() {
$('#table').DataTable();
} );
$(document).ready(function() {
$('#table1').DataTable();
} );
$(document).ready(function() {
$('#table2').DataTable();
} );
</script>




