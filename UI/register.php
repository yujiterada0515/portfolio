<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <!-- <div class="container w-50"> -->
    <div class="container">
        <div class="card mx-auto w-50 my-5 border border-0">
            <div class="card-header bg-white text-dark border-0">
                <h2 class="text-center">Sign up</h2>
            </div>
            <div class="card-body">
                <form action="../userAction.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6 mt-3">
                            <input type="text" name="first_name" id="" class="p-4 form-control" placeholder="FIRST NAME" required>
                        </div>
                        <div class="from-group col-md-6 mt-3">
                            <input type="text" name="last_name" id="" class="p-4 form-control" placeholder="LAST NAME" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" name="address" id="" class="form-control p-4" placeholder="ADDRESS">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" name="contact_number" id="" class="form-control p-4" pattern="[0-9]+" maxlength="11" placeholder="CONTACT_NUMBER">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="email" name="email" id="" class="form-control p-4" placeholder="EMAIL">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" name="username" id="" class="form-control p-4" placeholder="USERNAME">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="password" name="password" id="" class="form-control p-4" placeholder="PASSWORD">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <button type="submit" name="signup" class="btn btn-dark form-control text-uppercase">Sign Up</button>
                            <small>Are you already logged in?</small>  <a href="login.php">login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>