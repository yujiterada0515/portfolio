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
    $contract_id = $_GET['contract_id'];

    $contractlist = $user->getOnecontract($contract_id);
    $materialList = $user->getContractMaterials($contract_id);
    $total_amount = $user->getTotalAmount($contract_id);

    // print_r($contractlist);
   foreach($contractlist as $contract){
       
     echo "
       <div class='container mt-5'>
       <h2 class='display-5'># ".$contract['contract_id']."</h2>
      <div class='border-bottom border-left mt-3'>
        <h4><span class='text-secondary'>Client Name: </span>".$contract['client_name']."</h4>
        <h4>Home Address: ".$contract['home_address']."</h4>
        <h4>Cntact Number: ".$contract['contact_number']."</h4>
        <p class=''>".$contract['photo']."</p>
     </div>
       <h2 class='display-5 mt-5'>Description</h2>
      <div class='border-bottom border-left'>
        <h4>".$contract['description']."</h4>
     </div>
       <h2 class='display-5 mt-5'>Claim Bills Amount</h2>
       <h4>Materials Needed</h4>
      <div class='row'>
                <table class='table w-25'>
                <thead class='thead-dark'>
                    <tr>
                    <th>Material</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>";
            if($materialList){
                foreach($materialList as $materials){
                    $subtotal = $materials['subtotal'];
                    echo "
                        <tr>
                            <th>".$materials['material_name']."</th>
                            <th>".$materials['material_price']."</th>
                            <th>".$materials['quantity']."</th>
                            <th>".$subtotal."</th>
                        </tr>
                    ";
                }
            }else{
                echo "<tr>
                    <th colspan=4 class='text-center'>NO RECORDS FOUND</th>
                </tr>";
            }
            echo "</tbody>
            </table>
        </div>
        ";
    }
    echo "

     <h4 class=''>Total Amount: ".$total_amount."</h4>
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
   ?>

   <?php displayFooter(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>