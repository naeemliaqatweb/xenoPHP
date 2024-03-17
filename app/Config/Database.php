<?php

namespace App\Config;

use PDO;
use PDOException;
// require_once('app/Config/Database.php');
class Database
{
         private $host = "localhost";
         private $db_name = "xero_php";
         private $username = "root";
         private $password = "";
         public $conn = "";

         function __construct()
         {
                  $this->conn = null;
                  $newhost =  $this->host;
                  $dbname =  $this->db_name;

                  try {
                           $this->conn = new PDO(
                                    "mysql:host=$newhost;dbname=$dbname",
                                    $this->username,
                                    $this->password
                           );

                           $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  } catch (PDOException $e) {
                           echo "connection failed: " . $e->getMessage();
                  }
         }
}
