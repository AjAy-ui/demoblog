

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
                contact_name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                subject: {
                    required: true,
                    minlength: 4
                },
                message: {
                    required: true,
                    minlength: 2
                },
                mobile: {
                    required: true,
                    minlength: 10
                }
            },
            messages: {
                contact_name: {
                    required: "Please enter your name",
                    minlength: "Please enter a valide name"
                },
                email: {
                    required: "no email, no message"
                },
                subject: {
                    required: "come on, you have a subject, don't you?",
                    minlength: "your subject must consist of at least 4 characters"
                },
                message: {
                    required: "um...yea, you have to write something to send this form."
                },
                mobile: {
                    required: "this is a mobile number?"
                }
            }, 
            
            submitHandler: function(form) {

              // $('#preloader-active').fadeIn('slow');
              var contact_name = $("#contact_name").val(); 
              var email = $("#email").val(); 
              var subject = $("#subject").val(); 
              var message = $("#message").val(); 
              var _wpnonce = $("#woocommerce-contact-nonce").val();
              var _wp_http_referer= $("input[name=_wp_http_referer").val();


                  $.ajax({
                    url: base_url+'ajax',
                    type:"POST",
                    data:{
                      action:'contact',
                      contact_name:contact_name,
                      email :email,
                      subject:subject,
                      message:message,
                      _wpnonce:_wpnonce,
                      _wp_http_referer:_wp_http_referer,

                    },
                    // console.log(data);
                    success: function() {
                        $("#contactForm")[0].reset();
                        $("#toast").text("Thanks for contact us.").addClass('show');
                        setTimeout(function(){ $('#toast').removeClass('show').text(''); }, 5000);
                        // $('#contactForm :input').attr('disabled', 'disabled');
                        // $('#preloader-active').fadeOut('slow');
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $(this).find('label').css('cursor','default','color', 'red');
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


$(document).ready(function(){


    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate subscribeForm form
    $(function() { 
      
        $('#subscribeForm').validate({
            rules: {
                sub_email: {
                    required: true
                }
            },
            messages: {
                sub_email: {
                    required: "Please enter Email"
                }
            }, 
            submitHandler: function(form) {
 
              // $('#preloader-active').fadeIn('slow');
              var sub_email= $("#sub_email").val();  
              var _wpnonce= $("#woocommerce-contact-nonce").val(); 
              var _wp_http_referer= $("input[name=_wp_http_referer").val();

                  $.ajax({
                    url: base_url+'ajax',
                    type:"POST",
                    data:{
                      action:'subscribe',
                      sub_email :sub_email,
                      _wpnonce:_wpnonce,
                      _wp_http_referer:_wp_http_referer,
                    },
                    success: function() {
                        $("#subscribeForm")[0].reset();
                        $("#toast").text("Thanks for subscribing us. You will get all the updates.").addClass('show');
                        setTimeout(function(){ $('#toast').removeClass('show').text(''); }, 5000);
                        // $('#preloader-active').fadeOut('slow');
                        // $('#subscribeForm :input').val('').attr('disabled', 'disabled');
                    },
                    error: function() {
                        $('#subscribeForm').fadeTo( "slow", 1, function() {
                            $('#error').fadeIn()
                            $('.modal').modal('hide');
                            $('#error').modal('show');
                        });
                    }
                })
            }
        })
    })
        
 })(jQuery)

})

$(document).ready(function(){
(function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate volunteerForm form
    $(function() { 
      
        $('#volunteerForm').validate({
            rules: {
                volunteer_name: {
                    required: true,
                    minlength: 2
                },
                 dob: {
                    required: true
                },
                hus_name: {
                    required: true,
                    minlength: 2
                },
                address: {
                    required: true,
                    minlength: 2
                },
                aadhar: {
                    required: true,
                    minlength: 2
                },
                edu_qualification: {
                    required: true,
                    minlength: 2
                },
                contact_num: {
                    required: true,
                    minlength: 2
                },
                job: {
                    required: true,
                    minlength: 2
                }
            },
            messages: {
                volunteer_name: {
                    required: "come on, you have a name, don't you?",
                    minlength: "your name must consist of at least 2 characters"
                },
                dob: {
                    required: "please enter date of birth"
                },
                hus_name: {
                    required: "please enter Fathers/Husband name",
                    minlength: "your name must consist of at least 2 characters"
                },
                address: {
                    required: "please enter valid address",
                    minlength: "your name must consist of at least 2 characters"
                },
                aadhar: {
                    required: "please enter aadhar number",
                    minlength: "your name must consist of at least 2 characters"
                },
                edu_qualification: {
                    required: "please enter qualification",
                    minlength: "your name must consist of at least 2 characters"
                },
                contact_num: {
                    required: "please enter contact number",
                    minlength: "your name must consist of at least 2 characters"
                },
                job: {
                    required: "please fill the field",
                    minlength: "your name must consist of at least 2 characters"
                }
            }, 
            submitHandler: function(form) {
              // $('#preloader-active').fadeIn('slow');
              var volunteer_name= $("#volunteer_name").val();
              var dob= $("#dob").val();
              var hus_name= $("#hus_name").val();
              var address= $("#address").val();
              var aadhar= $("#aadhar").val();
              var edu_qualification= $("#edu_qualification").val();
              var contact_num= $("#contact_num").val();
              var job= $("#job").val();
              var _wpnonce= $("#woocommerce-contact-nonce").val(); 
              var _wp_http_referer= $("input[name=_wp_http_referer").val();

                  $.ajax({
                    url: base_url+'ajax',
                    type:"POST",
                    data:{
                      action:'volunteer',
                      volunteer_name :volunteer_name,
                      dob :dob,
                      hus_name :hus_name,
                      address :address,
                      aadhar :aadhar,
                      edu_qualification :edu_qualification,
                      contact_num :contact_num,
                      job :job,
                      _wpnonce:_wpnonce,
                      _wp_http_referer:_wp_http_referer,
                    },
                    success: function() {
                        $("#volunteerForm")[0].reset();
                        $("#toast").text("Congratulations, you have successfully become a volunteer of SSS trust. Soon you will receive a call from our trust.").addClass('show');
                        setTimeout(function(){ $('#toast').removeClass('show').text(''); }, 5000);
                        // $('#preloader-active').fadeOut('slow');
                        // $('#volunteerForm :input').attr('disabled', 'disabled');
                    },
                    error: function() {
                        $('#volunteerForm').fadeTo( "slow", 1, function() {
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





