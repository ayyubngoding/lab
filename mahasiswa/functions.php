<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'mendata_lab');

function tambah($data)
{
    // blog functions
    global $koneksi;
    // ambil data dari tiap element dalam form
    $id_mahasiswa = htmlspecialchars($data['id_mahasiswa']);
    $npm = htmlspecialchars($data['npm']);
    $nama = htmlspecialchars($data['nama']);
    $kelas = htmlspecialchars($data['kelas']);
    $angkatan = htmlspecialchars($data['angkatan']);
    $nohp = htmlspecialchars($data['no_hp']);
    $alamat = htmlspecialchars($data['alamat']);
    $ket = htmlspecialchars($data['ket']);

    // query insert data
    $query = "INSERT INTO mahasiswa
    values('$id_mahasiswa','$npm','$nama','$kelas','$angkatan','$nohp','$alamat','$ket')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM mahasiswa  WHERE id_mahasiswa =$id");
    return mysqli_affected_rows($koneksi);
}
function ubah($data)
{
    global $koneksi;
    $id_mahasiswa = $data['id_mahasiswa'];
    $NPM = $data['NPM'];
    $nama = $data['nama'];
    $kelas = $data['kelas'];
    $angkatan = $data['angkatan'];
    $no_hp = $data['no_hp'];
    $alamat = $data['alamat'];
    $ket = $data['ket'];
    // query update data
    mysqli_query(
        $koneksi,
        "UPDATE  mahasiswa SET
 NPM='$NPM',
 nama='$nama',
 kelas='$kelas',
 angkatan='$angkatan',
 no_hp='$no_hp',
 alamat='$alamat',
 ket='$ket'
 WHERE id_mahasiswa=$id_mahasiswa"
    );

    return mysqli_affected_rows($koneksi);
    //mengembalikan nilai
}
?>
