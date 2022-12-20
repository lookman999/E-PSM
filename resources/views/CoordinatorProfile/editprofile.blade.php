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
                    <h1 class="m-0 text-dark">Edit Profile</h1>
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
            <form action="CO_update" method="post">
                {{ csrf_field() }}
                <table style="width:100%">
                    <tr>
                        <td width="30%" class="topleft"><img src="https://avatars.dicebear.com/api/initials/:{{$user_name}}.svg" width="200" height="180">
                            <h2><br></h2>
                            <h4>PSM Title:</h4>
                        </td>
                        <td width="70%">
                            <table>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Name</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp{{$coordinators[0]->name}}</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Supervisor ID</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp{{$coordinators[0]->userID}}</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Faculty</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp<input type="text" name="faculty" value="{{$coordinators[0]->faculty}}"></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Office</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp<input type="text" name="office" value="{{$coordinators[0]->office}}"></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Phone Number</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp<input type="text" name="phone" value="{{$coordinators[0]->phone}}"></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Email</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp<input type="text" name="email" value="{{$coordinators[0]->email}}"></h3>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <h2><br></h2>
                <h2><br></h2>
                <input type="submit" value="Update" class="button-73">
                <h2><br></h2>
            </form>
        </div><!-- /.container -->
    </div>
    <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />
