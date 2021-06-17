<?php
include "conn.php";
// variabel post
$npm =  isset($_POST["npm"]) ? $_POST["npm"] : "";
//echo $npm;
$nama =  isset($_POST["nama"]) ? $_POST["nama"] : "";
//echo $nama;
$jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : "";
//echo $jurusan;

//query tambah
$sql = "INSERT INTO `mhs` (`npm`, `nama`, `jurusan`) 
VALUES ('".$npm."', '".$nama."', '".$jurusan."');";
//echo $sql;

// running query
$query = mysqli_query($conn, $sql);
if($query){
    $msg = "simpan data mahasiswa berhasil";
}else{
    $msg = "simpan data mahasiswa gagal";
}

//echo $msg;
$response = array(
    'status'=> 'ok',
    'msg'=>$msg
);
    echo json_encode($response);
?>