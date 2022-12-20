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

  <style>
  .form-center form {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}
</style>
  <!-- Main content -->
  <style type="text/css">
      <styl>

        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        border: 1px solid black;
        width: 100%;}

        th {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
        padding: 6px;
        background:#B2B2B2;
        color: black;}

      </style>
  <center>
       <h1 style="text-align: center;">Supervisor List</h1>
       </br>
    <button><a href="ApplySV" >Add Supervisor<class="nav-link  @if(url()->current() ===  URL::to('/ApplySV'))
    active
    @endif">
    </a></button> //student apply sv
    <button><a href="ViewSVList" >View Supervisor list<class="nav-link  @if(url()->current() ===  URL::to('/ViewSVList'))
    active
    @endif">
    </a></button> // view sv list
    <button><a href="ViewApplicationStatus" >View Application Status<class="nav-link  @if(url()->current() ===  URL::to('/ViewApplicationStatus'))
    active
    @endif">

    </a>
  </button> // view application status
  </center>

      <center>
        <table>
          <tr class="center">
            <br><br>

            <th>Supervisor Name</th>
            <th>Expertise</th>
          </tr>
          @foreach ($SvHunting as $data)
          <tr>

            <h3>:&nbsp&nbsp{{$data[0]->name}}</h3>
            <h3>:&nbsp&nbsp{{$data[0]->expertise}}</h3>

          </tr>
         @endforeach



    </table>
  </center>
  <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />
