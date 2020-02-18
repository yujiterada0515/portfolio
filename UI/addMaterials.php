<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
    <div class="navbar">
        <nav class="navbar navbar-expand-lg navbar-white bg-transparent fixed-top">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                    <a href="admin.php" class="nav-link text-danger" style="opacity: 1;"><i class="fas fa-chevron-left fa-2x text-secondary"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav float-right">
                <!-- <li class="nav-item">
                    <a href="profile.php" class="nav-link text-primary"><i class="fas fa-user"></i> Profile</a>
                </li> -->
                <li class="nav-item">
                    <a href="logout.php" class="nav-link text-danger" style="opacity: 1;"><i
                            class="fas fa-user-times fa-2x"></i></a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="container w-75 mx-auto mt-5">
        <div class="card mx-auto my-5">
            <div class="card-header bg-primary text-center text-white">
                <h2 class="display-4">ADD ITEM</h2>
            </div>
            <div class="card-body">
                <h2 class="display-4 text-center">How many items do you want to add?</h2>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <input type="text" name="number_of_items" class="form-control form-control-lg mt-3">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3 mx-auto mt-4">
                            <input type="submit" name="enter" value="Enter" class="form-control btn btn-primary">
                        </div>
                    </div>
                </form>
                <?php 
                    include '../itemAction.php';
                ?>
            </div>

</body>

</html>