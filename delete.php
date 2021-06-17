<?php
require_once('conn.php');
$id_mhs = $_GET['id_mhs'];

$id_mhs = $_POST['id_mhs'];
$npm = $_POST['npm'];

$query = "DELETE FROM `mhs` WHERE id_mhs='$id_mhs'";
$query = mysqli_query($conn, $sql);
if($query){
    $msg = "update data mahasiswa berhasil";
}else{
    $msg = "update data mahasiswa gagal";
}
$response = array(
    'status'=> 'ok',
    'msg'=>$msg
);
    echo json_encode($response);
?>