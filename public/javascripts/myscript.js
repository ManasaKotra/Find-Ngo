$(function (){

    $("#dropdown-menu2").on('click', 'li a', function(){
      $(".btn-locality:first-child").text($(this).text());
      $(".btn-locality:first-child").val($(this).text());
   });
    
});

	// $("#dropdown-menu2 li a").click(function(){
 //  		var selText = $(this).text();
 //  		console.log(selText);
	// });

$(".infoabout i").css({opacity:5});

$('#registerbtn').on('click' , function() { 
  $.modal.close();
});