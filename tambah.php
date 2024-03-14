<?
require_once("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $merk = $_POST['merk'];
    $jumlah = $_POST['jumlah'];


    $result = tambahbarang($id, $kode_barang, $nama_barang,  $kategori,  $merk,  $jumlah,);
 if($result){
    echo "<script> 'barang berhasil ditambahkan' </script>";
    header("location:barang.php");
 }else{
    echo "<script> 'barang gagal ditambahkan' </script>";
    header("location:barang.php");
 }

 echo $result;
}
?>