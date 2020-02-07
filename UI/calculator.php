<?php include '../class/database.php';?>

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
     <h4>Client Name</h4>
     <form action="" method="post">
       <div class="row">
         <input type="text" name="materials_name" placeholder="Materials Name" requierd>

         <input type="text" name="price" placeholder="Price" required>

         <input type="text" name="how_many" placeholder="How Many" required>

         <input type="text" name="total" placeholder="Total" required>

         <button type="submit" name="submit" class="btn btn-primary form-control">SUBMIT</button>
         

         <button type="submit" name="add" class="btn btn-primary form-control">ADD</button>

       </div>
     </form>
   </div>
   
   <?php displayFooter(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>