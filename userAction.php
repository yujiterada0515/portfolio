<?php
    require 'class/user.php';
    $user = new User();

    session_start();

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
                header("Location: UI/admin.php");
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
        $photo = $_POST['photo'];

        // echo $clientName, $homeAddress, $contactNumber, $email, $startDay, $deadLine, $clamDay, $description, $materials, $totalFee;
       $user->addContract($clientName, $homeAddress, $contactNumber, $email, $startDay, $deadLine, $claimDay, $description, $photo);

    }
    //elseif(isset($_POST['upload'])){
    //     $photo = $_POST['photo'];

    //     $upload = $user->insertToTable($photo);
   
    // }
    



?>