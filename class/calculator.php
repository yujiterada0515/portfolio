<?php
    require_once 'database.php';
    class Calculator extends Database{
        public function getDropdownMaterials(){
            $sql = "SELECT * FROM materials";

            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "
                        <option value='".$row['material_id']."'>".$row['material_name']." ".$row['material_price']."yen"."</option>
                    ";
                    
                }
            }
        }

        public function getMaterialPrice($material_id){
            $sql = "SELECT material_price FROM materials WHERE material_id = '$material_id'";
            
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                while($price = $result->fetch_assoc()){
                    return $price;
                }
            }
        }

        public function addOrder($material_id, $material_quantity, $subtotal, $item_count, $contract_id){

            for($i = 0; $i < $item_count; $i++){
                $sql = "INSERT INTO orders (contract_id, material_id, quantity, subtotal) VALUES ('$contract_id','$material_id[$i]', '$material_quantity[$i]', '$subtotal[$i]')";

                $result = $this->conn->query($sql);
            }
            
            if($result){
                header("Location: details.php?contract_id=$contract_id");
            }else{
                die("ERROR: ".$this->conn->error);
            }
        }
    }

?>