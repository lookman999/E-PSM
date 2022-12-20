<?php

$logged_user = session()->get('logged_user');
$user_name = session()->get('name');
$roles = session()->get('user_type');
// $all = session()->all();

// var_dump($all);
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

  <!-- Main content -->
  <div class="content">
    <div class="container">
      <table style="width:100%">
        <tr>
         	<center>
			 <h1 style="text-align: center;">MEETING BOOKING FORM</h1>
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
	<center><fieldset>
		     <br>

			 <table class="center">
				<form action="MeetingBooking" method="POST" >
                @csrf
				<center>
				
				<td><td>
					<p>
					<td>
					<label for=Meeting_Date>Meeting Date:</label>
					</td>
					<td>
					<input type="date" name="Meeting_Date">
					</td>
					</p>
				</td>
				</tr>

				<td><td>
					<p>
					<td>
					<label for=Meeting_Start>Start Time:</label>
					</td>
					<td>
					<input type="time" name="Meeting_Start">
					</td>
					</p>
				</td>
				</tr>

				<td><td>
					<p>
					<td>
					<label for=Meeting_End>End Time:</label>
					</td>
					<td>
					<input type="time" name="Meeting_End">
					</td>
					</p>
				</td>
				</tr>

				<td><td>
					<p>
					<td>
					<label for="Meeting_Purpose">Meeting purpose:</label>
					</td>
					<td>
					<input type="text" name="Meeting_Purpose"> 
					</td>
					</p>
				</td>
				</tr>
			</table>
			<br>
			<center>
			<input type="submit" name="Submit" id="Submit" value="Submit" method="post">
            </center>
			</p>
			</form>
		</fieldset>
	</center>
</table>
    </div><!-- /.container -->
  </div>
  <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />