<?php 
require 'config.php';
$id =$_GET['hapus'];
if (hapus($id)>0){
    echo "
    <script>
    alert ('data berhasil dihapus');
    document.location.href='komputer.php';
    </script>
    
    ";
} else{
    echo "
    <script>
    alert ('data gagal');
    </script>
    ";
    
}