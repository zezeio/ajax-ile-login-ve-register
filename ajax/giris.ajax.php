<?php
require_once '../db/db.php';
if($_POST){ 
    $mail   = $_POST['email'];
    $sifre  = $_POST['sifre'];
    $md5sifre = md5($sifre);

    if(!$mail || !$sifre){
        echo 'bos';
    }else{
         $girisyap = $db->prepare("SELECT * FROM kullanicilar WHERE Kullanici_Mail=:Kullanici_Mail AND Kullanici_Sifre=:Kullanici_Sifre");
         $girisyap->execute(array(
            'Kullanici_Mail' => $mail,
            'Kullanici_Sifre' => $md5sifre
         ));

         if($girisyap->rowCount()){
            $row = $girisyap->fetch(PDO::FETCH_OBJ);
            $_SESSION['oturum'] = true;
            $_SESSION['kullanici_id'] = $row->Kullanici_ID;
            echo 'ok'; 
         }else{
            echo 'hata';
         }
    }
}



?>