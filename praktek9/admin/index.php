<html>
    <head>
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
               Login
                </div>
                <div class="card-body">
                    <form method="post" action="login.php">
                        <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label ">Username </label>
                            <div class="col-sm-10">
                                <input type="text" name="username" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pasword" class="col-sm-2 col-form-label ">Password </label>
                            <div class="col-sm-10">
                                <input type="text" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <div class="col-sm-10 ">
                                <button type="submit" name="Submit" class="btn btn-primary ">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>