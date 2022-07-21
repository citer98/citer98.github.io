<!DOCTYPE html>
<html>
<head>
    <title>Penghitung</title>
        <style type="text/css">
    .element {
        position: relative;
        top: -190px;
        font-size: 20px;
     }

     .menu {
        position: relative;
        left: -200px;
        font-size: 20px;  
        top: 50px;
     }

     .title
     {
        position: relative;
        font-size: 80px;  
        top: -30px;
     }

     .hitung
     {
        font-size: 20px;
     }

     
    </style>

</head>
<body>
        <br><br><br><br><br>
        <tr>
            <td>
                <div align="center">
                    <strong>
                        <font size="10" face="Courier New, Courier, mono">LAPORAN PEMBELIAN</font>
                    </strong>
                    <br>
          <?php
            //buka file counter mode baca
            $filecounter="counter.txt";
            $fl=fopen($filecounter,"r+");

            //ambil nilai hit dan simpan dalam variabel $hit
            $hit=fread($fl,filesize($filecounter));

            //tampil
            echo("<table widh=250 align=center border=2 bordercolor=red><tr>");
            echo ("<td width=250 valign=middle align=center>");
            echo ("<font face=Arial Bold size=2 color=black><b>");
            echo ("Anda adalah pengunjung yang ke: ");
            echo ($hit);
            echo ("</b></font>");
            echo ("</td>");
            echo ("</tr></table>");
            //tutup file counter.txt
            fclose($fl);

            //buka file counter.txt
            $fl=fopen($filecounter,"w+");

            //tambahkan nilai hit engan 1
            $hit=$hit+1;

            //simpan
            fwrite($fl,$hit,strlen($hit));

            //tutup
            fclose($fl);
          ?>
          <br>

                </div>
                        <div class="hitung">
                            <form name="form1" method="post" action="proses.php">
                                <table width="58%" border="0" align="center">
                                    <tr>
                                        <td>Nama Pelanggan</td>
                                        <td><input name="nama" type="text"></td>
                                    </tr>

                                    <tr>
                                        <td>Jenis Bahan Bakar</td>
                                        <td>
                                            <input type="radio" name="BBM" value="Pertamax">Pertamax<br>
                                            <input type="radio" name="BBM" value="Pertamax">Pertalite<br>
                                            <input type="radio" name="BBM" value="Pertamax">Dexlite<br>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Jumlah Pembelian</td>
                                        <td><input name="jumlah" type="text"> Liter</td>
                                    </tr>
                                    
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        <strong>
                            <center><a href="lihat.php">::Lihat Data Laporan::</a></center>
                        </strong>
                </div>
</body>
</html>
