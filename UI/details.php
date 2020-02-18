<?php 
      include '../userAction.php';
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
<title>Detail</title>
</head>
<body>

   <?php displayHeader(); ?>
   <?php

   $userlist = $user->getOnecontract($_GET['contract_id']);

   foreach($userlist as $user){
       $contract_id = $user['contract_id'];

     echo "
       <div class='container mt-5'>
       <h2 class='display-5'># ".$user['contract_id']."</h2>
      <div class='border-bottom border-left mt-3'>
        <h4>Client Name: ".$user['client_name']." </h4>
        <h4>Home Address: ".$user['home_address']."</h4>
        <h4>Cntact Number: ".$user['contact_number']."</h4>
        <p>".$user['photo']."</p>
     </div>
       <h2 class='display-5'>Description</h2>
      <div class='border-bottom border-left'>
        <h4>".$user['description']."</h4>
     </div>
       <h2 class='display-5'>Claim Bills Amount</h2>
      <div class='border-bottom border-left'>
        <h4>Input　materials</h4>
        <h4 class='text-right'>Total Amount: </h4>
     </div>
     <div class='row mt-5'>
       <div class='form-group col-3 border border-primary'>
         <h5 class='pt-2 text-center'> <strong>Plummer Company M.T</strong> </h5>
         <P> <strong>CEO;</strong> Mineharu Terada<br> <strong>Address;</strong> Japan<br> <strong>Number;</strong> 09678731364<br><strong>E-mail;</strong> Mineharu@email.com</P> 
       </div>
     
        <div class='form-group col-sm-12'>
          <button type='submit' name='email' class='btn btn-danger float-right rounded-pill '>Semd E-mail</button>
          <a href='editContract.php'><button type='submit' name='edit' class='btn btn-warning float-right rounded-pill mr-5 '>Edit</button></a>
       </div>
     </div>
   </div>
       ";
    }
   ?>

   <?php displayFooter(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>