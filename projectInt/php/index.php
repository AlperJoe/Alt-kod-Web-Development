<!doctype html>
<html lang="en">
<head>
<?php require 'shared/navbar.php' ?>
</head>

<body>
    <div class="row">
        <div class="col-md-12 justify-content-center ">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img  src="https://img.paratic.com/dosya/2015/11/tum-zamanlarin-en-karizma-mustanglari-1965-ford-mustang.jpg" class="d-block w-100" alt="image1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://img.paratic.com/dosya/2015/11/tum-zamanlarin-en-karizma-mustanglari-2015-mustang-convertible.jpg" class="d-block w-100" alt="image2">
                        </div>
                        <div class="carousel-item">
                            <img src="https://img.paratic.com/dosya/2015/11/tum-zamanlarin-en-karizma-mustanglari-2005-mustang.jpg" class="d-block w-100" alt="image3">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div>
                    <div class="col-md-12">
                        <div class="row p-5">
                            <div class="col-md-12 text-center" style="color:royalblue; font-family:'Times New Roman', Times, serif">
                                <h1>TOSUNCUK MUSTANG KİRALAMA ŞİRKETİ</h1>
                            </div>
                        </div>
                    </div>
                </div>      
            </div> 
            <div class="col-md-4 justify-content-center">
                <div class="card">
                    <img class="card-img-top" src="https://img.paratic.com/dosya/2015/11/tum-zamanlarin-en-karizma-mustanglari-1965-ford-mustang.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">1965 Ford Mustang</h5>
                    <p class="card-text justify-content-center">Birçok Mustang hayranının kalbinde ayrı bir yere sahip olan bu araç, ayrıca markanın açılış modeliydi. Uzun ön kaputu ve daha küçük bagajı ile zamanının eşsiz bir modeli olan bu araba, Ford’un Mustang’ın benzersiz tarzını dünyaya duyurmasına ön ayak oldu. Ayrıca, sürüş için mükemmel; ancak eşya taşımak için yeterince iyi olmayan önceki modellerinin bazılarında daha geniş iç mekan için bagaj kapasitesi daha da küçültüldü.</p>
                    </div>
                    <div class="card-body">
                        <input type="button" class="btn btn-info redirectBtn" value="Ayrıntılar" data="1965Mustang">
                        

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="https://img.paratic.com/dosya/2015/11/tum-zamanlarin-en-karizma-mustanglari-2015-mustang-convertible.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">2015 Mustang Convertible</h5>
                    <p class="card-text justify-content-center">Geldik günümüzün karizma ve çekici Mustang’larına! En karizma Mustang’lar listesini hazırlarken, üstü açılabilir yeni model 2015 Mustang hakkında da konuşmamız gerektiğini düşündük. Bu inanılmaz modelin, Mustang’ın şık ve seksi hatlarına sahip olması arabayı tam bir yol canavarına dönüştürüyor. Belki canavar olabilir; ancak bu mühendislik eserini zorlu yollarda kullanabileceğimiz anlamına gelmez.</p>
                    </div>
                    <div class="card-body">
                        <input type="button" class="btn btn-info redirectBtn" value="Ayrıntılar" data="2015Mustang">
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="https://img.paratic.com/dosya/2015/11/tum-zamanlarin-en-karizma-mustanglari-2005-mustang.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">2005 Mustang</h5>
                    <p class="card-text justify-content-center">2005 Mustang, üstü açık ve kapalı seçenekleriyle tüm zamanların en iyi modelleri arasında gösteriliyor. Şık hatların basitçe kombin edilmesiyle oluşturulan yeni Mustang, oldukça da popüler bir model. Trafikte düşüncelere daldığınız anda yanınıza yaklaşan 2005 Mustang’e bakıp; “ben bu arabayı yarışta yenerim” diye düşünmek yerine sadece “güzel araba” diye düşünün. Çünkü 2005 Mustang’ın yenilebilmesi gerçekten çok güç!</p>
                    </div>
                    <div class="card-body">
                        <input type="button" class="btn btn-info redirectBtn" value=" Ayrıntılar" data="2005Mustang">
                    </div>
                </div>
            </div>  
    </body>
    
<script>
    $( document ).ready(function() {
        $(".redirectBtn").click(function() {
            carModel = $(this).attr("data");
            url = 'car-order.php?model=' + carModel;
            window.location.href = url;
        })
    }); 
</script>  
    