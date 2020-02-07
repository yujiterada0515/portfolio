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

       public function addContract($clientName, $homeAddress, $contactNumber, $email, $startDay, $deadLine, $claimDay, $description, $materials, $totalFee){

        $sql = "INSERT INTO contract(client_name, home_address, contact_number, email, start_date, deadline_date, claim_day, description, materials_needed, total_fee) VALUES ('$clientName', '$homeAddress', '$contactNumber', '$email', '$startDay', '$deadLine', '$claimDay', '$description', '$materials', '$totalFee')";

        // echo $sql;

        $result =$this->conn->query($sql);

        if($result == false){
          die("cannot add clients: ".$this->conn->connect_error);
        }else{
          header("Location: UI/dashbord.php");
        }
      }


   }
?>
