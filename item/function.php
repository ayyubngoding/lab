<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'mendata_lab');
//memanggil dari komputer
function tambah ($data)
{
global $koneksi;
 $id_item = ($data['id_item']);
 $nama = ($data['nama']);
 $quality = ($data['quality']);
 $status = ($data['status']);
 $aksi = ($data['aksi']);

 $query = "INSERT INTO itemkom 
 values ('$id_item','$nama','$quality','$status','$aksi')";
 mysqli_query($koneksi, $query);

 return mysqli_affected_rows($koneksi);
 //mengembalikan nilai
}
function hapus ($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM itemkom  WHERE id_item =$id");
    return mysqli_affected_rows($koneksi);
}
function ubah ($data)
{
global $koneksi;
$id_item = ($data['id_item']);
$nama = ($data['nama_item']);
$quality = ($data['quality']);
$status = ($data['status']);
$aksi = ($data['aksi']);
  // query update data
  mysqli_query(
    $koneksi,
    "UPDATE itemkom SET
 nama_item='$nama',
 quality='$quality',
 status='$status',
 aksi='$aksi'
 WHERE id_item=$id_item"
);


 return mysqli_affected_rows($koneksi);
 //mengembalikan nilai
}


