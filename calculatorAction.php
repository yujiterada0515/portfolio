<?php

   include '../class/user.php';

    if(isset($_POST['submit_count'])){
        $item_count = $_POST['item_count'];
        
        echo "<div class='container mt-5'>";
        for($i = 1; $i <= $item_count; $i++){
            echo "
                <form action='' method='post'>
                 <div class='form-row my-2'>
                    <div class='form-group col-md-4'>
                       
                        <input type='text' name='material_name[]' class='form-control border border-primary' placeholder='Material Name'>
                    </div>
                    <div class='form-group col-md-4'>
                        <input type='text' name='material_price[]' class='form-control  border border-danger' placeholder='Price'>
                    </div>
                    <div class='form-group col-md-4'>
                        <input type='number' name='material_quantity[]' class='form-control border border-warning' placeholder='Quantity'>
                    </div>
                  </div>
                
                ";
        }

        echo "<div class='form-row mt-3'>
                <div class='form-group col-md-12'>
                    <button type='submit' name='calculate' class='btn btn-danger btn-lg form-control'>Calculate</button>
                </div>
            </div>";
            
        echo "</form>
            </div>";

    }elseif(isset($_POST['calculate'])){
        $mateName = $_POST['material_name'];
        $matePrice = $_POST['material_price'];
        $mateQuan = $_POST['material_quantity'];

        $user->insertAllCalculation($mateName, $matePrice, $mateQuan);

       
       

       
    }

?>