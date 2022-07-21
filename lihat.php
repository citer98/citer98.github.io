<?php 

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "r");
$tgl=date('d-m-Y');

echo "<table border='1'>";
    echo "<tr><td>Tanggal</td>";
    echo "    <td>Nama</td>";
    echo "    <td>Jenis BBM</td>";
    echo "    <td>Jumlah</td>";
    echo "    <td>Hasil</td>";
while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);

    echo "<tr><td>$tgl</td>";
    echo "    <td>$pisah[0] </td>";
    echo "    <td>$pisah[1] </td>";
    echo "    <td>$pisah[2] </td>";
    echo "    <td>$pisah[3] </td></tr>";

}

echo "</table>";
echo "<a href='tampilan.php'> Isi buku tamu </a>";

?>



    
    
    
    
    



