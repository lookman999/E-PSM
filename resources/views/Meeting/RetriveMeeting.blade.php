<?php

$logged_user = session()->get('logged_user');
$user_name = session()->get('name');
$roles = session()->get('user_type');

// $all = session()->all();

// var_dump($all);
?>
<x-header-new />
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Supervisor</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Utama</li>
            <!-- <li class="breadcrumb-item active">Starter Page</li> -->
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
 
  <style>
  .form-center form {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}
</style>
  <!-- Main content -->
  <style type="text/css">
			<style>
            
			  table {
			  font-family: arial, sans-serif;
			  border-collapse: collapse;
			  border: 1px solid black;
			  width: 100%;}
			  
			  th {
				border: 1px solid black;
				border-collapse: collapse;
				text-align: center;
				padding: 6px;
				background:#B2B2B2;
				color: black;}
				
			</style>
		 </style>
  <center>
			 <h1 style="text-align: center;">MEETING LIST</h1>
        </br>
        <button><a href="RetriveMeeting" >View Meeting<class="nav-link  @if(url()->current() ===  URL::to('/RetriveMeeting'))
	    	active
		    @endif">
		</a></button>
    <button><a href="AddMeetingStatus" >Add Meeting Status<class="nav-link  @if(url()->current() ===  URL::to('/AddMeetingStatus'))
	    	active
		    @endif">
		</a></button>
    <button><a href="EditMeetingBooking" >Edit Meeting Status<class="nav-link  @if(url()->current() ===  URL::to('/EditMeetingBooking'))
	    	active
		    @endif">
		</a></button>
  </center>
			<center><table>
			<tr class="center">
				<br><br>
        <th>Meeting ID</th>
				<th>Student ID</th>
				<th>Date Booking</th>
				<th>Start Time</th>
				<th>End Time</th>
				<th>Purpose</th>
				<th>Status</th>
				<th>Comment</th>	
			</tr>
      
      @foreach ($meetingsv as $data)
      <tr>
            <td>:&nbsp&nbsp{{$data->userID}}</td>
            <td>:&nbsp&nbsp{{$data->Meeting_Status}}</td>
            <td>:&nbsp&nbsp{{$data->Meeting_Comment}}</td>
      </tr>
     @endforeach
      
		</table></center>
  <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />