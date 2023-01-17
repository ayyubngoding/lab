<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'mendata_lab');
function tambah ($data)
{
global $koneksi;
$id_komputer= $data['id_komputer'];
 $nama_komputer= $data['nama_komputer'];
 $nama_item = $data['nama_item'];
 $query = "INSERT INTO komputer 
 values ('$id_komputer', '$nama_komputer','$nama_item')";
 mysqli_query($koneksi, $query);

 return mysqli_affected_rows($koneksi);
 //mengembalikan nilai
}
function hapus ($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM komputer  WHERE id_komputer =$id");
    return mysqli_affected_rows($koneksi);
}
function ubah ($data)
{
global $koneksi;
$id_komputer= $data['id_komputer'];
$nama_komputer= $data['nama_komputer'];
$nama_item= $data['nama_item'];
  // query update data
  mysqli_query(
    $koneksi,
    "UPDATE  komputer SET
 nama_komputer='$nama_komputer',
 item_id='$nama_item'
 WHERE id_komputer=$id_komputer"
);


 return mysqli_affected_rows($koneksi);
 //mengembalikan nilai
}