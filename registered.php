<?php


include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');


?>

<div class="content-wrapper">



<!-- Modal -->
<div class="modal fade" id="AdduserModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel" align="center">Registration Form</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h5 class="modal-title" id="exampleModalLabel" >Personal Information</h5>


      <form action="connect1.php" method="post">
        <div class="form-group">
            <label for="username">Name:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>

        <div class="form-group">
            <label for="faname">Father's name:</label>
            <input type="text" class="form-control" id="faname" name="faname" required>
        </div>
        <div class="form-group">
            <label for="maname">Mother's name:</label>
            <input type="text" class="form-control" id="maname" name="maname" required>
        </div>
        <div class="form-group">
            <label for="birth">Date of Birth:</label>
            <input type="date" class="form-control" id="birth" name="birth" required>
        </div>
        <div class="form-group">
        <label for="gender">Gender : </label>
      <select id="inputState" class="form-control">
        <option selected>Female</option>
        <option>Male</option>
      </select>

      <br><h5 class="modal-title" id="exampleModalLabel">Contact Information</h5><br>
      <div class="form-group">
            <label for="permaddress">Permanent Address:</label>
            <input type="text" class="form-control" id="permaaddress" name="permaaddress" required>
        </div>
        <div class="form-group">
            <label for="preaddress">Present Address:</label>
            <input type="text" class="form-control" id="preaddress" name="preaddress" required>
        </div>
        <div class="form-group">
            <label for="phone ">Phone No:</label>
            <input type="number" class="form-control" id="phone" name="phone" required>
        </div>




        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
     
        <br><h5 class="modal-title" id="exampleModalLabel">Degree Information</h5><br>


        <div class="form-group">
            <label for="dename">Degree name:</label>
            <input type="text" class="form-control" id="dename" name="dename" required>
        </div>
        <div class="form-group">
            <label for="Regno">Reg No:</label>
            <input type="number" class="form-control" id="Regno" name="Regno" required>
        </div>
        <div class="form-group">
            <label for="batch">Batch :</label>
            <input type="number" class="form-control" id="batch" name="batch" required>
        </div>
       
        <div class="form-group">
            <label for="Passyear">Pass Year :</label>
            <input type="number" class="form-control" id="Passyear" name="Passyear" required>
        </div>
       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>

      </form>
    </div>
  </div>
</div>


  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registered user</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    </div>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Register User</h3>


                <a href="#" data-toggle="modal" data-target="#AdduserModel" class="btn btn-primary btn-sm float-right">Add user</a>
                <!-- Button trigger modal -->

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                  </tr>
                  </tbody>
                </table>



              </div>

</div>
</div>

</div>
</div>


<?php


include('includes/footer.php');



?>