$(function(){
    $("#div1").addClass("active");

    $(".info-opcao .nav a").on("click", function( e ){         
      e.preventDefault();
      
    	$("div").removeClass("active");
        var id = $(this).attr("href"); 
        $("#"+id+"").addClass("active");
    });
});
