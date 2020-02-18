<?php
    class Calculator extends Database{
        public function getMaterials(){
            $sql = "SELECT * FROM materials";

            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "
                        <option value='".$row['material_id']."'>".$row['material_name']."</option>
                    ";
                }
            }
        }
    }
?>