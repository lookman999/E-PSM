<?php

$logged_user = session()->get('logged_user');
$user_name = session()->get('name');
$roles = session()->get('user_type');

// $all = session()->all();

// var_dump($all);
?>
<style>
    #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  padding: 30px;

}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #00FF5B;}

#customers th {
  padding: 20px;
  text-align: left;
  background-color: #FCFF00;
  color: #FF0000;
  text-align: center;

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
          <h1 class="m-0 text-dark">Homepage</h1>
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
    <div class="container" style="top: 40px">
      <table style="width:100%" id="customers">
        <tr>
            <th><b>Announcement Board</b></th>
        </tr>
        <tr>
            <td>
                <marquee width="100%" direction="left" height="30px">
                    PSM Students session 2022/2023 can hunt supervisor starting from 25/02/2022
                </marquee>
            </td>
          </tr>
          <tr>
            <td>
                <marquee width="100%" direction="right" height="30px">
                    All PSM title proposal will require approvement from both Coordinator and Supervisor
                </marquee>
            </td>
          </tr>
          <tr>
            <td>
                <marquee width="100%" direction="left" height="30px">
                    <b>***Any latest announcement will be updated through this page***</b>
                </marquee>
            </td>
          </tr>
      </table>
      <h2><br></h2>
    </div><!-- /.container -->
  </div>
  <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />
