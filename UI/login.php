<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mx-auto w-25 my-5 border border-0">
            <div class="card-header bg-white text-dark border-0">
                <h2 class="text-center">LOGIN</h2>
            </div>
            <div class="card-body">
                <form action="../userAction.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-12 mt-3">
                            <input type="text" name="username" id="" class="p-4 form-control" placeholder="USERNAME">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 mb-4">
                            <input type="password" name="password" id="" class="p-4 form-control" placeholder="PASSWORD">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 mx-auto">
                            <button type="submit" name="login" class="btn btn-dark form-control text-uppercase">LOGIN</button>
                        </div>
                    </div>
                </form>
            </div>    
        </div>
    </div>
</body>
</html>