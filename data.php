<?php session_start();?>
<?php
include "conn.php";

$data = array();
$sql="
	SELECT count(id) jumlah_antrian, min(nomor) antrian_now
	FROM `antrians` 
	WHERE status='mulai' and tanggal='".date('Y-m-d')."'
";

$query=mysqli_query($conn,$sql);	
$rs = mysqli_fetch_object ($query);
if($rs){
	$data['jumlah_antrian'] = $rs->jumlah_antrian;
	$data['antrian_now'] = $rs->antrian_now;
}
echo json_encode($data, JSON_PRETTY_PRINT);
?>
