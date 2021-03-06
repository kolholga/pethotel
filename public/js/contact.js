$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                subject: {
                    required: true,
                    minlength: 4
                },
                number: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: "Давайте, у вас же есть имя, не так ли?",
                    minlength: "Ваше имя должно состоять не менее чем из 2 символов"
                },
                subject: {
                    required: "Давайте, у вас же есть тема, не так ли?",
                    minlength: "Ваша тема должна состоять как минимум из 4 символов"
                },
                number: {
                    required: "Давай, у тебя есть номер, не так ли?",
                    minlength: "Ваш номер должен состоять не менее чем из 9 символов"
                },
                email: {
                    required: "нет почты - нет сообщения"
                },
                message: {
                    required: "Ммм... да, вы должны написать что-нибудь, чтобы отправить эту форму.",
                    minlength: "Это все? В самом деле?"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"contact_process.php",
                    success: function() {
                        $('#contactForm :input').attr('disabled', 'disabled');
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#success').fadeIn()
                            $('.modal').modal('hide');
		                	$('#success').modal('show');
                        })
                    },
                    error: function() {
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $('#error').fadeIn()
                            $('.modal').modal('hide');
		                	$('#error').modal('show');
                        })
                    }
                })
            }
        })
    })
        
 })(jQuery)
})