(function($) {
    $.fn.formToWizard = function(options) {
        options = $.extend({  
            submitButton: ''  
        }, options); 
        
        var element = this;

        var steps = $(element).find("fieldset");
        var count = steps.size();
        var submmitButtonName = "#" + options.submitButton;
        $(submmitButtonName).hide();

  
        $(element).before("<div class='window-slog' id='step-desc-top'></div>");
		
		
        steps.each(function(i) {
            $(this).wrap("<div id='step" + i + "'></div>");
            $(this).append("<p id='step" + i + "commands'></p>");

            var name = $(this).find("legend").html();
            //$("#steps").append("<li class='missing' id='stepDesc" + i + "'><span>" + name + "</span><span class='border'></span></li>");
			$("#steps").append("<li class='missing' id='stepDesc" + i + "'><span></span></li>");
			$("#step-desc-top").append("<span id='span" + i + "'>" + name + "</span>");

            if (i == 0) {
                createNextButton(i);
                selectStep(i);
            }
            else if (i == count - 1) {
                $("#step" + i).hide();
				$("#span" + i).hide();
                //createPrevButton(i);
            }
            else {
                $("#step" + i).hide();
				$("#span" + i).hide();
                //createPrevButton(i);
                createNextButton(i);
            }
        });
	

        /*function createPrevButton(i) {
            var stepName = "step" + i;
            $("#" + stepName + "commands").append("<a href='#' id='" + stepName + "Prev' class='bigbutton bigbutton-left'>< Back</a>");

            $("#" + stepName + "Prev").bind("click", function(e) {
                $("#" + stepName).hide();
                $("#step" + (i - 1)).show();
				$("#span" + i).hide();
		
                $(submmitButtonName).hide();
                selectStep(i - 1);
            });
        }*/

        function createNextButton(i) {
            var stepName = "step" + i;
            $("#" + stepName + "commands").append("<a href='#' id='" + stepName + "Next' class='bigbuttonl'>Next</a>");

            $("#" + stepName + "Next").bind("click", function(e) {
                $("#" + stepName).hide();
                $("#step" + (i + 1)).show();
				$("#span" + i).hide();
		
                if (i + 2 == count)
                    $(submmitButtonName).show();
                selectStep(i + 1);
            });
        }

        function selectStep(i) {
            $("#steps li").removeClass("current");
			$(".bone").hide();
			$("#stepDesc" + (i + 1)).removeClass("visited"); $("#stepDesc" + (i + 1)).addClass("missing"); 
			$("#stepDesc" + (i - 1)).removeClass("missing"); $("#stepDesc" + (i - 1)).addClass("visited");
	
			$("#stepDesc" + i).removeClass("visited");
			$("#stepDesc" + i).removeClass("missing");
            $("#stepDesc" + i).addClass("current");
			
			if(i == 2) {$('.steps-pol img').attr('src', 'img/STAP-7.png');	}
			if(i == 4) {$('.steps-pol img').attr('src', 'img/STAP-8.png');	}
			if(i == 8) {$('.steps-pol img').attr('src', 'img/STAP-5.png');	}
				
			$("#span" + i).show();
			$("#stepDesc" + i).append("<img class='bone' src='img/bone2.png' />");
        }

    }
})(jQuery); 