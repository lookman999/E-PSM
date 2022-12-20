
<style>
	table.center{
		margin-left :auto;
		margin-right :auto;
	}
	}
</style><x-header-new />
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

  <!-- Main content -->
  <div class="content">
    <div class="container">
      <table style="width:100%">
        <tr>
        <center>
			 <h1 style="text-align: center;">EDIT MEETING STATUS</h1>
       <br>
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
		</a></button>
  </center>
	<center><fieldset>
		     <br>

			 <table class="center">
				<form action="RetriveMeeting"  >
                @csrf
				<center>
				<td><td>
					<p>
					<td>
					<label for=id">Meeting ID:</label>
					</td>
					<td>
					<input type="text" name="id"> 
					<td>
					</p>
				</td>
                </tr>
			
				<td><td>
					<p>
					<td>
					<label for="Meeting_Status">Meeting status:</label>
					</td>
					<td>
					<input type="text" name="Meeting_Status" >  
					</td>
					</p>
				</td>
				</tr>

                <td><td>
					<p>
					<td>
					<label for="Meeting_Comment">Meeting Comment:</label>
					</td>
					<td>
					<input type="text" name="Meeting_Comment"> 
					</td>
					</p>
				</td>
				</tr>
			</table>
			<center>
				<br>
			<input type="submit" name="Submit" id="Submit" value="Save" method="post">
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