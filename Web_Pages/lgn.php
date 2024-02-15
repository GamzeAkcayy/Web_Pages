<?php
include ("baglanti.php");
session_start();
$_SESSION['menn'] = TRUE;
?>

<?php 

if (isset($_POST["btnLgn"])) { 
    
    $kad = $_POST["uname"]; 
    $ksifre = $_POST["psw"];
    $sql = $baglan->prepare("SELECT * FROM tbl_kullanicilar");
    $sql->execute();

while ($kullanici = $sql->fetch(PDO::FETCH_ASSOC))
{
    if(isset($kad) && isset($ksifre))
    {           
                if (!empty($ksifre) && !empty($kad))
                {

                        if($kad == $kullanici['kullanici_adi'] && $ksifre == $kullanici['password'])
                        {
                            $_SESSION['menn'] = FALSE;
                            Header("Location: anasayfa.php");
                            sleep(0.5);
                            exit;
                        }
                        else{
                            echo "<script>alert('Böyle bir kullanıcı yoktur! Tekrar Deneyiniz..')</script>";
                            include("login.php");
                        }//burda sorun var

                }
                else if (empty($ksifre) || empty($kad))
                {
                    Header("Location: login.php");
                }
    }
}

} 

?>