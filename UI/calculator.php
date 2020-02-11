<?php 
      include '../userAction.php'; 
      include '../class/displayheader.php';
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

   <div class="container">
     <h2 class="display-3 text-light text-center bg-primary">Calculator</h2>
     
     <form action="" method="post">
       <div class="form-group col-md-12 mb-4 mt-5 text-center">
         <h4>How many items do you need?</h4>         
         <input type="number" name="item_counts" >
         <button type="submit" name="submit_count" class="btn btn-primary form-control w-25 ml-4">Submit Count</button>
       </div>
       </form>
   </div>

   <?php displayFooter(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
