<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:testdbsqlserver2.database.windows.net,1433; Database = floteq_dev", "serveradmin2", "zxcvbnm1!");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   if(!$conn){  

  die('Could not connect: 'connection_error());  

}  

echo 'Connected successfully<br/>';  

$sql = 'INSERT INTO Alert(AlertID,AlertName,AlertDescription,RecordStatus,InsertDateTime,UpdateDateTime) VALUES (1,"virus","initial",3,"may',"june")';  

if(sql_query($conn, $sql)){  

 echo "Record inserted successfully";  

}else{  

echo "Could not insert record: ". connection_error($conn);  

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