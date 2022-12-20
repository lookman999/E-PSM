<x-header-new />
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Logbook</h1>
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
    <div>
      <h2><br></h2>
      <h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Add Logbook</h4>
    </div>

    <div class="container">
      <table style="width:100%">
        <tr>
          <td width="30%" class="topleft">
            <h2><br></h2>


            <form action="AddLogBook" method="POST">
              @csrf
                  <label for="Title">Title   :</label><br>
                  <input type="text" id="Title" name="Title" style="width:500px;"><br>
                  <label for="name">Date :</label>
                  <input type="text" id="Date" name="Date" style="width:500px;"><br>
                  <label for="Prepared_by">Prepared By :</label>
                  <input type="text" id="Prepared_by" name="Prepared_by" style="width:500px;"><br>
                  <br>
                  <label for="Description">Description :</label>
                  <br>
                  <textarea rows="10" cols="80" type="text" id="Description" name="Description" style="width:500px;"></textarea>
                  <br><br>
                  <h2><br></h2>
                  <input type="submit" name="Submit" id="Submit" value="Submit" class="button-73">
                  <a class="button-73" role="button" href="LogbookViewSV">View Logbook</a>
                  <h2><br></h2>
            </form>
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
