<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Postest</title>
    <style type="text/css">
      body 
      {
        background-image: url('https://wallpaperaccess.com/full/959294.jpg');
      }
      .tabel
      {
        margin-top: 100px;
      }
    </style>
  </head>

  <body>
    <div class="tabel">
    <center>
    <table width="80%" border="5" bgcolor="lightsalmon" cellpadding="1">

    <!--Ini data baris 1-->
    <tr>
      <td colspan="3" align="center">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">


      </td>

    </tr>

    <!--Ini data baris 2-->
    <tr>
      <td align="center" width="26%">
          <font face="Times New Roman"><b>Jam</b></font><br>
            <script type="text/javascript" charset="utf-8">
              let a;
              let time;
              setInterval(() => {
                a = new Date();
                time = a.getHours() + ':' + a.getMinutes() + ':' + a.getSeconds();
                document.getElementById('time').innerHTML = time;
              }, 1000);
            </script>
            <span id="time"></span>
      </td>
      <td> 
          <br><br><br><br>
          <center><font size="5" face="Times New Roman"><b>Halo Stranger</b></font></center>
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
          <center><button><a href="Games.html" style="text-decoration:none"><b>Back</b></a></button></li></center>
          <br><br><br><br>
      </td>   
      <td align="center">
        <font face="Times New Roman"><b>Kalender</b></font>
        <br>
        <?=date("l, j F Y");?>
      </td>
    </tr>

    <!--Ini data baris 3-->
    <tr>
      <td colspan="3" align="center">
          
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">
        <img align="center" width="50" height="50" src="https://c.tenor.com/OiEJht3qg-EAAAAj/takodachi-ina.gif">  
      </td>
    </tr>
  </table>
  </center>
  </div>
  </body>
</html>



