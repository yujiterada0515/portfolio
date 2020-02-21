<?php
   require_once 'database.php';

   class User extends Database{
        public function createAccount($username, $password){
            $sql = "INSERT INTO accounts(username, password) VALUES ('$username', '$password')";

            $result = $this->conn->query($sql);

            if($result == false){
                die("CANNOT ADD USER: ".$this->conn->connect_error);
            }else{
                return 1;
            }

        }

        public function createUser($first_name, $last_name, $address, $contact_number, $email){
            $account_id = $this->conn->insert_id;

           $sql = "INSERT INTO users(first_name, last_name, address, contact_number, email, account_id) VALUES ('$first_name', '$last_name', '$address', '$contact_number', '$email', '$account_id')";

           $result = $this->conn->query($sql);

           if($result == false){
               die("CANNOT ADD USER: ".$this->conn->connect_error);
           }else{
               header("Location: UI/login.php");
           }
       }

       public function login($username, $password){
           $sql = "SELECT * FROM accounts INNER JOIN users on accounts.account_id = users.account_id WHERE username = '$username' AND password = '$password'";
           
           $result = $this->conn->query($sql);

           if($result->num_rows == 1){
               return $result->fetch_assoc();
           }else{
               return false;
               header("Location: UI/dashbord.php");
           }
       }

       public function addContract($clientName, $homeAddress, $contactNumber, $email, $startDay, $deadLine, $claimDay, $description, $photo){

        $contract_id = $this->conn->insert_id;

        $sql = "INSERT INTO contracts(client_name, home_address, contact_number, email, start_date, deadline_date, claim_day, description, photo) VALUES ('$clientName', '$homeAddress', '$contactNumber', '$email', '$startDay', '$deadLine', '$claimDay', '$description', '$photo')";

        // echo $sql;

        $result =$this->conn->query($sql);

        if($result == false){
          die("cannot add contracts: ".$this->conn->error);
        }else{
            $sql2 = "SELECT contract_id FROM contracts WHERE client_name = '$clientName' AND home_address = '$homeAddress' AND contact_number = '$contactNumber' AND email = '$email' AND start_date = '$startDay' AND deadline_date = '$deadLine' AND claim_day = '$claimDay' AND description = '$description'";

            $result = $this->conn->query($sql2);
            
           if($result->num_rows == 1){
            while($contract = $result->fetch_assoc()){
                $contract_id = $contract['contract_id'];
            }
            
            header("Location: UI/materialsNeeded.php?contract_id=$contract_id");
            }else{
                echo "ERROR: ".$this->conn->error;
            }

          
        }
      }

      public function getAllcontracts(){
          $query = "SELECT * FROM contracts";
          $result = $this->conn->query($query);

          $rows = array();

          if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){
                  $rows[] = $row;
              }
              return $rows;
          }
      }

      function getOneContract($contract_id){
          $sql = "SELECT * FROM contracts WHERE contracts.contract_id = '$contract_id'";
            // echo $sql;
          $result = $this->conn->query($sql);
          $rows = array();

          if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){
                  $rows[] = $row;
              }
              return $rows;
          }else{
              return FALSE;
          }
      }
      function getContractMaterials($contract_id){
          $sql = "SELECT * FROM orders INNER JOIN materials ON materials.material_id = orders.material_id WHERE orders.contract_id = '$contract_id'";
          $result = $this->conn->query($sql);
          $rows = array();

          if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){
                  $rows[] = $row;
              }
              return $rows;
          }else{
              return FALSE;
          }
      }
      function getTotalAmount($contract_id){
          $sql = "SELECT SUM(subtotal) AS total FROM orders WHERE contract_id = '$contract_id'";

          $result = $this->conn->query($sql);
          if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){
                  return $row['total'];
              }
          }
      }
    //Photo function from here
      public function insertToTable($photo){
        $sql= "UPDATE contracts SET photo = '$photo' WHERE photo = '11'";

        if($this->conn->query($sql)){
            //successful in inserting the picture
            return 1;
        }else{
            echo "Not saved " .$this->conn->error;
            return 0;
        }
    }

    public function showAllImages($photo){
        $sql = "SELECT photo FROM contracts";

        $rows = array();

        $result = $this->conn->query($sql);
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }

            return $rows;
        }
    }

    public function searchSpecificImage($id){
        $sql = "SELECT photo FROM contracts WHERE id = '$id'";
        $result = $this->conn->query($sql);

        $row = $result->fetch_assoc();

        return $row;
    }

    //Do not touch in Delete function
      public function deleteRecord($contract_id){

        $sql ="DELETE FROM `contracts` WHERE contract_id='$contract_id'";

        $result =$this->conn->query($sql);

        if(!$result){
            die("cannot delete clients: ".$this->conn->error);
        }else{
            header("Location: UI/dashbord.php");
        }

      }


}

?>