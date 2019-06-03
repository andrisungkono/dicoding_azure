<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resep Masakan Indonesia</title>
<style type="text/css">
 	body { background-color: #fff; border-top: solid 10px #000;
 	    color: #333; font-size: .85em; margin: 20; padding: 20;
 	    font-family: "Segoe UI", Verdana, Helvetica, Sans-Serif;
 	}
 	h1, h2, h3,{ color: #000; margin-bottom: 0; padding-bottom: 0; }
 	h1 { font-size: 2em; }
 	h2 { font-size: 1.75em; }
 	h3 { font-size: 1.2em; }
 	table { margin-top: 0.75em; }
 	th { font-size: 1.2em; text-align: left; border: 1; padding-left: 0; }
 	td { padding: 0.25em 2em 0.25em 0em; border: 1 none; }
 </style>
</head>

<body>
<?php
include "koneksi.php";
$no = 1;
        try {
			
            $sql_select = "SELECT * FROM dbo.resep";
            $stmt = $conn->query($sql_select);
            $reseps = $stmt->fetchAll(); 
			
            if(count($reseps) > 0) {
				
                echo "<h2>Resep Masakan Indonesia</h2>";
				echo "<a href='tambah.php'>Tambah Resep</a>";
                echo "<table border='1'>";
				echo "<tr><th>No.</th>";
                echo "<th>Nama</th>";
                echo "<th>Resep</th></tr>";
                foreach($reseps as $resep) {
					echo "<tr><td>".$no."</td>";
                    echo "<td>".$resep['nm_resep']."</td>";
                    echo "<td>".$resep['isi_resep']."</td></tr>";
			$no = $no+1;
                }
				
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
