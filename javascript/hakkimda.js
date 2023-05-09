$(document).ready(function(){
    $(".content .option_content").hide();
    $(".content .option_content:first-child").show();

     $(".option_wrap").click(function(){
      var current_id = $(this).attr("id");
      $(".content .option_content").hide();
      $("."+current_id).show();
    })
});

let options = document.querySelectorAll('.option_wrap');

options.forEach(function(option,index) {
  if (index === 0) {
    option.classList.add('selected');
  }
  option.addEventListener('click', function() {
    options.forEach(function(otherOption) {
      otherOption.classList.remove('selected');
    });
    option.classList.add('selected');
  });
});

