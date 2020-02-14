<?php
    include '../class/displayHeader.php';
    include '../class/displayFooter.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>calculator</title>
</head>
<body>

   <?php displayHeader(); ?>
     
    <div class="container mt-4">
     <div class="row text-center">
       <div class="col-md-12">
         <h1 class="display-4">How many Items do you need?</h1>
       </div>
     </div> 
     <form action="" method="post">
       <div class="form-row mt-3">
         <div class="form-group col-md-6 mx-auto">
            <input type="number" name="item_count" id="" class="text-center form-control">
         </div>
       </div>
       <div class="form-row mt-3">
         <div class="form-group col-md-6 mx-auto">
          <button type="submit" name="submit_count" class="btn btn-primary w-50 d-block mx-auto">Submit</button>
         </div>
       </div>
       <?php
          include '../calculatorAction.php';
       ?>
     </form>
    </div>
    <?php
    displayFooter(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
