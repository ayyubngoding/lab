<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'mendata_lab');
//memanggil dari komputer
function tambah($data)
{
    global $koneksi;
    $id_kondisi = $data['id_kondisi'];
    $nama = $data['nama_item'];
    $tanggal_perbaikan = $data['tanggal_perbaikan'];
    $kerusakan = $data['kerusakan'];
    $penanganan = $data['penanganan'];
    $kebutuhan_komponen = $data['kebutuhan_komponen'];
    $hasil_perbaikan = $data['hasil_perbaikan'];

    $query = "INSERT INTO kondisi 
 values ('$id_kondisi', '$nama','$tanggal_perbaikan','$kerusakan','$penanganan','$kebutuhan_komponen','$hasil_perbaikan')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
    //mengembalikan nilai
}
function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM kondisi  WHERE id_kondisi =$id");
    return mysqli_affected_rows($koneksi);
}
function ubah($data)
{
    global $koneksi;
    $id_kondisi = $data['id_kondisi'];
    $nama = $data['nama_item'];
    $tanggal_perbaikan = $data['tanggal_perbaikan'];
    $kerusakan = $data['kerusakan'];
    $penanganan = $data['penanganan'];
    $kebutuhan_komponen = $data['kebutuhan_komponen'];
    $hasil_perbaikan = $data['hasil_perbaikan'];

    $query = "UPDATE kondisi SET
    item_id='$nama',
    tanggal_perbaikan='$tanggal_perbaikan',
    kerusakan='$kerusakan',
    penanganan='$penanganan',
    kebutuhan_komponen='$kebutuhan_komponen',
    hasil_perbaikan='$hasil_perbaikan'
    WHERE id_kondisi=$id_kondisi
    ";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
    //mengembalikan nilai
}
