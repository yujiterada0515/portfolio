<?php

   include '../class/calculator.php';

   $calc = new Calculator();

   $contract_id = $_GET['contract_id'];

    if(isset($_POST['submit_count'])){
        $item_count = $_POST['item_count'];
        
        // <input type='text' name='material_name[]' class='form-control border border-primary' placeholder='Material Name'>
        echo "<div class='container mt-5'>";
        for($i = 1; $i <= $item_count; $i++){
            echo "
                <form action='' method='post'>
                 <div class='form-row my-2'>
                    <div class='form-group col-md-4'>
                        <select name='material_name[]' class='form-control border border-primary'>
                            <option selected disabled>CHOOSE A MATERIAL:</option>
                            ";
                            $calc->getDropdownMaterials();
                           
            echo"
                        </select>
                    </div>
                    <div class='form-group col-md-4'>
                        <input type='number' name='material_quantity[]' class='form-control border border-warning' placeholder='Quantity' required>
                    </div>
                  </div>
                
                ";
        }

        echo "<div class='form-row mt-3'>
                <div class='form-group col-md-8 mx-auto'>
                    <input type='hidden' name='item_count' value='$item_count'>
                    <input type='hidden' name='contract_id' value='$contract_id'>
                    <button type='submit' name='calculate' class='btn btn-danger btn-lg form-control'>Calculate</button>
                </div>
            </div>";
            
        echo "</form>
            </div>";

    }elseif(isset($_POST['calculate'])){
        $material_id = $_POST['material_name'];
        $material_quantity = $_POST['material_quantity'];
        $item_count = $_POST['item_count'];
        $contract_id = $_POST['contract_id'];

        $material_price = array();

        for($i = 0; $i < $item_count; $i++){
            $material_price_assoc= $calc->getMaterialPrice($material_id[$i]);
            foreach($material_price_assoc as $price){
                $material_price[$i] = $price;
            }
        }

        $subtotal = array();
        for($i = 0; $i < $item_count; $i++){
            $subtotal[$i] = $material_quantity[$i] * $material_price[$i];
        }

        // echo $contract_id;

        $calc->addOrder($material_id, $material_quantity, $subtotal, $item_count, $contract_id);

        // print_r($material_id);
        // print_r($material_price);
        // print_r($material_quantity);

        // print_r($material_fee);
    };

?>