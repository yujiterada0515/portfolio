<?php
    require 'class/user.php';
    $user = new User();

    // session_start();

    if(isset($_POST['signup'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $address = $_POST['address'];
        $contact_number = $_POST['contact_number'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password= md5($_POST['password']);
        
        $createAccount = $user->createAccount($username, $password);
        
        if($createAccount == 1){
            $user->createUser($first_name, $last_name, $address, $contact_number, $email);
        }else{
            echo "error";
        }

    }elseif(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']); 

        $login = $user->login($username, $password);

        // print_r($login);

        if($login){
            $_SESSION['login_id'] = $login['user_id'];
            $_SESSION['status'] = $login['status'];
            $_SESSION['first_name'] = $login['first_name'];
            $_SESSION['username'] = $login['username'];
            if($_SESSION['status']=='A'){
                header("Location: UI/addItem.php");
            }elseif($_SESSION['status']=='U'){
                header("Location: UI/dashbord.php");
            }
        }else{
            echo "Incorrect username or password";
        }

    }elseif(isset($_POST['save'])){
        $clientName = $_POST['clientName'];
        $homeAddress = $_POST['homeAddress'];
        $contactNumber = $_POST['contactNumber'];
        $email = $_POST['email'];
        $startDay = $_POST['startDay'];
        $deadLine = $_POST['deadLine'];
        $claimDay = $_POST['claimDay'];
        $description = $_POST['description'];
        $materials = $_POST['materials'];
        $photo = $_POST['photo'];
        $totalFee = $_POST['totalFee'];

        // echo $clientName, $homeAddress, $contactNumber, $email, $startDay, $deadLine, $clamDay, $description, $materials, $totalFee;
       
 
       $user->addContract($clientName, $homeAddress, $contactNumber, $email, $startDay, $deadLine, $claimDay, $description, $materials, $photo, $totalFee);

    }elseif(isset($_POST['upload'])){
        $photo = $_FILES['photo']['client_name'];

        $target_dir = "upload/"; //folder in your computer where you will place the picture
        $target_file = $target_dir . basename($_FILES["photo"]["client_name"]);

        $upload = $user->insertToTable($photo);

        if($uplosd == 1){
            // Upload file
            move_uploaded_file($_FILES['photo']['tmp_name'],$target_file);
            //move_uploaded_file ~~~ transfers the picture from one location
            // to another location
            header("Location: ../add_new_contract");
        }else{
            echo "Error";
        }
        
    }elseif(isset($_POST['submit_count'])){
        $itemCounts = $_POST['item_counts'];
        
        function desplayItemsForm(){
        for($i = 1; $i <=$itemCounts; $i++){
            echo "
            <form action='../UI/items_form.php' method='post'>
            <div class='row'>
     
              <div class='form-group col-md-3'>
                 <input type='text' name='materials_name' placeholder='Materials Name' requierd>
              </div> 
     
              <div class='form-group col-md-3'>
               <input type='text' name='price' placeholder='Price' required>
              </div> 
              
              <div class='form-group col-md-3'>
               <input type='text' name='amount' placeholder='Amount' required>
              </div> 
              
              <div class='form-group col-md-3'>
               <input type='text' name='total' placeholder='Total' required>
              </div> 
     
               <button type='submit' name='calculator' class='btn btn-danger form-control w-25'>Calculator</button>
     
            </div>
          </form>
        </div>
            ";
        }
      }
    }elseif(isset($_POST['calculator'])){
        $materName = $_POST['materials_name'];
        $matePrice = $_POST['price'];
        $mateNum = $_POST['how_many'];
        $mateTotal = $_POST['total'];


    }

 


?>