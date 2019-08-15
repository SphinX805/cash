$(function() {
	$(".convertForm").submit(function(e) {
		var amount = $("input[name='amount']", $(this)).val(),
			primary = $("select[name='primary']", $(this)).val(),
			secondary = $("select[name='secondary']", $(this)).val();
		
		$(".convertResult").slideUp();
		
		if (amount.length == 0 || primary.length == 0 || secondary.length == 0) {
			return false;
		}
		
		var regex = /^[0-9]*\.?[0-9]*$/;
		if (!regex.test(amount) || parseFloat(amount) == 0.0) {
			$("input[name='amount']", $(this)).focus();
			return false;
		}
		
		$.get(
			$(this).attr("action"),
			{
				amount: amount,
				primary: primary,
				secondary: secondary
			},
			function(response) {
				$(".convertResult").html(response).slideDown();
			},
			"html"
		);
		
		return false;
	});
	
	$("input[name='amount']", $(".convertForm"))
		.mouseup(function() {
            if (this.value.length) {
                this.selectionStart = this.value.length;
                this.selectionEnd = this.value.length;
            }
        })
        .focus(function() {
            if (this.value.length) {
                var me = this;
                setTimeout(function() {
                    me.selectionStart = me.value.length;
                    me.selectionEnd = me.value.length;
                }, 1);
            }
        })
		.keydown(function(e) {
			if (e.keyCode == 13) {
				return true;
			}
			
			if (e.shiftKey/* && e.keyCode != 55*/) {
				e.preventDefault();
			}
            
			var keyCode = (e.shiftKey ? "shift_" : "") + e.keyCode;

			if ((e.ctrlKey || e.metaKey) && keyCode == "65") { //ctrl + a
				return true;
			}

			if ((e.ctrlKey || e.metaKey) && keyCode == "67") { //ctrl + c
				return true;
			}

			if ((e.ctrlKey || e.metaKey) && keyCode == "86") { //ctrl + v
				$(this).val("");
				setTimeout(function() {
					var amount = parseFloat($(this).val().replace(",", "."));
					$(this).val(amount);
				}, 1);
				return true;
			}

			if ((e.ctrlKey || e.metaKey) && keyCode == "88") { //ctrl + x
				return true;
			}
			
			if ((e.ctrlKey || e.metaKey) && $.inArray(keyCode, ["224", "17"]) > -1) {
				return true;
			}
			
			if (this.value.length) {
                this.selectionStart = this.value.length;
                this.selectionEnd = this.value.length;
            }

			var keyCodes = [
				"48", "49", "50", "51", "52", "53", "54", "55", "56", "57", //nums
				"96", "97", "98", "99", "100", "101", "102", "103", "104", "105", //nums
				"8", //backspace,
				"shift_55", "110", "190", //dot
				"46" //delete
			]; 

            if ($.inArray(keyCode, keyCodes) == -1) {
                e.preventDefault();
            }
            
            if (keyCode === "46") {
            	$(this).val("");
            	e.preventDefault();
            }
                
            var value = $(this).val();
            if (value === "" && $.inArray(keyCode, [/*"48", "96", */"shift_55", "110", "190"]) > -1) {
                $(this).val("0.");
                e.preventDefault();
            }

            if (value === "0" && $.inArray(keyCode, ["8", "shift_55", "110", "190"]) == -1) {
                e.preventDefault();
            }
            
            if ($.inArray(keyCode, ["shift_55", "110", "190"]) > -1 && value.indexOf(".") > -1) {
            	e.preventDefault();
            }
                
            if (this.selectionStart != value.length) {
                e.preventDefault();
            }
            
            $("input[name='amount']").val($(this).val());
        })
        .change(function() {
            $("input[name='amount']").val($(this).val());
        })
    ;
	
	$(".showCalcButton").click(function() {
		$(".calcKeypad").slideToggle();
	});
	
	$(".numButton").click(function() {
		var $amount = $("input[name='amount']");
		
		if ($amount.val() === "" && $(this).data("value") == ".") {
			$amount.val("0.");
			return false;
		}
		
		if ($amount.val() === "0" && $(this).data("value") !== ".") {
			return false;
		}
		
		if ($(this).data("value") == "." && $amount.val().indexOf(".") > -1) {
			return false;
		}
		
		$amount.val($amount.val() + $(this).data("value"));
		return false;
	});
	
	$(".delButton").click(function() {
		var value = $("input[name='amount']:first").val();
		if (value.length > 0) {
			$("input[name='amount']").val("");
		}
		return false;
	});
	
	$("body").on("click", ".showRateDetail", function() {
		$(this).next().slideToggle();
		return false;
	});
	
	$("#contactForm").submit(function(){
		$('.errors', $(this)).slideUp().html('');
		
		var errors = [];
		
		var $email = $('input[name="email"]', $(this)),
			re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		
		if ($email.val() == '') {
			errors.push($email.data('error_empty'));
		}
		else if (!re.test($email.val())) {
			errors.push($email.data('error_not_valid'));
		}
		
		var $message = $('textarea[name="message"]', $(this));
		if ($message.val() == '') {
			errors.push($message.data('error_empty'));
		}
		
		if (errors.length) {
			$('.errors', $(this)).html(errors.join('<br>')).slideDown();
			return false;
		}
		
		$('input[name="hash"]', $(this)).attr('disabled', 'disabled');
		
		return true;
	});
	
	$("#getApiAccessForm").submit(function(){
		$('.errors', $(this)).slideUp().html('');
		
		var errors = [];
		
		var $name = $('input[name="name"]', $(this)),
			$email = $('input[name="email"]', $(this)),
			re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		
		
		if ($name.val() == '') {
			errors.push($name.data('error_empty'));
		}
		
		if ($email.val() == '') {
			errors.push($email.data('error_empty'));
		}
		else if (!re.test($email.val())) {
			errors.push($email.data('error_not_valid'));
		}
		
		if (errors.length) {
			$('.errors', $(this)).html(errors.join('<br>')).slideDown();
			return false;
		}
		
		$('input[name="hash"]', $(this)).attr('disabled', 'disabled');
		
		return true;
	});
	
	$(".liverate").each(function() {
		var $this = $(this);
		
		if ($this.data("primary") && $this.data("secondary") && $this.data("amount")) {
			var content = getRates($this.data("primary"), $this.data("secondary"), $this.data("amount"));
			$('.liverate-body', $this).html(content);

			setInterval(function() {
				var content = getRates($this.data("primary"), $this.data("secondary"), $this.data("amount"));
				$('.liverate-body', $this).html(content);
			}, 30000);
		}
	});
	
	$('.pairRow').click(function() {
		window.location.href = $(this).data('url');
		return false;
	});
	
	$('.ratesScroller').change(function() {
		window.location.hash = $(this).val();
	});
	
	$('.swapLink').click(function() {
		var primary = $("select[name='primary']").val(),
			secondary = $("select[name='secondary']").val();
			
		$("select[name='primary']").val(secondary).change();
		$("select[name='secondary']").val(primary).change();

		return false;
	});
	
	$('.modal form').submit(function() {
		$('.modalFormSubmitButton', $(this)).click();
		return false;
	});
	
	$('.cryptonatorAlerts').on('close.bs.alert', function () {
		$.post('/account/alertClose/', {id: $(this).data('id')}, function(response) {}, 'json');
	});
	
	$('.signForm').submit(function() {
		var $this = $(this);
		
		$('[name="hash"]', $this).prop('disabled', true);
		$('[name="login"]', $this).prop('readonly', true);
		$('[name="code"]', $this).prop('readonly', true);
		$('[name="rememberme"]', $this).prop('readonly', true);
		$('[name="fa_login_code"]', $this).prop('readonly', true);
		
		var $submit = $('[type="submit"]', $this);
		$submit
			.prop('disabled', true)
			.html($submit.data('processing'));
	});
	
	$('#accountTabs li').click(function() {
		$('#accountTabs li.active').removeClass('active');
		$(this).addClass('active');
		
		var $tabContent = $('#tabContent');
		$('.tab-pane', $tabContent).css('opacity', 0.1);
		$tabContent
			.append('<div class="tabContentLoader">' + ($tabContent.data('preloader') ? $tabContent.data('preloader') : 'Loading, please wait...') + '</div>');
	});
});
	
getRates = function(primary, secondary, amount) {
	var result = "";
	$.ajax({
        url: "/rates/convert/",
        type: "get",
        data: {
			amount: amount,
			primary: primary,
			secondary: secondary,
			source: 'liverates',
        },
        dataType: "html",
        async: false,
        success: function(response) {
            result = response;
        }
    });
    return result;
};