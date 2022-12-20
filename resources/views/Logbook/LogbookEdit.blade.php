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
      <h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Edit Logbook</h4>
    </div>

    <div class="container">
      <table style="width:100%">
        <tr>
          <td width="30%" class="topleft">
            <h2><br></h2>


            <form action = "/editlogbook/" method = "post" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">
              <input type = "hidden" name = "_token" value = "">

                  <label for="Title">Title   :</label><br>
                  <input type="text" id="Title" name="Title" style="width:500px;"><br><br>
                  <label for="name">Date :</label><br>
                  <input type="text" id="Date" name="Date" style="width:500px;"><br><br>
                  <label for="Prepared_by">Prepared By :</label><br>
                  <input type="text" id="Prepared_by" name="Prepared_by" style="width:500px;"><br><br>
                  <label for="Description">Description :</label><br>
                  <textarea name="Description" rows="10" cols="80"></textarea>
                  <br><br>
                  <h2><br></h2>
                  <button type="submit"  value = "Edit " class="button-73" >Save Logbook</button>
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
