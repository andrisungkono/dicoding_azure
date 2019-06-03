<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tambah Resep</title>
</head>

<body>
 <form method="post" action="simpan.php" enctype="multipart/form-data" >
       Nama Resep  <input type="text" name="nm_resep" id="nm_resep"/></br></br>
       
       Isi Resep <textarea name="isi_resep" id="isi_resep"> </textarea></br></br>
       <input type="submit" name="submit" value="Submit" />
       <input type="submit" name="load_data" value="Load Data" />
 </form>
</body>
</html>
