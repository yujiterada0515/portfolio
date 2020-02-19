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
        //home work
        //How many Items do you neesd 
        //echo  material_id, material_name, material_price
    //     public function getMaterials($id){
    //      $sql = "SELECT * FROM materials WHERE material_id = '$id'";
    //      $result = $this->query($sql);

    //     if($result->num_rows > 1){
    //         $row = array();

    //         while($rows =$result->fetch_assoc()){
    //             $row[] = $rows;
    //         }
    //         return $row;
    //     }else{
    //         return 0;
    //     }
    //   }
    }

?>