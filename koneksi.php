<?php
    $host = "dicodingsubmissonsqlserv.database.windows.net";
    $user = "yangpunyaserver";
    $pass = "p4w0n_m4g3n4";
    $db = "db_resep";

    try {
        $conn = new PDO("sqlsrv:server = $host; Database = $db", $user, $pass);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    } catch(PDOException $e) {
		print("Error connecting to SQL Server.");
		die(print_r($e));
    }
?>
