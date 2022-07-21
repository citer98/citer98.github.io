<?php 

$nama = $_POST['nama'];
$jumlah=$_POST['jumlah'];
$BBM=$_POST['BBM'];
if (isset($_POST['Submit']))
{
    if ($BBM=="Pertamax") 
    {
        $hasil=7500*$jumlah;
    }

    elseif ($BBM=="Pertalite") 
    {
        $hasil=$jumlah*17000;
    }

    elseif ($BBM=="Dexlite") 
    {
        $hasil=16000*$jumlah;
    }
}

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("Laporan.txt", "a+");
fputs($fp, "$nama|$BBM|$jumlah|$hasil\n");
fclose($fp);

echo "Laporan diterima, untuk kembali anda bisa klik dibawah ini<br>";
echo "<a href='Tampil.php'>Lihat Laporan</a><br>";

 ?>



