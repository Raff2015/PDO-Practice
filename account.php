<?php
$servername = "sql1.njit.edu";      // or "sql2.njit.edu"   OR "SQL1.NJIT.EDU"
$username = "erc7";
$password = "4g5cdCF9";

			

echo "<h1>PDO demo!</h1>";
try {
    $conn = new PDO("mysql:host=$servername;dbname=erc7", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    print "<br>"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

	//$query = "SELECT * FROM accounts where id<'6';
  //$statement = $db->prepare($query);
  //$statement->execute();






?>