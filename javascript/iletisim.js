  function calculateRowHeights() {
    var bodyHeight = $('body').outerHeight();
    var row1Height = $('.row-1').outerHeight();
    var row3Height = $('.row-3').outerHeight();
    var row2Height = bodyHeight - row1Height - row3Height;
    $('.row-2').css('height', row2Height + 'px');
  }

  $(document).ready(function() {
    calculateRowHeights();
  });

  $(window).resize(function() {
    calculateRowHeights();
  });
//form elemanları kontrolleri

function validateForm() {
  var ad = document.getElementById("isim").value;
  var soyad = document.getElementById("soyisim").value;
  var cinsiyet = document.querySelector('input[name="cinsiyet"]:checked');
  var yas = document.getElementById("yas").value;
  var iletisim = document.getElementById("iletisim-tercihi").value;
  var mesaj = document.getElementById("mesaj-kutusu").value;
  var kabul = document.getElementById("onay").checked;

  if (!ad) {
    alert("Lütfen adınızı giriniz!");
    return false;
  }
  else if(!soyad){
    alert("Lütfen soyadınızı giriniz!");
    return false;
  }
  else if(!cinsiyet){
    alert("Lütfen cinsiyetinizi seçiniz!");
    return false;
  }
  else if(!yas){
    alert("Lütfen yaşınızı belirleyiniz!");
    return false;
  }
  else if(!iletisim){
    alert("Lütfen iletişim türünü seçiniz!");
    return false;
  }
  else if(!mesaj){
    alert("Lütfen mesajınızı yazın!");
    return false;
  }
  else if(!kabul){
    alert("Mesajınızı göndermek için onaylayın!!!");
    return false;
  }
}

function clearForm() {
  var form = document.getElementById("loginForm"); // formun id'sine uygun şekilde değiştirin
  form.reset();
}

