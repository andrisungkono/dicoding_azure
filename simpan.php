 <?php
    include "koneksi.php";

    if (isset($_POST['submit'])) {
        try {
            $nm_resep = $_POST['nm_resep'];
            $isi_resep = $_POST['isi_resep'];
			$id_resep = uniqid();
            // Insert data
            $sql_insert = "INSERT INTO dbo.resep (id_resep, nm_resep, isi_resep) 
                        VALUES (?,?,?)";
            $stmt = $conn->prepare($sql_insert);
            $stmt->bindValue(1, $id_resep);
            $stmt->bindValue(2, $nm_resep);
            $stmt->bindValue(3, $isi_resep);
            $stmt->execute();
        } catch(Exception $e) {
            echo "Failed: " . $e;
        }

        echo "<meta http-equiv='refresh' content='0; url=https://sub01.azurewebsites.net'>";
    } 
 ?>