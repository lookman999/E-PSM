<?php

$logged_user = session()->get('logged_user');
$user_name = session()->get('name');
$roles = session()->get('user_type');

// $all = session()->all();

// var_dump($all);
?>

<!DOCTYPE html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  <style>
	.table.center{
		margin-left :auto;
		margin-right :auto;
	}
	.table{
		margin-top: 50px;
	}
	.table2{
		padding-left: 50px;
		padding-right: 50px;
	}
	.form-center form {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
	}
	.button-73{
		border-radius: 30%;
		padding: 10%;
	}
	
</style>

</head>

<x-header-new />
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Logbook </h1>
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

  	@if(session('updateLogbook'))
    <div class="alert alert-success" role="alert" style="margin-left:10px; width:90%;">
        {{session('updateLogbook')}}
    </div>
	@elseif(session('deletelogbook'))
    <div class="alert alert-danger" role="alert" style="margin-left:10px; width:90%;">
        {{session('deletelogbook')}}
    </div>
    @endif

	<center>
		<h1 style="text-align: center;">Logbook</h1>
       	</br>
		<button>
			<a href="LogbookStudent" >Add Logbook<class="nav-link  @if(url()->current() ===  URL::to('/LogbookStudent'))
				active
				@endif">
			</a>
		</button>
	</center>


	<div class="table2">
		<table class="table" width="50%">
			<thead>
				<tr>
					<th>Title:</th>
					<th>Prepared By:</th>
					<th>Date:</th>
					<th>Description</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($meetings as $data)
				<tr>
					<td>{{$data->Title}}</td>
					<td>{{$data->Prepared_by}}</td>
					<td>{{$data->Date}}</td>
					<td>{{$data->Description}}</td>
					<td>
					<div class="flex justify-around">
						<a class="button-73" href = 'editlogbook/{{ $data->id }}'>Edit</a></button>

						<div class="">
							<form action="deletelogbook" method="post" onsubmit="return confirm('Do you really want to delete?');">
								@csrf
								<input type="hidden" name="id" value="{{$data->id}}">
								<button type="Submit" id="Submit" value="Delete" class="button-73"> Delete</button>
							</form>
						</div>
				
					
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</div>
<!-- ./wrapper -->
<script>
function my_button_click_handler()
{
alert('Are should want delete');
}
</script>
<x-footer-new />
