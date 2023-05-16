function validateEmail() {
    var email = document.getElementById("kullanici-adi").value;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    if (!emailRegex.test(email)) {
        alert("Lütfen geçerli bir e-posta adresi girin."); 
    }
  }

  setTimeout(function() {
    var myDiv = document.getElementById("myDiv");
    if (myDiv) {
      myDiv.style.display = "none";
    }
  }, 5000);