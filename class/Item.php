<?php
    require_once 'database.php';

    class Items extends Database{
        public function addItem($item_name, $item_price, $item_quantity,$item_count){
            
            for($i = 0; $i < $item_count; $i++){
                $sql = "INSERT INTO `materials` (material_name, material_price, material_quantity) VALUES ('$item_name[$i]','$item_price[$i]', '$item_quantity[$i]')";

                $result = $this->conn->query($sql);
            }
            
            if($result){
                // echo "ITEMS SAVED";
                header("Location: dashbord.php");
            }else{
                echo "ERROR: ".$this->conn->error;
            }
            
        }
    }
?>