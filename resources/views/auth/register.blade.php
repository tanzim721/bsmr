<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registation Form</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
        body{

        }
        .centered-form{
            margin-top: 60px;
        }

        
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
          <!-- Left col -->
          <section class="col-md-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3>Registation</h3> 
                
              </div><!-- /.card-header -->
              <div class="card-body">
                <form method="POST" action="{{route('users.store')}}" id="myForm">
                  @csrf
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="usertype">User Role</label>
                      <select name="usertype" id="usertype" class="form-control">
                        <option value="">Select Role</option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="name" >Name</label>
                      <input type="text" name="name" class="form-control">
                      <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control">
                      <font style="color:red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="password">Password</label>
                      <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="password">Confirm Password</label>
                      <input type="passward" name="password2" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <input type="submit" name="" value="submit" class="btn btn-primary">
                    </div>
                  </div>
                </form>          
              </div>
              <!-- /.card-body -->
            </div>

          </section>
        </div>
</div>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>