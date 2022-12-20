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
            
            
            <form action="/action_page.php">
                  <label for="title">Title   :</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  <input type="text" id="title" name="title" style="width:220px;"><br>
                  <label for="lname">Date :</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  <input type="text" id="Date" name="Date" style="width:220px;"><br>
                  <label for="PreparedBy">Prepared By :</label>&nbsp&nbsp
                  <input type="text" id="PreparedBy" name="PreparedBY" style="width:220px;"><br>
                  
                  <textarea name="message" rows="10" cols="80"></textarea>
                  <br><br>
                  <h2><br></h2>
                  <a class="button-73" role="button" href="EditProfile">Add logbook</a>
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