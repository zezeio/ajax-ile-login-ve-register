function kayitbtn(){

    var bilgiler = $("#kayitformu").serialize(); //formun id yazıldı.

    $.ajax({
        type    : "POST",
        data    : bilgiler,
        url     : "../ajax/kayit.ajax.php",
        success : function(kayitol){
            if($.trim(kayitol) == "bos"){
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Boş Alan Bırakamazsınız',
                confirmButtonText: 'Anladım' 
                });
            }else if($.trim(kayitol) == "var"){
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Mail adresi zaten kayıtlı',
                confirmButtonText: 'Kapat' 
                }); 
            }else if($.trim(kayitol) == "uyumsuz"){
                Swal.fire({
                icon: 'warning',
                title: 'Oooo...',
                text: 'Şifrelerin birbiriyle uyumsuz gibi görünüyor. Yeniden yazmayı dene...',
                confirmButtonText: 'Yeniden Dene' 
                });
            }else if($.trim(kayitol) == "ok"){
                Swal.fire({
                icon: 'success',
                title: 'Mükkemmel...',
                text: 'Kayıt İşlemi Başarılı',
                confirmButtonText: 'Tamam' 
                }); 
            }else if($.trim(kayitol) == "hata"){
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Sistemsem Bir Sorun Meydana Geldi',
                confirmButtonText: 'Kapat' 
                }); 
            }
        }
    });
}