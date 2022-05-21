@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Student</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h4>Change Password</h4>
              </div><!-- /.card-header -->
              <div class="card-body">
                <form method="POST" action="{{route('users.store')}}" id="myForm">
                  @csrf
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="current_password">Current Password</label>
                      <input type="password" name="password" id="current_password" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="new_password">New Password</label>
                      <input type="password" name="new_password" id="new_password" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="again_new_password">Again New Password</label>
                      <input type="passward" name="again_new_password" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <input type="submit" name="" value="Update" class="btn btn-primary">
                    </div>
                  </div>
                </form>          
              </div>
              <!-- /.card-body -->
            </div>

          </section>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <script type="text/javascript">

    $(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        alert( "Form successful submitted!" );
      }
    });
    $('#myForm').validate({
      rules: {
           current_ password : {
              required : true
            },
            new_password : {
              required : true;
              minlength : 6
            },
            again_new_password :{
              required : true,
              equalTo : '#new_password'
            }
          },
      messages: {
            current_password: {
              required: "Please enter current password",
            },
            new_password: {
              required: "Please enter new password",
              minlength: "Password will be minimum 6 characters or numbers"
            },
            again_new_password: {
              required: "Please enter confirm again new password",
              equalTo: "Confirm password does not match"
            }     
          },
          errorElement: 'span',
          errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
          },
          highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
          },
          unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
          }
        });
      });
    </script>
@endsection