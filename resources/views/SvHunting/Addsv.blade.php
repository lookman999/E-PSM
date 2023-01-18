{{-- this for coordinator add sv --}}
<?php

$logged_user = session()->get('logged_user');
$user_name = session()->get('name');
$roles = session()->get('user_type');

?>

<x-header-new />

<style>

	table.center{
		margin-left :auto;
		margin-right :auto;
	}
    .input{
        width:500px;
        padding:8px;
    }


</style>

<!-- Content Wrapper. Contains page content -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
alpha/css/bootstrap.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css"
href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


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
                <h1 style="text-align: center; background-color:rgb(232, 199, 199); color:black; margin:15px; padding:12px; display:inline-block;  border-radius: 35px;" >ADD SV FORM</h1>

               <script>
                @if(Session::has('success'))
                toastr.options =
                {
                    "closeButton" : true,
                    "progressBar" : true
                }
                        toastr.success("{{ session('success') }}");
                @endif
                </script>


                @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
                @endif


        </br>

        <a href="{{ route('AddrecordSV') }}" class="btn btn-md btn-success ">Add Supervisor<class="nav-link  @if(url()->current() ===  URL::to('/ApplySV'))
            active
            @endif"></class="nav-link></a>

        <a href="ViewSVList" class="btn btn-md btn-dark">View Supervisor List<class="nav-link  @if(url()->current() ===  URL::to('/ViewSVList')) active	@endif"></class="nav-link></a>

        {{-- <a href="" target="_blank" class="btn btn-md btn-danger">Delete Supervisor List </a> --}}

  </center>

  <center><fieldset>
         <br>

       <table class="table table-hover">
        <form action="Addsv" method="POST" >
                @csrf
        <center>

        <td><td>
          <p>
          <td>
          <label for=Name>Name:</label>
          </td>
          <td>
          <input type="Name" name="Name" class="input" required>
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
          <input type="Supervisor_ID" name="Supervisor_ID" class="input" required>
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
          <input type="Faculty" name="Faculty" class="input" required>
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
          <input type="text" name="Expertise" class="input" required>
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
          <input type="text" name="Office" class="input" required>
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
          <input type="text" name="Phone_Number" class="input" required>
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
          <input type="text" name="Email" class="input" required>
          </td>
          </p>
        </td>
        </tr>

      </table>
      <br>
      <center>
      <button name="Submit" class="btn btn-lg btn-primary" id="Submit">Submit</button>
      <button name="Reset" class="btn btn-lg btn-danger" id="Submit" value="reset">Clear</button>
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
