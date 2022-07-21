<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
        <style type="text/css">
    .element {
        position: relative;
        top: -190px;
        font-size: 20px;
     }

     .menu {
        position: relative;
        left: -250px;
        font-size: 20px;  
        top: 50px;
     }

     .title
     {
        position: relative;
        font-size: 80px;  
        top: -30px;
     }

     .tabel 
     {
        size: 50px;
        text-align: center;
     }


     body 
     {
        background-image: url('bg.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    </style>

</head>
<body>
        <br><br><br><br><br>
        <table bgcolor="white" align="center" border="2" cellpadding="100">
        <tr bgcolor="white">
            <a name="top"></a>            
            <th>

            <div class="title">
            Program Pertamina
            </div>

            <div class="menu">
                <button>
                    <img src="HOME.png" height="20" width="20">
                        <a href="index.html"style="text-decoration:none">
                            <b> HOME&nbsp;</b>
                        </a>
                </button>    
                <button>
                    <img src="sym.png" height="20" width="20">
                    <a href="Hitung.php"style="text-decoration:none">
                        <b> PENGHITUNG&nbsp;</b>
                    </a>
                </button>
                <button>
                    <img src="tab.png" height="20" width="20">
                    <a href="Tampil.php"style="text-decoration:none">
                        <b> LAPORAN&nbsp;</b>
                    </a>
                </button>
                <button>
                    <img src="PERSON.png" height="20" width="20">
                    <a href="About.html"style="text-decoration:none">
                        <b> ABOUT</b>
                    </a>
                </button>
            </div>   
            </th>

        </tr>

        <div class="tabel">
        <tr>
            <center><h3></h3></center>
            <td width="800" height="700">
            <center><font size=""></font>
            <?php 

                $fp = fopen("Laporan.txt", "r");
                $tgl=date('d-m-Y');

                echo "<h1>Tabel Laporan</h1>\n";
                echo "<table border='1'>";
                    echo "<tr><td><b><font size=5>Tanggal</font></b></td>";
                    echo "    <td><center><b><font size=5>Nama</font></b></center></td>";
                    echo "    <td><b><font size=5>Jenis BBM</font></b></td>";
                    echo "    <td><b><font size=5>Jumlah</font></b></td>";
                    echo "    <td><b><font size=5>Hasil</font></b></td>";
                while ($isi = fgets($fp)) {
                    $pisah = explode('|', $isi);

                    echo "<tr><td><font size=5>$tgl</font></td>";
                    echo "    <td><font size=5>$pisah[0] </font></td>";
                    echo "    <td><center><font size=5>$pisah[1] </font></center></td>";
                    echo "    <td><center><font size=5>$pisah[2] </font></center></td>";
                    echo "    <td><font size=5>$pisah[3] </font></td></tr>";
                }
            ?>
            </center>
            </td>
        </tr>
        </div>
    </table>
</body>
</html>
