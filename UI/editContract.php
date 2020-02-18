
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
<title>ADD NEW CONTRACT</title>
</head>
<body>

<?php displayHeader(); ?>

  <div class="container w-75 my-5">
   <div class="card mx-auto my-5">
       <div class="card-header bg-warning">
          <h4 class="display-4 text-white text-center">Edit Contract</h4>
       </div>
     <div class="card-body">
        <form action="../userAction.php" method="post">

          <div class="form-row">
            <div class="form-group col-md-12">
              <input type="text" name="new_client_name" placeholder="Clients Name" class="form-control">
            </div> 
          </div>
        
          <div class="form-row mb-3">
            <div class="form-group col-md-4">
              <input type="text" name="new_home_address" placeholder="Home Address" class="form-control">
            </div> 
            <div class="form-group col-md-4">
              <input type="number" name="new_contact_number" placeholder="Contact Number" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <input type="email" name="new_email" placeholder="E-mail" class="form-control">
            </div> 
          </div>

          <div class="form-row mb-3">
            <div class="form-group col-md-4">
              <label for="startDay">Start Day</label>
              <input type="date" name="new_start_day" placeholder="Start Day" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="deadLine">Deadline</label>
              <input type="date" name="new_deadLine" placeholder="Deadline Day" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="claimDay">Claim Day</label>
              <input type="date" name="new_claimDay" placeholder="Claim Day" class="form-control">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <textarea name="new_description" id="" cols="50" rows="10" placeholder="Description" class=" form-control"></textarea>
            </div>

            <!-- <div class="form-group col-md-6">
              <textarea name="new_materials" id="" cols="50" rows="10" placeholder="Materials Needed" class="form-control"></textarea>
            </div> -->
          </div>

          <div class="form-row mt-4">
            <div class="form-group col-md-3">
              <button type="submit" name="update" class="btn btn-outline-primary form-control">Update</button>
            </div>

            <div class="form-group col-md-4">
                <input type="file" name="new_photo" class="form-control">
                <input type='submit' value='Upload' name='upload' class="btn btn-primary btn-block">
            </div>

            <!-- <div class="form-group col-md-3 text-right">
              <div class='input-group'>
                <select class='custom-select' name='ongoing' id='inputGroupSelect01'>
                  <option selected>Ongoing</option>
                  <option value='Yes'>Yes</option>
                  <option value='No'>No</option>
                </select>
              </div>
            </div> -->

            <div class="form-group col-md-4">
              <input type="number " name="totalFee" class="form-control" placeholder="Total Fee"><br>
              <a href="calculator.php">calculator</a>
            </div>

          </div>
        </form>
     </div>
   </div>
 </div>


 <?php displayFooter(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>

