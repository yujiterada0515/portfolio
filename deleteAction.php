<?php
    require 'class/user.php';
    $user = new User();

    session_start();
    
    if($_GET['actiontype']=='delete'){
        $contract_id = $_GET['contract_id'];

        $user->deleteRecord($contract_id);
    }
?>