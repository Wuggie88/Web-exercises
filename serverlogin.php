 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wb3";

try {
  $conn = new PDO("mysql:host=$servername;$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 


<!-- OLD sqli connection

$servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "wb3";
            $tablename = "users";

            $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

-->