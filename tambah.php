<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tambah Resep</title>
<style type="text/css">
 	body { background-color: #fff; border-top: solid 10px #000;
 	    color: #333; font-size: .85em; margin: 20; padding: 20;
 	    font-family: "Segoe UI", Verdana, Helvetica, Sans-Serif;
 	}
 	h1, h2, h3,{ color: #000; margin-bottom: 0; padding-bottom: 0; }
 	h1 { font-size: 2em; }
 	h2 { font-size: 1.75em; }
 	h3 { font-size: 1.2em; }
 </style>
</head>

<body>
 <?php
 echo "<h2>Resep Masakan Indonesia</h2>";
 ?>
 <form method="post" action="simpan.php" enctype="multipart/form-data" >
       Nama Resep  <input type="text" name="nm_resep" id="nm_resep" required="required"/></br></br>
       
       Isi Resep <textarea rows="4" cols="50" name="isi_resep" id="isi_resep" required="required">Isi resep</textarea></br></br>
       <input type="submit" name="submit" value="Submit" />
       <input type="submit" name="load_data" value="Load Data" />
 </form>
</body>
</html>
