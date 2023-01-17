<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'mendata_lab');

function tambah($data)
{
    global $koneksi;
    $id_lab = $data['id_lab'];
    $nama = $data['nama'];
    $nama_komputer = $data['nama_komputer'];
    $query = "INSERT INTO lab 
 values ('$id_lab','$nama', '$nama_komputer')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
    //mengembalikan nilai
}
function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM lab  WHERE id_lab =$id");
    return mysqli_affected_rows($koneksi);
}
function ubah($data)
{
    global $koneksi;
    $id_lab = $data['id_lab'];
    $nama = $data['nama'];
    $nama_komputer = $data['nama_komputer'];
    // query update data
    mysqli_query(
        $koneksi,
        "UPDATE  lab SET
 nama='$nama',
 komputer_id='$nama_komputer'
 WHERE id_lab=$id_lab"
    );

    return mysqli_affected_rows($koneksi);
    //mengembalikan nilai
}
