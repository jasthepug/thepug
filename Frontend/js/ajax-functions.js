$( document ).ready(function() {
		var ch = $("#container").height();
		$(".footer").css({ "top": ch });
		var url = window.location.pathname;
		url = url.split("/");
		switch(url[2]) {
		 case "details":
							$(".footer").css({ "top": ch });
							$(".polaroid").delay(500).animate({"left":"5%"},500);
							$(".tag").animate({"top":0},500);
							$(".background").fadeIn(1000);
							$(".window").animate({"opacity":1, "marginRight":"10%"}, 500);
		  break;
		 case "end-first-form":
							//$(".window").css("height",winhg);
							$(".small-form").animate({"opacity":1}, 500);
							$(".window-slog").animate({"opacity":1}, 500);
		  break;
		 case "tables":
							$(".table-comp-slogan").animate({"opacity":1},500);
							$(".footer").css({ "top": ch });
		  					$(".tag").animate({"top":0},500);
							$('.table-comp').each(function(i) {
							$(this).delay((i++) * 500).animate({"opacity":1}); })
							$(".submit-details").delay(2000).animate({"opacity":1},500);
		  break;
		 case "quick-signup":
		  					$(".footer").css({ "top": ch });
							$(".tag").animate({"top":0},500);
							$(".polaroid").css({ "right": "-30%", "top": "100px", "left": "auto"}).delay(500).animate({"right":"5%"},500);
							$("#pug-coffee").stop().animate({"opacity":1, "marginRight":"10%"}, 500)
  							$(".window-coffee").stop().animate({"opacity":1}, 500);
  							$(".coffee-main").stop().animate({"opacity":1,"marginLeft":"9.4%"}, 500);
		  break;
		 case ("questions" || "questions#"):
		 					ch = "100%";
		  					$(".steps-pol").animate({"top":0},500);
							$(".footer").css({ "top": ch });
							$("#wizard").formToWizard({ submitButton: 'SubmitForm' });
							$(".window").animate({"opacity":1,"marginTop":"230px"}, 500);
							
		  break;
		 case ("the-pug-thanks"):
		  					$(".footer").css({ "top": ch });
							$(".background").fadeIn(2000);
							$(".final-main").delay(2000).animate({"opacity":1, "marginLeft":"9.4%"}, 1500);
		  break;
		 default:
		 break;
		}   


$(document).on('click', "a.mainajax", function(e) {
		event.preventDefault();
		href = $(this).attr("href");
		var vh = $(".footer").position().top;
		$(".footer").css({ "top": vh });
		history.pushState('', 'New URL: '+href, href);
		$("#cbp-qtrotator, #pug").animate({"opacity":0});
		$("header").animate({"marginTop":-140, "marginBottom":140}, 500, function() {
				$( "body" ).load( href +" .tag, #container, .background, .polaroid, .footer", function() {
  						$(".footer").css({ "top": ch });
						$(".polaroid").delay(500).animate({"left":"5%"},500);
						$(".tag").animate({"top":0},500);
  						$(".background").fadeIn(1000);
  						$(".window").animate({"opacity":1, "marginRight":"10%"}, 500);
				});
		});	
});
	
$(document).on('submit', "#firstformid", function(e) {
	e.preventDefault(); //STOP default action
	var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
    $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        success:function() {
			href = "end-first-form";
			history.pushState('', 'New URL: '+href, href);
			var winhg = $(".window").height();
			$(".window-slog").animate({"opacity":0}, 500);
			$("#formcontent").animate({"opacity":0}, 500, function() {
					$( ".window" ).load( href + " #formcontent", function() {
					$(".window").css("height",winhg);
					$(".small-form").animate({"opacity":1}, 500);
					$(".window-slog").animate({"opacity":1}, 500);
					});
			});
		}
    });
});

$(document).on('submit', "#secformid", function(e) {
	e.preventDefault(); //STOP default action
	var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
	
    $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        success:function() {
			href = "tables";
			history.pushState('', 'New URL: '+href, href);
			$(".window-slog").fadeOut(500);
			$(".polaroid").animate({"left":"-30%"},500);
			$(".window").animate({"opacity":0}, 500, function() {
					$( "body" ).load( href +" #container, .background, .tag, .footer", function() {
							$(".table-comp-slogan").animate({"opacity":1},500);
							$(".footer").css({ "top": ch });
		  					$(".tag").animate({"top":0},500);
							$('.table-comp').each(function(i) {
							$(this).delay((i++) * 500).animate({"opacity":1}); })
							$(".submit-details").delay(2000).animate({"opacity":1},500);
					});
			});
		}
    });
	
});

$(document).on('click', ".applyanon", function(e) {
		e.preventDefault();
		href = $(this).attr("href");
		history.pushState('', 'New URL: '+href, href);
		$(".table-comp").animate({"opacity":0}, 500);
		$(".table-comp-slogan, .submit-details").animate({"opacity":0}, 500, function() {
				$("body").load( href +" #container, .background, .polaroid, .tag, .footer", function() {
		  				$(".footer").css({ "top": ch });
						$(".tag").animate({"top":0},500);
						$(".polaroid").css({ "right": "-30%", "top": "100px", "left": "auto"}).delay(500).animate({"right":"5%"},500);
						$("#pug-coffee").stop().animate({"opacity":1, "marginRight":"10%"}, 500)
  						$(".window-coffee").stop().animate({"opacity":1}, 500);
  						$(".coffee-main").stop().animate({"opacity":1,"marginLeft":"9.4%"}, 500);
				});
		});

	
});

$(document).on('submit', "#userform", function(e) {
	e.preventDefault(); //STOP default action
	var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
    $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        success:function() {
			href = "questions";
			history.pushState('', 'New URL: '+href, href);
			$(".coffee-main").animate({"opacity":0}, 500);
			$(".polaroid").animate({"right":"-30%"}, 500, function() {
					$("body").load( href +" #container, .background, .steps-pol, .tag, .footer", function() {
					$(".steps-pol").animate({"top":0},500);
					$(".footer").css({ "top": ch });
					$("#wizard").formToWizard({ submitButton: 'SubmitForm' });
					$(".window").animate({"opacity":1,"marginTop":"230px"}, 500);
					});
			});
		}
    });
	
});

$(document).on('submit', "#wizard", function(e) {
	e.preventDefault(); //STOP default action
	var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
    $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        success:function() {
			href = "the-pug-thanks";
			history.pushState('', 'New URL: '+href, href);
			$(".window.det.autolheight").animate({"opacity":0}, 500);
			$(".steps-pol").animate({"top":-200},500);
			$(".background").fadeOut(500, function() {
					$("body").load( href +" #container, .background, .tag, .footer", function() {
					$(".footer").css({ "top": ch });
					$(".background").delay(1000).fadeIn(2000);
					$(".final-main").delay(3000).animate({"opacity":1, "marginLeft":"9.4%"}, 1500);
					});
			});
		}
    });
	
});

window.onload = function() {
	setTimeout(function() {
		// preload image
		new Image().src = "http://thepug.com.au/Frontend/img/texture.jpg";
		new Image().src = "http://thepug.com.au/Frontend/img/finalpug.jpg";
		new Image().src = "http://thepug.com.au/Frontend/img/pol-home.png";
		new Image().src = "http://thepug.com.au/Frontend/img/pug-coff.png";
		new Image().src = "http://thepug.com.au/Frontend/img/finalpug.jpg";
		new Image().src = "http://thepug.com.au/Frontend/img/STAP-5.png";
		new Image().src = "http://thepug.com.au/Frontend/img/STAP-6.png";
		new Image().src = "http://thepug.com.au/Frontend/img/STAP-7.png";
		new Image().src = "http://thepug.com.au/Frontend/img/STAP-8.png";

	}, 1000);
};

});
