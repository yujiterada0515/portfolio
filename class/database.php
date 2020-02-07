<?php

function displayHeader(){
    // echo "<hr>";
    // echo "<div class='bg-dark text-light  text-center py-3 display-3 font-weight-lighter'>Welcom to Blogen</div>";
    echo "<nav class='navbar navbar-expand-sm navbar-dark bg-dark sticky-top'>
    ";
    echo "<button  class='navbar-toggler' data-toggle='collapse' data-target='#collapse_target'>
    <span><i class='fas fa-bars'></i></span></button>";
    echo "<div class='collapse navbar-collapse' id='collapse_target'>";
    echo "<ul class='navbar-nav'>";
    echo "<li class='nav-item'><a href='dashbord.php' class='nav-link'></a></li>";
    echo "<li class='nav-item'><a href='dashbord.php' class='nav-link'>All Client</a></li>";
    echo "<li class=nav-item'><a href='my_posts.php' class='nav-link'></a></li>";
    echo "<li class='nav-item'><a href='categories.php' class='nav-link'>   </a><li>";
    echo "</ul>";
    echo "<ul class='navbar-nav ml-auto'>";
    echo "<li class='nav-link'><i class='fas fa-user'></i>welcom</li>";
    echo "<li class='nav-item'>";
    echo "<a href='register.php' class='nav-link text-danger'><i class='fas fa-sign-out-alt'></i>Logout</a>";
    echo "</li>";
    echo "</ul>";
    echo "</div>";
    echo "</nav>";
}

function displayFooter(){
    echo "<div class='container-fluid bg-secondary text-center p-3 mt-5'>
    <small class='text-white'>Yuji Terada C2020</small>
 </div>";
}



    class Database{
        private $servername = "localhost";
        private $db_username = "root";
        private $db_password = "root";
        private $database = "portfolio";
        public $conn;

        public function __construct(){
            $this->conn = new mysqli($this->servername, $this->db_username, $this->db_password, $this->database);

            if($this->conn->connect_error){
                die("CONNECTION ERROR: ".$this->conn->connect_error);
            }

            return $this->conn;
        }
    }
?>
