<?php

$logged_user = session()->get('logged_user');
$user_name = session()->get('name');
$roles = session()->get('user_type');

// $all = session()->all();

// var_dump($all);
?>
?>
<style>
	table.center{
		margin-left :auto;
		margin-right :auto;
	}
	}
</style>
<x-header-new />
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Student Profile</h1>
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
			 <h1 style="text-align: center;">MEETING BOOKING LIST</h1>
       </br>
		<button><a href="AddMeetingBooking" >Add Meeting Booking<class="nav-link  @if(url()->current() ===  URL::to('/AddMeetingBooking'))
		active
		@endif">
		</a></button>
		<button><a href="ViewMeetingBooking" >View Meeting Booking<class="nav-link  @if(url()->current() ===  URL::to('/ViewMeetingBooking'))
		active
		@endif">
		</a></button>
		
  </center>
			<center><table>
			<tr class="center">
				<br><br>
				<th>Student ID</th>
				<th>Date Booking</th>
				<th>Start Time</th>
				<th>End Time</th>
				<th>Purpose</th>
				<th>Status</th>
				<th>Comment</th>	
			</tr> 
      @foreach ($meetings as $data)
   <tr>
            <td>:&nbsp&nbsp{{$data->userID}}</td>
            <td>:&nbsp&nbsp{{$data->Meeting_Date}}</td>
            <td>:&nbsp&nbsp{{$data->Meeting_Start}}</td>
            <td>:&nbsp&nbsp{{$data->Meeting_End}}</td>
            <td>:&nbsp&nbsp{{$data->Meeting_Purpose}}</td>
			<td>
			<td>
			<td><input type="submit" name="Submit" id="Submit" value="Delete" method="post"><td>

    </tr>
     @endforeach
      
        

		</table></center>
  <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />