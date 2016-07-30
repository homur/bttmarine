$(function(){

	//MOBILE MENU OPEN CLOSE
	$("#header-mobile-menu-button, #mobile-menu-close-button").on("click", function(){
		$("section.mobile-menu").slideToggle("slow");
		$("#mobile-menu-close-button i").toggleClass("rubberBand");
	});	


	//ELEVATE ZOOM
	$(".zoomImage").on("mouseover", function(){
		var linkaddr;
		linkaddr = $(this).attr("src");
		$(this).attr("data-zoom-image", linkaddr);
		$(this).elevateZoom({
			zoomType: "inner",
  			cursor: "crosshair",
			zoomWindowWidth:100,
            zoomWindowHeight:100
		});
	});


	var address1 = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5024.419172964107!2d28.989937675008903!3d41.06132871419361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x681b5ce3088d9d6b!2zxZ5pxZ9saSBDYW1p!5e0!3m2!1str!2str!4v1466699302094";
	var address2 = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5024.419172964107!2d28.989937675008903!3d41.06132871419361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x681b5ce3088d9d6b!2zxZ5pxZ9saSBDYW1p!5e0!3m2!1str!2str!4v1466699302094";
	$("#mapFrame").attr({
		"src" : address1
	});
	$("select#mapSelector").change(function(){
		console.log($("#mapSelector option:selected").val());
		if ($("#mapSelector option:selected").val() === "1" ){
			$("#mapFrame").attr({
				"src" : address1
			});	
		}
		else{
			$("#mapFrame").attr({
				"src" : address2
			});	
		}
		
	})
//	
	$('#add-more-image').on('click', function(){
		$('<input name="file[]" type="file" id="file">').appendTo('#image-add-area');
	});
});



