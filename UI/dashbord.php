<?php 
   include '../userAction.php';
   include '../class/displayheader.php';
   include '../class/displayFooter.php';
   // include '../class/database.php';
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
<title>Invoice</title>
</head>
<body>
   
<?php displayHeader(); ?>

    <div class="container mt-5">
      <div class="row">
         <div class="col-md-6">
            <h4>All Contracts</h4>
         </div>
         <div class="col-md-6">
            <input type="button" onClick="location.href='add_new_contract.php'" value="ADD NEW CONTRACT">
         </div>
      </div>
    </div>
   <div class="container">
      <div class="row">
      <table class="table mt-4">
            <thead class="thead-dark">
                <tr>
                <th>#</th>
                <th>Client</th>
                <th>Start Day</th>
                <th>Ongoing</th>
                <th>Deadline Day</th>
                <th>Claim Day</th>
                <th></th>
                <th></th>
                <th></th>
                </tr>
            </thead>
            <tbody>
             <?php

               $userlist = $user->getAllcontracts();

               foreach($userlist as $user){
                  $userID = $user['contract_id'];

              echo "
                <tr>
                <th scope='row'>".$user['contract_id']."</th>
                <td>".$user['client_name']."</td>
                <td>".$user['start_date']."</td>
                <td>Yes or No</td>
                <td>".$user['deadline_date']."</td>
                <td>".$user['claim_day']."</td>
                <td><a href=''><button type='button' class='btn btn-outline-warning'><i class='fas fa-edit'>Detail</i></button></a></td>
                <td><a href=''><button type='button' class='btn btn-outline-danger'>Delete</button></a></td>
                </tr>
                ";
                 }
               ?>
            </tbody>
                  
            </table>
            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginat">
               <ul class="pagination">
                 <li class="pagination_button page_itme previous disabled" id="dateTable_previous">
                    <a href="#" aria-contorols="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                 </li>
                 <li class="paginate_button page-item active">
                    <a href="#" aria-contorols="dataTable" data-dt-idx="0" tabindex="0" class="page-link">1</a>
                 </li>
                 <li class="paginate_button page-item">
                    <a href="#" aria-contorols="dataTable" data-dt-idx="0" tabindex="0" class="page-link">2</a>
                 </li>
                 <li class="paginate_button page-item">
                    <a href="#" aria-contorols="dataTable" data-dt-idx="0" tabindex="0" class="page-link">3</a>
                 </li>
                 <li class="paginate_button page-item">
                    <a href="#" aria-contorols="dataTable" data-dt-idx="0" tabindex="0" class="page-link">4</a>
                 </li>
                 <li class="paginate_button page-item">
                    <a href="#" aria-contorols="dataTable" data-dt-idx="0" tabindex="0" class="page-link">5</a>
                 </li>
                 <li class="pagination_button page_itme next disabled" id="dateTable_next">
                    <a href="#" aria-contorols="dataTable" data-dt-idx="0" tabindex="0" class="page-link">next</a>
                 </li>
               </ul>
            </div>
      </div>
   </div>


<?php displayFooter(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>