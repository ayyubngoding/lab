<?php

include '../vendor/autoload.php';
require 'functions.php';
$no = 1;
$result = mysqli_query($koneksi, 'SELECT * FROM dosen');

$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Lab Informatika</h1>
<h3>Laporan Data Dosen</h3>
<hr>
    <table border="1" cellspacing="0" cellpadding="10px">
        <tr>
        <th>No Urut</th>
        <th>NIDN</th>
        <th>Nama</th>
        <th>No Hp</th>
        </tr>';

while ($row = mysqli_fetch_assoc($result)) {
    $html .=
        '<tr>
               
               <td>' .
        $no++ .
        '</td>
               <td>' .
        $row['nidn'] .
        '</td>
               <td>' .
        $row['nama_dosen'] .
        '</td>
               <td>' .
        $row['no_hp'] .
        '</td>
               
               </tr>';
}
$html .= '</table>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('Dosen.pdf', 'I');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
 
</body>
</html>



