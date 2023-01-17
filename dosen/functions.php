<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'mendata_lab');
//memanggil dari komputer
function tambah ($data)
{
global $koneksi;
 $id_dosen = ($data['id_dosen']);
 $nidn = ($data['nidn']);
 $nama = ($data['nama_dosen']);
 $no_hp = ($data['no_hp']);

 $query = "INSERT INTO dosen 
 values ('$id_dosen','$nidn','$nama','$no_hp')";
 mysqli_query($koneksi, $query);

 return mysqli_affected_rows($koneksi);
 //mengembalikan nilai
}
function hapus ($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM dosen  WHERE id_dosen =$id");
    return mysqli_affected_rows($koneksi);
}
function ubah ($data)
{
global $koneksi;
$id_dosen = ($data['id_dosen']);
$nidn = ($data['nidn']);
$nama_dosen = ($data['nama_dosen']);
$no_hp = ($data['no_hp']);
  // query update data
  mysqli_query(
    $koneksi,
    "UPDATE  dosen SET
 nidn='$nidn',
 nama_dosen='$nama_dosen',
 no_hp='$no_hp'
 WHERE id_dosen=$id_dosen"
);


 return mysqli_affected_rows($koneksi);
 //mengembalikan nilai
}


