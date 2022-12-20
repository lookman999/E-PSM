<?php

$logged_user = session()->get('logged_user');
$user_name = session()->get('name');
$roles = session()->get('user_type');

// $all = session()->all();

// var_dump($all);
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>UMP | e-PSM</title>

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

	<!-- Datatable -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>

			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a href="/home" class="nav-link">Main</a>
				</li>

				<li class="nav-item active">
					<a href="/logout" class="nav-link">Logout</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-light-purple elevation-2">
			<!-- Brand Logo -->
			<a class="brand-link" style="text-align: center;">
				<img class="w-50 h-auto" src="/./images/ump_logo.png" alt="UMP" />
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img class="w-10 h-auto rounded-circle" src="https://avatars.dicebear.com/api/initials/:{{$user_name}}.svg" alt="UMP" />
					</div>
					<div class="info">

						<span>{{$user_name}}</span>
					</div>
				</div>

                @if($roles == 'Student')
				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<li class="nav-item">
							<a href="/home" class="nav-link  @if(url()->current() ===  URL::to('/home'))
								active
						   @endif">
								<i class="nav-icon far far fa-edit"></i>
								<p>
									Homepage
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="/studentprofile" class="nav-link  @if(url()->current() ===  URL::to('/studentprofile'))
								active
						   @endif">
								<i class="nav-icon fas fa-th"></i>
								<p>
									Profile
								</p>
							</a>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link @if(url()->current() ===  URL::to('/mohon' ) or url()->current() ===  URL::to('mohon_two') or  url()->current() ===  URL::to('mohon_three') or  url()->current() ===  URL::to('mohon_tajaan')  or  url()->current() ===  URL::to('mohon_impak')  )
								active
						   @endif">
								<i class="nav-icon far far fa-edit"></i>
								<p>
									PSM Title and Activity
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>

							<ul class="nav nav-treeview  ">
								<li class="nav-item ">
									<a href="/ViewSVList" class="nav-link  @if(url()->current() ===  URL::to('/ViewSVList'))
								active
								@endif">
										<i class="fas fa-angle-right nav-icon"></i>
										<p>1.0 Hunting Supervisor</p>
									</a>
								</li>

								{{-- <li class="nav-item">
									<a href="/manage-proposal/proposal" class="nav-link ">
										<i class="fas fa-angle-right nav-icon"></i>
										<p>2.0 Proposal</p>
									</a>
								</li> --}}

								<li class="nav-item">
									<a href="/manage-title/my-title" class="nav-link @if(url()->current() ===  URL::to('/manage-title/my-title'))
								active
						   @endif">
										<i class="fas fa-angle-right nav-icon"></i>
										<p>2.0 Proposal</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="/LogbookStudent" class="nav-link  @if(url()->current() ===  URL::to('/LogbookStudent'))
								active
						   @endif">
										<i class="fas fa-angle-right nav-icon"></i>
										<p>3.0 Logbook</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="/AddMeetingBooking" class="nav-link  @if(url()->current() ===  URL::to('/AddMeetingBooking'))
								active
						   @endif">
										<i class="fas fa-angle-right nav-icon"></i>
										<p>4.0 Meeting</p>
									</a>
								</li>
							</ul>

						</li>

						{{-- <li class="nav-item">
							<a href="/manage-inventory/items" class="nav-link @if(url()->current() ===  URL::to('/inventory'))
								active
						   @endif
						  ">
								<i class="nav-icon far far fa-edit"></i>
								<p>
									Inventory
								</p>
							</a>
						</li> --}}
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
                @elseif($roles == 'Supervisor')
                <nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<li class="nav-item">
							<a href="/home" class="nav-link  @if(url()->current() ===  URL::to('/home'))
								active
						   @endif">
								<i class="nav-icon far far fa-edit"></i>
								<p>
									Homepage
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="supervisorprofile" class="nav-link  @if(url()->current() ===  URL::to('/supervisorprofile'))
								active
						   @endif">
								<i class="nav-icon fas fa-th"></i>
								<p>
									Profile
								</p>
							</a>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link @if(url()->current() ===  URL::to('/mohon' ) or url()->current() ===  URL::to('mohon_two') or  url()->current() ===  URL::to('mohon_three') or  url()->current() ===  URL::to('mohon_tajaan')  or  url()->current() ===  URL::to('mohon_impak')  )
								active
						   @endif">
								<i class="nav-icon far far fa-edit"></i>
								<p>
									PSM Title and Activity
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>

							<ul class="nav nav-treeview  ">

								{{-- <li class="nav-item">
									<a href="/manage-proposal/proposals" class="nav-link ">
										<i class="fas fa-angle-right nav-icon"></i>
										<p>1.0 Proposal</p>
									</a>
								</li> --}}

								<li class="nav-item">
									<a href="/manage-title/my-title-sv" class="nav-link ">
										<i class="fas fa-angle-right nav-icon"></i>
										<p>1.0 Proposal</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="/LogbookSupervisor" class="nav-link  @if(url()->current() ===  URL::to('/LogbookSupervisor'))
								active
						   @endif">
										<i class="fas fa-angle-right nav-icon"></i>
										<p>2.0 Logbook</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="/RetriveMeeting" class="nav-link  @if(url()->current() ===  URL::to('/RetriveMeeting'))
								active
						   @endif">
										<i class="fas fa-angle-right nav-icon"></i>
										<p>3.0 Meeting</p>
									</a>
								</li>
							</ul>

						</li>

					</ul>
				</nav>
                @elseif($roles == 'Technician')
                <nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<li class="nav-item">
							<a href="/home" class="nav-link  @if(url()->current() ===  URL::to('/home'))
								active
						   @endif">
								<i class="nav-icon far far fa-edit"></i>
								<p>
									Homepage
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="/technicianprofile" class="nav-link  @if(url()->current() ===  URL::to('/technicianprofile'))
								active
						   @endif">
								<i class="nav-icon fas fa-th"></i>
								<p>
									Profile
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="/manage-inventory/items" class="nav-link @if(url()->current() ===  URL::to('/inventory'))
								active
						   @endif
						  ">
								<i class="nav-icon far far fa-edit"></i>
								<p>
									Inventory
								</p>
							</a>
						</li>
					</ul>
				</nav>
                @elseif($roles == 'Coordinator')
                <nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<li class="nav-item">
							<a href="home" class="nav-link  @if(url()->current() ===  URL::to('/home'))
								active
						   @endif">
								<i class="nav-icon far far fa-edit"></i>
								<p>
									Homepage
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="coordinatorprofile" class="nav-link  @if(url()->current() ===  URL::to('/coordinatorprofile'))
								active
						   @endif">
								<i class="nav-icon fas fa-th"></i>
								<p>
									Profile
								</p>
							</a>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link @if(url()->current() ===  URL::to('/mohon' ) or url()->current() ===  URL::to('mohon_two') or  url()->current() ===  URL::to('mohon_three') or  url()->current() ===  URL::to('mohon_tajaan')  or  url()->current() ===  URL::to('mohon_impak')  )
								active
						   @endif">
								<i class="nav-icon far far fa-edit"></i>
								<p>
									PSM Title and Activity
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>

							<ul class="nav nav-treeview  ">
								<li class="nav-item ">
									<a href="ViewSVListCo" class="nav-link  @if(url()->current() ===  URL::to('/ViewSVListCo'))
								active
								@endif">
										<i class="fas fa-angle-right nav-icon"></i>
										<p>1.0 Hunting Supervisor</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="javascript:;" class="nav-link disabled">
										<i class="fas fa-angle-right nav-icon"></i>
										<p>2.0 Proposal</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="javascript:;" class="nav-link disabled">
										<i class="fas fa-angle-right nav-icon"></i>
										<p>3.0 Title selection</p>
									</a>
								</li>
						</li>
					</ul>
				</nav>
                @endif
			</div>
			<!-- /.sidebar -->
		</aside>
