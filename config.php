<?php
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "simodul";

	$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	if(mysqli_connect_errno()){
		echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
	}
?>
<?php 
   //fungsi untuk mengkonversi size file
    function formatBytes($bytes, $precision = 2) { 
    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 

    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
    $pow = min($pow, count($units) - 1); 

    $bytes /= pow(1024, $pow); 

    return round($bytes, $precision) . ' ' . $units[$pow]; 
	}
?> 
<?php
function aman($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
function tanggal($date){
	$BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
 
	$tahun = substr($date, 0, 4);
	$bulan = substr($date, 5, 2);
	$tgl   = substr($date, 8, 2);
 
	$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;		
	return($result);
}
?>

						