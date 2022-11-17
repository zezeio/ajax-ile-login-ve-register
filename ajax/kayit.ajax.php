<?php
require_once '../db/db.php';
if($_POST){
    $ad     = $_POST['ad'];
    $soyad  = $_POST['soyad'];
    $mail   = $_POST['email'];
    $sifre  = $_POST['sifre'];
    $sifreT = $_POST['sifretekrar'];

    if(!$ad || !$soyad || !$mail || !$sifre || !$sifreT){
        echo 'bos';
    }else{
        $kayitKonrol = $db->prepare("SELECT Kullanici_Mail FROM kullanicilar WHERE Kullanici_Mail=:Kullanici_Mail");
        $kayitKonrol->execute(array(':Kullanici_Mail' => $mail));

        if($kayitKonrol->rowCount()){
            echo "var";
        }else{
                if($sifre != $sifreT){
                    echo "uyumsuz";
                }else{
                    $kayit = $db->prepare("INSERT INTO kullanicilar set 
                    Kullanici_Adi=:Kullanici_Adi,
                    Kullanici_Soyadi=:Kullanici_Soyadi, 
                    Kullanici_Mail=:Kullanici_Mail,
                    Kullanici_Sifre=:Kullanici_Sifre
                    ");
                    $kayit->execute(array(
                    'Kullanici_Adi'    =>  strip_tags(trim($ad)),
                    'Kullanici_Soyadi' =>  strip_tags(trim($soyad)),
                    'Kullanici_Mail'   =>  strip_tags(trim($mail)),
                    'Kullanici_Sifre'  =>  md5(strip_tags(trim($sifre))) 
                    ));
        
                    if($kayit){
                        echo "ok";
                    }else{
                        echo "hata";
                    }   
                }
        }
    }
}



?>