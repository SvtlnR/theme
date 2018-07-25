var postsShow=false;
jQuery(function($){
		$(".hdr").fadeIn('slow', function(){});
		$(".shgi").click(function(){
			$("#resform").hide('fast');
			$("#favsh").hide('fast');
			$("#cont").hide('fast');
			$("#offer").hide('fast');
			$("#posts").hide('fast');
			$("#geninf").show('fast');
		})
		$(".shfsh").click(function(){
			$("#resform").hide('fast');
			$("#geninf").hide('fast');
			$("#cont").hide('fast');
			$("#offer").hide('fast');
			$("#posts").hide('fast');
			$("#favsh").show('fast');
		})
		$(".shcont").click(function(){
			$("#resform").hide('fast');
			$("#geninf").hide('fast');
			$("#favsh").hide('fast');
			$("#offer").hide('fast');
			$("#posts").hide('fast');
			$("#cont").show('fast');	
		})
		$(".shposts").click(function(){
			$("#resform").hide('fast');
			$("#geninf").hide('fast');
			$("#favsh").hide('fast');
			$("#offer").hide('fast');
			$("#cont").hide('fast');
			$("#posts").show('fast');	
		})
		$(".shoff").click(function(){
			$("#resform").hide('fast');
			$("#geninf").hide('fast');
			$("#favsh").hide('fast');
			$("#cont").hide('fast');
			$("#posts").hide('fast');
			$("#offer").show('fast');	
			$("#inputoffer").show('fast');
		})
		$("#sandwich").click(function(){
			$("nav ul").toggle('fast');
		})
		$(".backToPosts").text("Back");
		$(".backToPosts").click(function(){
			location.href = "index.php";
			
		});
		$("footer").text(String.fromCharCode(0169)+ (new Date()).getFullYear());
		if(window.matchMedia("(max-width: 768px)").matches){
		$(window).on("orientationchange",function(){
	  		if(window.orientation != 0)
	  		{
	    		$("nav ul").css({'display':'inline-block'});
	  		}
	  		else{
	  			$("nav ul").css({'display':'none'});	
	  		}
		})
		}
		if(window.matchMedia("(min-width: 768px)").matches){
		$(window).on("orientationchange",function(){
	  		if(window.orientation != 0)
	  		{
	    		$("nav ul").css({'display':'inline-block'});
	  		}
	  		else{
	  			$("nav ul").css({'display':'inline-block'});	
	  		}
		})
		}
		
	});
