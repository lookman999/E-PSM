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
                    <h1 class="m-0 text-dark">Technician Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Main</li>
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
                    <td width="30%" class="topleft"><img src="https://avatars.dicebear.com/api/initials/:{{$user_name}}.svg" width="200" height="180">
                        <h2><br></h2>
                        <h4>PSM Title:</h4>
                    </td>
                    <td width="20%">
                        <h2>Name</h2>
                        <h2>Technician ID</h2>
                        <h2>Office</h2>
                        <h2>Phone Number</h2>
                        <h2>Email</h2>
                    </td>
                    <td width="50%">
                        <h3>:&nbsp&nbsp{{$technicians[0]->name}}</h3>
                        <h3>:&nbsp&nbsp{{$technicians[0]->userID}}</h3>
                        <h3>:&nbsp&nbsp{{$technicians[0]->office}}</h3>
                        <h3>:&nbsp&nbsp{{$technicians[0]->phone}}</h3>
                        <h3>:&nbsp&nbsp{{$technicians[0]->email}}</h3>
                    </td>
                </tr>
            </table>
            <h2><br></h2>
            <h2><br></h2>
            <a class="button-73" role="button" href="TECHedit">Edit Profile</a>
            <h2><br></h2>
        </div><!-- /.container -->
    </div>
    <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />
