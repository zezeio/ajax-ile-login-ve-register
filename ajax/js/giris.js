function girisbtn(){

    var bilgiler = $("#girisformu").serialize(); //formun id yazıldı.

    $.ajax({
        type    : "POST",
        data    : bilgiler,
        url     : "../ajax/giris.ajax.php",
        success : function(kayitol){
            if($.trim(kayitol) == "bos"){
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Lütfen kullanıcı bilgilerinizi giriniz',
                confirmButtonText: 'Anladım' 
                }); 
            }else if($.trim(kayitol) == "ok"){
                Swal.fire({
                icon: 'success',
                title: 'Yönlendiriliyorsunuz',
                text: 'Giriş İşlemi Başarılı',
                confirmButtonText: 'Tamam' 
                }); 
            }else if($.trim(kayitol) == "hata"){
                Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Girilen bilgilere ait kullanıcı bulunamadı!',
                confirmButtonText: 'Tekrar Dene' 
                }); 
            }
        }
    });
}