<?php 
include ("baglanti.php");
session_start(); 
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>BLOG SAYFASI</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style4.css">
</head>
<body background="./images/ay.jpg">
    <?php
      if($_SESSION['menn']){
        include("m.php");
      }
      else{
        include("m2.php");
      }
    ?>

    <section id="anasayfa">
        <div id="black">

        </div>
    </section>
    <div id="icerik">
        <h2>BLOG SAYFAMA HOŞGELDİNİZ</h2>
        <hr width=880px >
         <p style="font-size: 23px;">Merhabalar ben Gamze. Uzay ve 
            gök cisimleri üzerine bir blog 
            sayfam var. Keyifli okumalar.  </p>
    </div>
</body>
</html>

<?php

include("baglanti.php");
/*if(isset($_POST[ ]))
*/
?>
