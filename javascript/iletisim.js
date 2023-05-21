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
  var ad = $("#isim").val();
  var soyad = $("#soyisim").val();
  var cinsiyet = $('input[name="cinsiyet"]:checked').val();
  var yas = $("#yas").val();
  var iletisim = $("#iletisim-tercihi").val();
  var mesaj = $("#mesaj-kutusu").val();
  var kabul = $("#onay").prop("checked");

  if (!ad) {
    alert("Lütfen adınızı giriniz!");
    return false;
  }
  else if (!soyad){
    alert("Lütfen soyadınızı giriniz!");
    return false;
  }
  else if (!cinsiyet){
    alert("Lütfen cinsiyetinizi seçiniz!");
    return false;
  }
  else if (!yas){
    alert("Lütfen yaşınızı belirleyiniz!");
    return false;
  }
  else if (!iletisim){
    alert("Lütfen iletişim türünü seçiniz!");
    return false;
  }
  else if (!mesaj){
    alert("Lütfen mesajınızı yazın!");
    return false;
  }
  else if (!kabul){
    alert("Mesajınızı göndermek için onaylayın!!!");
    return false;
  }
}


$(document).ready(function() {
  // Temizleme butonuna tıklandığında formu temizle
  $("#clearButton").click(function(event) {
    event.preventDefault(); // Butona tıklamayı engelle
    
    // Formdaki değerleri sıfırla
    $("#myForm")[0].reset();
  });
});


