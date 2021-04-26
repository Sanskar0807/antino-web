jQuery(document).ready(function (e) {
	"use strict";
	e(function () {
       
	
		e("#careers").validate({
           
			rules: {
				first_name: {
					required: !0,
					minlength: 2
				},
				last_name: {
					required: !0,
					minlength: 2
				},
				post_applied: {
					required: !0,
					
				},
				email: {
					required: !0,
                    email: !0
				},
				contact_no: {
					required: !0
				},
                experience: {
					required: !0,
					
				},
				current_ctc: {
					required: !0,
					
				},
				expected_ctc: {
					required: !0,
					
				},
				notice_period: {
					required: !0
				},
				
                resume: {
					required: !0
				}

			},
			messages: {
				first_ame: {
					required: "Please type your  first name",
				},
				last_name: {
					required: "Please type your last name",
				},
				post_applied: {
					required: "Please select a post",
					
				},
				email: {
					required: "Please type your email correctly",
				},
				contact_no: {
					required: "Please type your contact number",
				},
                experience: {
					required: "Please select your experience",
				},
				current_ctc: {
					required: "Please enter your CTC ",
				},
				expected_ctc: {
					required: "Please enter your expected CTC",
					
				},
				notice_period: {
					required: "Please type your notice period",
				},
				
                resume: {
					required: "Please upload your resume",
				}
			},
			submitHandler: function (r) {
				e(r).ajaxSubmit({
					type: "POST",
					data: e(r).serialize(),
					url: "applyPost.php",
					success: function () {
						e("#careers :input").attr("disabled", "disabled"), e("#careers").fadeTo("slow", .15, function () {
							e(this).find(":input").attr("disabled", "disabled"), e(this).find("label").css("cursor", "default"), e("#success").fadeIn()
						})
					},
					error: function () {
						e("#careers").fadeTo("slow", 1, function () {
							e("#error").fadeIn()
						})
					}
				})
			}
		})
	})
});