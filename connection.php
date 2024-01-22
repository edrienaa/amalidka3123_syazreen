<?php 

$namahost = "localhost";
$pengguna_mysql = "root";
$katalaluan_mysql = "";
$dbname = "amalidka3123";

$connection = mysqli_connect ($namahost, $pengguna_mysql, $katalaluan_mysql) or die ("Maaf pangkalan data tidak dapat disambungkan");
mysqli_select_db ($connection, $dbname) or die ("Tidak dapat pilih pangkalan data");

?>