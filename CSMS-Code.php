//CODE for Creating Database 
<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
// Create connection 
$conn = new mysqli($servername, $username, $password); 
// Check connection if 
($conn->connect_error) { 
 die("Connection failed: " . $conn->connect_error); 
} 
echo "Connected successfully"; 
// Create database 
$sql = "CREATE DATABASE components"; 
if ($conn->query($sql) === TRUE) { echo 
"Database created successfully"; 
} else { 
 echo "Error creating database: " . $conn->error; 
} 
$conn->close(); 
?> 
//CODE for Creating new table in Database 
<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "components"; 
// Create connection 
$conn = new mysqli($servername, $username, $password, 
$dbname); // Check 
connection if ($conn-
>connect_error) { 
 die("Connection failed: " . $conn->connect_error); 
} 
// sql to create table 
$sql = "CREATE TABLE newcomponents ( 
rollnumber BIGINT(15) CHECK (rollnumber>=160200000000), name 
VARCHAR(30) NOT NULL, 
year INT(3) NOT NULL CHECK (year >0 AND year <=4), 
component1 VARCHAR(30) DEFAULT NULL, d1 
TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
component2 VARCHAR(30) DEFAULT NULL, d2 
TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
component3 VARCHAR(30) DEFAULT NULL, d3 
TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
component4 VARCHAR(30) DEFAULT NULL, d4 
TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
component5 VARCHAR(30) DEFAULT NULL, d5 
TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
component6 VARCHAR(30) DEFAULT NULL, d6 
TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
component7 VARCHAR(30) DEFAULT NULL, d7 
TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
component8 VARCHAR(30) DEFAULT NULL, d8 
TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
component9 VARCHAR(30) DEFAULT NULL, d9 
TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
component0 VARCHAR(30) DEFAULT NULL, d0 
TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
PRIMARY KEY (rollnumber) 
)"; 
if ($conn->query($sql) === TRUE) { 
 echo "Table components created successfully"; 
} else { 
 echo "Error creating table: " . $conn->error; 
} 
$conn->close(); 
?>