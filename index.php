<!DOCTYPE>

   
    <?php include "account.php";
  
echo "Results: 5";  
echo "<table border = 1 ;>";

echo 
"<tr>

<th>ID</th>

<th>Email</th>

</tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "sql1.njit.edu";      // or "sql2.njit.edu"   OR "SQL1.NJIT.EDU"
$username = "erc7";
$password = "4g5cdCF9";
$dbname = "erc7";

try {
    $conn = new PDO("mysql:host=$servername;dbname=erc7", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id,email FROM accounts where id<6"); 
    $stmt->execute();



    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";

  
  
  
?>