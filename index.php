<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resep Masakan Indonesia</title>
</head>

<body>
<?php
include "koneksi.php";
$no = 0;
        try {
			
            $sql_select = "SELECT * FROM dbo.resep";
            $stmt = $conn->query($sql_select);
            $reseps = $stmt->fetchAll(); 
			
            if(count($reseps) > 0) {
				
                echo "<h2>Resep Masakan Indonesia</h2>";
				echo "<a href='tambah.php'>Tambah Resep</a>";
                echo "<table>";
				echo "<tr><th>No.</th>";
                echo "<th>Nama</th>";
                echo "<th>Resep</th></tr>";
                foreach($reseps as $resep) {
					echo "<tr><td>".$no."</td>";
                    echo "<td>".$resep['name']."</td>";
                    echo "<td>".$resep['email']."</td></tr>";
                }
				$no = $no+1;
                echo "</table>";
            } else {
                echo "<h3>Tidak ada resep masakan.</h3>";
            }
        } catch(Exception $e) {
            echo "Failed: " . $e;
        }
		?>
</body>
</html>
