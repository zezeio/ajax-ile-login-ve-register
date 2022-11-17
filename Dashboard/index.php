<?php
require_once '../db/db.php';
if(!isset($_SESSION['oturum']))
{
	header("Location: ../giris/index.php");
}
?> 
merhaba giriş yapıldı. session başlatıldı.
