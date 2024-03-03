<!doctype html>
<html lang="en">
<head>
<?php require 'shared/navbar.php' ?>
</head>

<body>
  <div class="p-4">
    <div class="col-md-12 justify-content-center">
      <div class="card mx-auto" style= width:50%;>
        <img class="card-img-top" src="https://img.paratic.com/dosya/2015/11/tum-zamanlarin-en-karizma-mustanglari-2005-mustang.jpg" alt="Card image cap">

        <div class="card-body">
          <h5 class="card-title">2005 Ford Mustang</h5>
          <p class="card-text justify-content-center">2005 Mustang, üstü açık ve kapalı seçenekleriyle tüm zamanların en iyi modelleri arasında gösteriliyor. Şık hatların basitçe kombin edilmesiyle oluşturulan yeni Mustang, oldukça da popüler bir model. Trafikte düşüncelere daldığınız anda yanınıza yaklaşan 2005 Mustang’e bakıp; “ben bu arabayı yarışta yenerim” diye düşünmek yerine sadece “güzel araba” diye düşünün. Çünkü 2005 Mustang’ın yenilebilmesi gerçekten çok güç!</p>
        </div>

        <ul class="list-group list-group-flush">
          <li class="list-group-item">Günlük 15$</li>
          <li class="list-group-item">1500 Motor</li>
          <li class="list-group-item">Benzinli</li>
        </ul>

        <div class="form-group">
          <label for="text1" class="col-4 col-form-label">Ad-Soyad</label> 
          <div class="col-8">
            <input id="text1" name="text1" placeholder="Alper Bozkurt" type="text" class="form-control" required="required">
          </div>
        </div>

        <div class="form-group">
          <label for="text" class="col-4 col-form-label">E-mail</label> 
          <div class="col-8">
            <input id="text" name="text" placeholder="example@example.com" type="text" class="form-control" required="required">
          </div>
        </div> 
        <div class="form-group">
                    <label for="select" class="col-4 col-form-label">Days</label> 
                    <div class="col-8">
                      <select id="select" name="select" class="custom-select" required="required">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                      </select>
                    </div>
        </div> 

        <div class="row p-4">
          <span> Total Price: <span id="totalPrice">15</span>$</span>
        </div>
        <div class="form-group">
          <div class="offset-4 col-8 text-right">
          <input id="submit-btn" type="button" class="btn btn-info" value="Submit">
          </div>
        </div>
      </div>
    </div>
  </div>
</body>





<script>
  
  $( document ).ready(function() {
      $("#select").change(function (){
          console.log($(this).val());
          var val = $(this).val();
          if(val !== null && val !== ''){
              $("#totalPrice").html(15 * val);
          }
      });

      $("#submit-btn").click(function () {
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();
        var car = String()

        today = mm + '/' + dd + '/' + yyyy;
        confirm('Sayın' + $("#text1").val() + ' ' + today + ' tarihli ' +'model aracınız' + ' ' + $("#select").val() + ' günlüğüne' + ' ' + $('#totalPrice').html() + '$ karşılığında siparişi alınmıştır.' );
        
        
        window.location.href='index.php';
      })
  });

      
</script>