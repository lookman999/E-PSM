// this for student apply for sv
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

<style>
	table.center{
		margin-left :auto;
		margin-right :auto;
	}
	
</style>
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Student Page </h1>
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
			 <h1 style="text-align: center;">Apply SV FORM</h1>
        </br>
		
		<button><a href="ApplySV" >Add Supervisor<class="nav-link  @if(url()->current() ===  URL::to('/ApplySV'))
		active
		@endif"></class="nav-link></a></button>

        
        <button><a href="ViewApplicationStatus" >View Application Status<class="nav-link  @if(url()->current() ===  URL::to('/ViewApplicationStatus'))
				active
				@endif"></class="nav-link></a></button>

				<button><a href="ViewSVList" >View Supervisor List<class="nav-link  @if(url()->current() ===  URL::to('/ViewSVList'))
				active
				@endif"></class="nav-link></a></button>
        <button <a href="" target="_blank">delete supervisor list </a></button>
        

  </center>
	<center>
		<fieldset>
		     <br>
		     <center>
                 <br>

       <table class="center">
        <form action="Addsv" method="POST" >
                @csrf
        <center>
        
        <td><td>
          <p>
          <td>
          <label for=Student_ID>Student ID:</label>
          </td>
          <td>
          <input type="text" name="Student_ID">
          </td>
          </p>
        </td>
        </tr>

        <td><td>
          <p>
          <td>
          <label for=Student_Name>Student Name:</label>
          </td>
          <td>
          <input type="text" name="Student_Name">
          </td>
          </p>
        </td>
        </tr>

        <td><td>
          <p>
          <td>
          <label for=Student_Email>Student Email:</label>
          </td>
          <td>
          <input type="int" name="Student_Email">
          </td>
          </p>
        </td>
        </tr>

        <td><td>
          <p>
          <td>
          <label for="Student_No">Student No:</label>
          </td>
          <td>
          <input type="int" name="Student_No"> 
          </td>
          </p>
        </td>
        </tr>

        <td><td>
          <p>
          <td>
          <label for="Course">Course:</label>
          </td>
          <td>
          <input type="text" name="Course"> 
          </td>
          </p>
        </td>
        </tr>

        <td><td>
          <p>
          <td>
          <label for="Project_Title">Project Title:</label>
          </td>
          <td>
          <input type="text" name="Phone_Number"> 
          </td>
          </p>
        </td>
        </tr>

        <td><td>
          <p>
          <td>
          <label for="topic">Summaries Topic:</label>
          </td>
          <td>
          <input type="text" name="topic"> 
          </td>
          </p>
        </td>
        </tr>

        <td><td>
          <p>
          <td>
          <label for="reason">Reason Apply sv:</label>
          </td>
          <td>
          <input type="text" name="reason"> 
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