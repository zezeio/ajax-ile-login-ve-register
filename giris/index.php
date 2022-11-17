<?php require_once '../db/db.php'; 
if(isset($_SESSION['oturum']))
{
	header("Location: ../Dashboard/index.php");
}
?> 

<html>
<head>
    <title>Ajax ile Giriş</title>
    <link href="../assets/css/tailwind.min.css" rel="stylesheet" />
    <link href="../assets/css/sweetalert2.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <style>
    body {
        font-family: "Inter", sans-serif;
    }
    input{margin-bottom: 50px;}
    </style>  
</head>

<body class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
  <div class="max-w-screen-xl m-0 sm:m-20 bg-white shadow sm:rounded-lg flex justify-center flex-1">
    <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
      <div>
        <img src="../assets/img/kayit/logo.png" class="w-32 mx-auto" />
      </div>
      <div class="mt-12 flex flex-col items-center">
        <h2 class="text-2xl xl:text-3xl font-extrabold"> Joyxen </h2>
        <h1 class="text-2xl xl:text-3xl font-extrabold"> Giriş Yap </h1>
        <div class="w-full flex-1 mt-8">
        
        <!----
        Kayıt Formu Başlangıç--->
        <form role="form" action="" id="girisformu" method="POST" onsubmit="return false;">
          <div class="flex flex-col items-center"> 
            <input class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white" 
                    name="email" type="email" placeholder="Email adresiniz" />
            </div>  
            <input class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white" 
                    name="sifre" type="password" placeholder="Şifreniz" /> 
            <div class="mx-auto max-w-xs"> 
                <button type="submit" onclick="girisbtn();" class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                    <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                        <circle cx="8.5" cy="7" r="4" />
                        <path d="M20 8v6M23 11h-6" />
                    </svg>
                    <span class="ml-3">
                        Giriş Yap
                    </span>
                </button>
                 
          </div>
          </form>
          <!----
            Kayıt Formu Bitiş--->
        </div>
      </div>
    </div>
    <div class="flex-1 bg-indigo-100 text-center hidden lg:flex">
      <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat" style="background-image: url('https://storage.googleapis.com/devitary-image-host.appspot.com/15848031292911696601-undraw_designer_life_w96d.svg');"></div>
    </div>
  </div>
</body>

<script src="../assets/js/alpine.js" defer></script>
<script src="../assets/js/sweetalert2.min.js"></script>
<script src="../assets/js/jquery-3.6.1.min.js" defer></script>
 
<script src="../ajax/js/giris.js"></script>
 
</html>

 
 
