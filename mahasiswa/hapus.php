<?php
require 'functions.php';
$id = $_GET['hapus'];
if (hapus($id) > 0) {
    echo "
    <script>
    alert('data berhasil hapus');
    document.location.href='mahasiswa.php';
    </script>
    
    ";
} else {
    echo "
    
    <script>
    alert('gagal');
    document.location.href='mahasiswa.php';
    </script>
    
    ";
    echo mysqli_error($koneksi);
}


?>