<?php
require 'function.php';
if (isset ($_POST ['submit'])){
    if (tambah($_POST )>0){
        echo "
        <script>
        alert ('data berhasil disimpan');
        document.location.href='item.php';
        </script>
        
        ";
    } else{
        echo "
        <script>
        alert ('data gagal');
        </script>
        ";
        echo mysqli_error ($koneksi);
    }
}