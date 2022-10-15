$(document).ready(function() {
  
$(".faq").click(function() {
   id = $(this).attr("id");
   if ($("#"+id+".answer").hasClass("hidden")) {
     $("#"+id+".answer").removeClass("hidden");
   } else {
    $("#"+id+".answer").addClass("hidden");
   }
});
  
$('.faq').keypress(function(event) {
  if ((event.keyCode == 13) || (event.keyCode == 32)) {
    $(this).click();
  }
});

});