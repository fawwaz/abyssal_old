// JavaScript Document
$(window).load(function() {
	$(".splash1").hide().fadeIn(1000).animate({opacity:'0'},4000);
	$(".splash2").hide().fadeIn(2000).animate({opacity:'0'},2000);
	$(".splash3").hide().fadeIn(4000).animate({opacity:'0',top:'-=40'},4000, function(){ 
		window.location.href = "home";});		
});   
// Toggle Collection Div
$(document).ready(function(){
	$("#collection").hide();
	//$("#inner-panel").hide();
  	$("#collection-toggle").toggle(function(){
  		//alert('asucok')
  		$(this).toggleClass("button-bot-hover");
  		$("#collection").fadeIn(1000);
  		
  	}, function(){
  		$(this).toggleClass("button-bot-hover");
  		$("#collection").fadeOut(1000);
  		//$('#collection',"#inner-panel").fadeOut(600);
  	});
	
	/*if ($('#collection').css('height') == '0px')
	{	
		$('#collection').animate({top:'-80%',height:'80%'},100);
		$("#inner-panel").fadeIn(100);
	}
	else
	{
		$('#collection').animate({top:'0%',height:'0%'},100);			
		$("#inner-panel").fadeOut(120);
	}*/
  
// animasi Featured Product di halaman home
   $('.viewport').hover(function() { 
			$(this).children('a').children('img').animate({ height: '380', left: '0', top: '0', width: '242' }, 100);
        	$(this).children('a').children('span').fadeIn(500); }, 
		function() { 
			$(this).children('a').children('img').animate({ height: '420', left: '-20', top: '-20', width: '264'}, 100);
        	$(this).children('a').children('span').fadeOut(500);});
	});
