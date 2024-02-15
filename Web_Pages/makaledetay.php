<?php

include ("baglanti.php");
session_start(); 

?>


<?php 

if (isset($_POST["kaydet"])) {

    $yorumyazar = $_POST["yorumyazar"]; 
    $yorumicerik = $_POST["yorumicerik"];
    $yorumcuk = $_GET['stdID'];

    if(isset($yorumyazar) && isset($yorumicerik))
    {           
                if (!empty($yorumicerik) && !empty($yorumyazar))
                {
                    $stmt = $baglan->prepare("INSERT INTO tbl_yorumlar (yorummakale, yorumyazar, yorumicerik) 
                        VALUES ('$yorumcuk','$yorumyazar','$yorumicerik')");
                    $stmt->execute();

                    header("Refresh:0");
                    
                    $stmt->close();
                    $baglan->close();
                }
    }
    
}
    

?>


<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="style5.css">
    <link rel="stylesheet" href="style7.css">
    <script type="text/javascript" src="jscript.js"></script>
    <title>Makale Detay Sayfası</title>
</head>

<body id="anasayfa">
<?php if ($_SESSION['menn']) {
    include("m.php");
}
else{
    include("m2.php");
} ?>

<?php

if ($baglan != null) {
    $sql = $baglan->prepare("SELECT * FROM tbl_makaleler WHERE makale_id=:id");
    $sql->execute(['id'=> $_GET['stdID']]);
    $makale = $sql->fetch(PDO::FETCH_ASSOC);
    echo '<center><div class="container">';
    echo '<div class="item">';
    echo '<p style="color: white; font-size: 25px; text-align: center; font-weight: bold;">'.$makale['makale_ad'].'</p>';
    echo '<p style="color: white; font-size: 20px; text-align: left;">  '.$makale['makale'].'</p>';
    echo '</div>';
    echo '<p style="color: white; position: absolute; left: 370px; font-size: 19px">Yazar: '.$makale['makale_yazar'];
    echo '<p style="color: white; position: absolute; right: 370px; font-size: 19px">'.$makale['makale_tarih'].'</p>';
    echo '<br><br><hr style="width: 1250px;"><br><br>';
    echo '</div></center>';
}

?>
<section id="iletisimalan">
  <div class="containerp-5" style="width: 1500px; text-align: left;">
    <h3 id="h3iletisim" style="color:aliceblue;">YORUM EKLE</h3>
    <form action="" method="POST" autocomplete="off">
 
    <div id="formgroup">
      <div id="solform">
       <label id="labelstil1" style="color:aliceblue;">Adınız:</label>
        <input type="text" class="form-control" name="yorumyazar" required>
        <label id="labelstil1" style="color:aliceblue;">Yorumunuz:</label>
        <input type="text" class="form-control" name="yorumicerik" required>
      </div>
      <br><br><br><br><br><br><br><br><br><br><br>
        <button type="submit" name="kaydet" class="button" style="align-items: center;"  >Yorum Yap</button> 
    </div>
    </form>
  </div>
  </div>
</section>



<?php

if ($baglan != null) {
    $sql = $baglan->prepare("SELECT * FROM tbl_yorumlar WHERE yorummakale=:id");
    $sql->execute(['id'=> $_GET['stdID']]);
    echo '<center><div class="container">';
    while ($yorum = $sql->fetch(PDO::FETCH_ASSOC))
    {
    echo '<div class="item" style="padding: 30px">';
    echo '<p style="color: white; font-size: 25px; text-align: center; font-weight: bold;">Yazar: '.$yorum['yorumyazar'].'</p>';
    echo '<p style="color: white; font-size: 20px; text-align: center;">Yorum: '.$yorum['yorumicerik'].'</p>';
    echo '</div>';
    echo '<br><br><hr style="width: 1250px;"><br><br>';
    }
    echo '</div></center>';

}

?>

</body>
</html>

