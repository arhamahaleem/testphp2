<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:testdbsqlserver2.database.windows.net,1433; Database = floteq_dev", "serveradmin2", "zxcvbnm1!");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     

$sqlquery = "INSERT INTO table Persons
    ('1', 'haleem','arhama','G8/2', 'Islamabad')"
 
if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "serveradmin2", "pwd" => "zxcvbnm1!", "Database" => "floteq_dev", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:testdbsqlserver2.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>