//this for coordinator add sv
<?php

$logged_user = session()->get('logged_user');
$user_name = session()->get('name');
$roles = session()->get('user_type');

// $all = session()->all();

// var_dump($all);
?>

<x-header-new />

<style>
	
	table.center{
		margin-left :auto;
		margin-right :auto;
	}
	
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Coordinator Page </h1>
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
			 <h1 style="text-align: center;">ADD SV FORM</h1>
        </br>
		
   	<button><a href="Addsv" >Add Supervisor<class="nav-link  @if(url()->current() ===  URL::to('/Addsv'))
		active
		@endif"></class="nav-link></a></button>
		<button><a href="ViewSVListCo" >View Supervisor List<class="nav-link  @if(url()->current() ===  URL::to('/ViewSVListCo'))
		active
		@endif"></class="nav-link></a></button>

		<button <a href="" target="_blank">Delete Supervisor </a></button>

  </center>

  <center><fieldset>
         <br>

       <table class="center">
        <form action="Addsv" method="POST" >
                @csrf
        <center>
        
        <td><td>
          <p>
          <td>
          <label for=Name>Name:</label>
          </td>
          <td>
          <input type="Name" name="Name">
          </td>
          </p>
        </td>
        </tr>

        <td><td>
          <p>
          <td>
          <label for=Supervisor_ID>Supervisor ID:</label>
          </td>
          <td>
          <input type="Supervisor_ID" name="Supervisor_ID">
          </td>
          </p>
        </td>
        </tr>

        <td><td>
          <p>
          <td>
          <label for=Faculty>Faculty:</label>
          </td>
          <td>
          <input type="Faculty" name="Faculty">
          </td>
          </p>
        </td>
        </tr>

        <td><td>
          <p>
          <td>
          <label for="Expertise">Expertise:</label>
          </td>
          <td>
          <input type="text" name="Expertise"> 
          </td>
          </p>
        </td>
        </tr>

        <td><td>
          <p>
          <td>
          <label for="Office">Office:</label>
          </td>
          <td>
          <input type="text" name="Office"> 
          </td>
          </p>
        </td>
        </tr>

        <td><td>
          <p>
          <td>
          <label for="Phon_Number">Phone Number:</label>
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
          <label for="Email">Email:</label>
          </td>
          <td>
          <input type="text" name="Email"> 
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