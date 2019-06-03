<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:dicodingsubmissonsqlserv.database.windows.net,1433; Database = db_resep", "yangpunyaserver", "{your_password_here}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "yangpunyaserver@dicodingsubmissonsqlserv", "pwd" => "p4w0n_m4g3n4", "Database" => "db_resep", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:dicodingsubmissonsqlserv.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
