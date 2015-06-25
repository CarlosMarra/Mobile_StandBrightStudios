$(document).ready(function() {
	var complete = screen.width;
	
	if (complete < 1024) {
		window.location.href="http://m.standbrightstudios.com";
	}
	
	$.validator.addMethod("phones", function(phone_number, element) {
	phone_number = phone_number.replace(/\(|\)|\s+|-/g, "");
	return this.optional(element) || phone_number.length > 9 &&
		(phone_number.match(/^(?:(?:(?:00\s?|\+)44\s?|0)(?:1\d{8,9}|[23]\d{9}|7(?:[1345789]\d{8}|624\d{6})))$/)||
		 phone_number.match(/^(?:(?:(?:00\s?|\+)44\s?)|(?:\(?0))(?:\d{2}\)?\s?\d{4}\s?\d{4}|\d{3}\)?\s?\d{3}\s?\d{3,4}|\d{4}\)?\s?(?:\d{5}|\d{3}\s?\d{3})|\d{5}\)?\s?\d{4,5})$/)||
		 phone_number.match(/^(?:(?:(?:00\s?|\+)44\s?|0)7(?:[1345789]\d{2}|624)\s?\d{3}\s?\d{3})$/)||
		 phone_number.match(/^(\+?1-?)?(\([2-9]([02-9]\d|1[02-9])\)|[2-9]([02-9]\d|1[02-9]))-?[2-9]([02-9]\d|1[02-9])-?\d{4}$/)
		 );
	}, "Please specify a valid phone number");
	
	$.validator.addMethod("currency", function(value, element, param) {
	    var isParamString = typeof param === "string",
		symbol = isParamString ? param : param[0],
		soft = isParamString ? true : param[1],
		regex;
	
	    symbol = symbol.replace(/,/g, "");
	    symbol = soft ? symbol + "]" : symbol + "]?";
	    regex = "^[" + symbol + "([1-9]{1}[0-9]{0,2}(\\,[0-9]{3})*(\\.[0-9]{0,2})?|[1-9]{1}[0-9]{0,}(\\.[0-9]{0,2})?|0(\\.[0-9]{0,2})?|(\\.[0-9]{1,2})?)$";
	    regex = new RegExp(regex);
	    return this.optional(element) || regex.test(value);
	
	}, "Please specify a valid currency");

	$('.fancybox').fancybox();
	
	$("#form1").validate({
			rules:{
				animation_style:{
					required: true
				},
				realism:{
					required: true
				},
				choice:{
					required: true
				},
				company_first:{
					required: true,
					minlength: 2
				},
				company_last:{
					required: true,
					minlength: 2
				},
				company_name:{
					required: true,
					minlength: 2
				},
				company_number:{
					required: true,
					phones: true
				},
				company_email:{
					required: true,
					email: true
				},
				company_budget:{
					required: true,
					currency: ["$", false]
				},
				company_details:{
					required: true
				},
				company_know:{
					required: true,
					minlength: 5
				}
			},
			messages:{
				company_first: "Enter your first name",
				company_last: "Enter your last name",
				company_name: "Enter Comany Name",				
				company_number: "Valid # Required",
				company_email: "Valid Email Required",
				company_budget: "Valid Budget Required",
				company_details: "Some details required. Please fill this out as much as possible.",
				company_know: "Please tell us how you know about us."
			},	
			errorPlacement: function(error, element) {
			    if ((element.attr("type") == "radio")&&(element.attr("name") == "animation_style")) {
				error.insertBefore('#shhh1');
			    }
			    if ((element.attr("type") == "radio")&&(element.attr("name") == "realism")) {
				error.insertBefore('#shhh2');
			    }
			    if ((element.attr("type") == "radio")&&(element.attr("name") == "choice")) {
				error.insertBefore('#shhh3');
			    }
			    else {
				element.attr("placeholder",error.text());
			    }
			},
	});
	
	$("#form2").validate({
			rules:{
				mail:{
					required: true,
					email: true
				},
			},
			messages:{
				mail: "Valid Email Required",
			},			
			errorPlacement: function(error, element) {	
				element.attr("placeholder",error.text());
			},
	});
		
        $('#form1').ajaxForm(function() { 
		$('.ontheradio').attr('checked', false);
		$('.text2').val("");
		alert("Thank you for contacting us. Have a great day!");
        });

        $('#form2').ajaxForm(function() { 
		$('#mail').val("");
		alert("Thank you for subscribing. Have a nice day!");
        }); 	
});


$('section[data-type="background"]').each(function() {
	var $bgobj = $(this); // assigning the object
	$(window).scroll(function() {
		var yPos = -($(window).scrollTop() / $bgobj.data('speed'));
		// Put together our final background position
		var coords = '50% ' + yPos + 'px';
		// Move the background
		$bgobj.css({
			backgroundPosition: coords
		});
	});
});


setInterval(function () {
	var m_width = screen.width;
	var c_width = window.innerWidth;
	if (m_width > c_width) {
		$("html").css("overflow-x", "scroll");
	}
	if (m_width == c_width) {
		$("html").css("overflow-x", "hidden");
	}
}, 1);