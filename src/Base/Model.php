<?php

namespace My\Portfolio\Base;

use Exception;
use PDO;

class Model
{

      /**
       * Class constructor
       */
      public function __construct()
      {
            $this->dbConnection();
      }

      public function dbConnection()
      {
            try {

                  // $servername = "localhost";
                  // $username = "username";
                  // $password = "password";

                  $db_host = isset($_ENV['DB_HOST']) ? $_ENV['DB_HOST'] : '';

                  if (empty($db_host)) {
                        throw new Exception("Please provide database host name");
                  }

                  $db_port = isset($_ENV['DB_PORT']) ? $_ENV['DB_PORT'] : '';

                  if (empty($db_port)) {
                        throw new Exception("Please provide database port no");
                  }

                  $db_name = isset($_ENV['DB_DATABASE']) ? $_ENV['DB_DATABASE'] : '';

                  if (empty($db_name)) {
                        throw new Exception("Please provide database name");
                  }

                  $db_user = isset($_ENV['DB_USERNAME']) ? $_ENV['DB_USERNAME'] : '';

                  if (empty($db_user)) {
                        throw new Exception("Please provide database name name");
                  }

                  $db_pass = isset($_ENV['DB_PASSWORD']) ? $_ENV['DB_PASSWORD'] : '';

                  if (!empty($db_pass)) {
                        throw new Exception("Please provide database password");
                  }

                  return new PDO("mysql:host=" . $db_host . ";dbname=" . $db_name . ";port=" . $db_port, $db_user, $db_pass);
            } catch (Exception $e) {
                  echo 'Message: ' . $e->getMessage();
            }
      }

      public function execute(string $sqlQuery)
      {
            $stmt =  $this->dbConnection()->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
      }


      public function fetchAll(string $sqlQuery)
      {
            $stmt = $this->execute($sqlQuery);

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
      }


      public function __destruct()
      {
            $this->dbConnection();
      }
}
