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
  
  <center>
			 <h1 style="text-align: center;">Application LIST</h1>
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
        <button><a href="ViewSVList" class="nav-link  @if(url()->current() ===  URL::to('/ViewSVList'))
								active
								@endif">
							</a></button>
        		
  </center>
			<center><table>
			<tr class="center">
				<br><br>
				
				<th>Supervisor Name</th>
				<th>Expertise</th>
				<th>Status</th>
			</tr>
			@foreach ($sv_hunting as $data)
          <tr>
            
            <h3>:&nbsp&nbsp{{$data->name}}</h3>
            <h3>:&nbsp&nbsp{{$data->expertise}}</h3>
            <h3>:&nbsp&nbsp{{$data->status}}</h3>
                        
          </tr>
         @endforeach

		</table></center>
  <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />