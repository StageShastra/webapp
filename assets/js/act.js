$(document).ready(function(){

	var url = "/Castiko/actor/ajax",
		base = "/Castiko/",
		type = "POST",
		data = {};

	//$("#warningmsg").hide();
	$("#resendConfirmationModal").modal("hide");
	
	
	function removeDefaultCookies(){
		Cookies.remove("newInvite");
		Cookies.remove("project_ref");
		Cookies.remove("director_ref");
	}
	removeDefaultCookies();

	$(document).on("click", ".toggleEdit", function(){
		var unhide = $(this).attr("data-unhide-id");
		var hide = $(this).attr("data-hide-id");
		$(unhide).removeClass("hidden");
		$(hide).addClass("hidden");

		//console.log(hide, unhide);

	});
	//populate_photos();
	$(document).on("click", ".updateDataField", function(){

		var that = this;
		var str = '';
		var names = $(this).attr("data-input-names").split(",");
		var request = $(this).attr("data-request");
		var unhide = $(this).attr("data-unhide-id");
		var hide = $(this).attr("data-hide-id");
		var form = {};
		$.each( names, function(index, value){
			name = $.trim(value);
			form[name] = $('[name="'+name+'"]').val();
		});

		data = {request: request, data: JSON.stringify(form)};

		//console.log(data);

		$.ajax({
			url: url,
			type: type,
			data: data,
			success: function(response){
				if(response.status){
					
					if(request == 'EditLanguage' || request == 'EditSkills'){
						var html = '';
						$.each( form, function(index, value){
							if(index == "language" || index == "skills"){
								$.each( value.split(","), function(index, value){
									console.log(data);
									console.log(value);
									name = $.trim(value);
									name = name.toProperCase();
									html +='<div class="col-sm-4 vertical-padded ellipsis">'
	                                    	+'<button type="button" class="btn skills_tag" style="max-width:auto;"aria-label="Left Align" >'
	                                        	+'<font class="taga-text">'+name+'</font>'
	                                    	+'</button>'
	                                		+'</div> ';
								});
							}
						});
						$(unhide).html(html);
					}else if( request == 'EditUsername' ){
						url = "http://castiko.com/" + form['username'];
						$("#actor_username_txt").html(url);
						$("#actor_username_txt").attr("href", url);
					}else{
						$.each( form, function(index, value){
							if(index == "sex")
								if(value == "M")
									value = "Male";
								else
									value = "Female";
							$("#actor_" + index).html(value);
						});
					}

					if(response.message.match(/changed your mobile number/)){
						$(".otpLink").remove();
						txt = "Your mobile number is not verified. Please verify your mobile number to receive messages on your phone.";
						html = '<a href="'+base+'actor/mobileverify" data-toggle="tooltip" data-placement="right" title="'+txt+'" class="text-danger otpLink"><i class="fa fa-exclamation"></i></a>';
						$("#actor_phone").after(html);
					}

					
				}
				$(unhide).removeClass("hidden");
				$(hide).addClass("hidden");
				$("#savedChnagedMsg").html(response.message);
				$("#savedChnaged").show(500).delay(3000).hide(500);
				//console.log(response);
			}
		});

		return false;
	});


	$(document).on("click", ".btnExpAndTraining", function(){
		var that = this,
			names = $(this).attr("data-input-names").split(","),
			request = $(this).attr("data-request"),
			unhide = $(this).attr("data-unhide-id"),
			hide = $(this).attr("data-hide-id"),
			key = $(this).attr("data-key"),
			table_ref = $(this).attr("data-table-id"),
			failed = false;

			var form = {actor_ref: $("input[name='actor_ref']").val(), key: key, table_ref: table_ref};
			$(".input-error").remove();
			$.each( names, function(index, value){
				name = $.trim(value);
				val = $.trim($('[name="'+name+'"]').val());
				$('[name="'+name+'"]').removeClass("isError");
				if(name.match(/ex_title_/) || name.match(/ex_role_/) || name.match(/tr_/)){
					if(val == ''){
						$('[name="'+name+'"]').addClass("isError");
						failed = true;
					}
				}
				
				form[name] = val;
			});
			
			if(failed){
				return false;
			}

			data = {request: request, data: JSON.stringify(form)};

			//console.log(data);

			$.ajax({
				url: url,
				type: type,
				data: data,
				success: function(response){
					if(response.status){
						$.each( form, function(index, value){
							$("#actor_" + index).html(value);
						});

						$(unhide).removeClass("hidden");
						$(hide).addClass("hidden");
					}

					$(unhide).removeClass("hidden");
					$(hide).addClass("hidden");
					//console.log(response);
					$("#savedChnagedMsg").html(response.message);
					$("#savedChnaged").show(500).delay(3000).hide(500);
				}
			})


	});

	$(document).on("click", ".addExperience", function(){
		var that = this;
		$(".input-error").remove();
		var title = $("input[name='exp_title']").val();
		$("input[name='exp_title']").removeClass("isError");
		if(title == ''){
			$("input[name='exp_title']").addClass("isError");
			return false;
		}
		var role = $("input[name='exp_role']").val();
		$("input[name='exp_role']").removeClass("isError");
		if(role == ''){
			$("input[name='exp_role']").addClass("isError");
			return false;
		}
		var blurb = $("textarea[name='exp_blurb']").val();
		var link = $("input[name='exp_link']").val();
		data = {request: "AddExperience", data: JSON.stringify({title: title, role: role, blurb: blurb, link: link})};
		//console.log(data);
		$.ajax({
			url: url,
			type: type,
			data: data,
			success: function(response){
				if(response.status){
					html = response.data.html;
					//console.log(rData);
					$("#experiencelist").html(html);
					$("input[name='exp_title']").val("");
					$("input[name='exp_role']").val("");
					$("input[name='exp_link']").val("");
					$("textarea[name='exp_blurb']").val("");
					$("#experience_add").addClass("hidden");
					$("#closeexperienceicon").addClass("hidden");
					$("#openexperienceicon").removeClass("hidden");
					$("#add_exp_btn").removeClass("hidden");
					$("#add_exp_btn_load").addClass("hidden");

				}
				$("#experiencelist").removeClass("hidden");
				$("#experience_add").addClass("hidden");
				$("#savedChnagedMsg").html(response.message);
				$("#savedChnaged").show(500).delay(3000).hide(500);
			}
		});
		return false;
	});


	$(document).on("click", ".addTraining", function(){
		var that = this;
		$(".input-error").remove();
		var title = $("input[name='trn_title']").val();
		$("input[name='trn_title']").removeClass("isError");
		if(title == ''){
			$("input[name='trn_title']").addClass("isError");
			return false;
		}
		var course = $("input[name='trn_course']").val();
		$("input[name='trn_course']").removeClass("isError");
		if(course == ''){
			$("input[name='trn_course']").addClass("isError");
			return false;
		}
		var blurb = $("textarea[name='trn_blurb']").val();
		
		var start = $("input[name='trn_start_time']").val();
		$("input[name='trn_start_time']").removeClass("isError");
		if(start == ''){
			$("input[name='trn_start_time']").addClass("isError");
			return false;
		}
		var end = $("input[name='trn_end_time']").val();
		$("input[name='trn_end_time']").removeClass("isError");
		if(end == ''){
			$("input[name='trn_end_time']").removeClass("isError");
			return false;
		}
		//console.log(blurb);
		data = {request: "AddTraining", data: JSON.stringify({title: title, course: course, blurb: blurb, start: start, end: end})};
		//console.log(data);
		$.ajax({
			url: url,
			type: type,
			data: data,
			success: function(response){
				if(response.status){
					html = response.data.html;
					//console.log(rData);
					$("#traininglist").html(html);
					$("#training_add").addClass("hidden");
					$("#closetrainingicon").addClass("hidden");
					$("#opentrainingicon").removeClass("hidden");
					$("input[name='trn_title']").val("");
					$("input[name='trn_course']").val("");
					$("input[name='trn_start_time']").val("");
					$("input[name='trn_end_time']").val("");
					$("textarea[name='trn_blurb']").val("");
				}
				$("#traininglist").removeClass("hidden");
				$("#training_add").addClass("hidden");
				$("#savedChnagedMsg").html(response.message);
				$("#savedChnaged").show(500).delay(3000).hide(500);
			}
		});

		return false;
	});
	
	
	

	$(document).on("click", ".removeSpanBtn", function(){
		var conf = confirm("Are you sure you want to remove this ?");
		if(!conf)
			return false;
		var that = this;
		var key = Number($(this).attr("data-key"));
		var ref = Number($(this).attr("data-id"));
		var to_do = $(this).attr("data-type");
		if(to_do == 'experience')
			data = {request: "RemoveExperience", data: JSON.stringify({experience_ref: ref})};
		else
			data = {request: "RemoveTraining", data: JSON.stringify({training_ref: ref})};
		$.ajax({
			url: url,
			type: type,
			data: data,
			success: function(response){
				//console.log(response);
				if(response.status){
					if(to_do == "experience"){
						$("#" +  to_do + "-" + key).hide(500).remove();
						totalExp = $(".actExp").length;
						current = key + 1;
						if(totalExp > 0){
							console.log(key, totalExp);
							if(totalExp == 1){
								$(".nav_icons").remove();
								$(".actExp").removeClass("hidden");
							}else{
								prev = key - 1;
								next = key + 1;
								$("#experience-" + prev + " .righttnav").attr("data-unhide-id", "#experience-" + next);
								$("#experience-" + next + " .leftnav").attr("data-unhide-id","#experience-" + prev);
								$("#experience-" + next).removeClass("hidden");
							}
						}
					}else{
						$("#" +  to_do + "-" + key).hide(500).remove();
					}
				}else{
					alert("Failed to remove");
				}
			}
		});
		return false;
	});
	
	$(document).on("click", ".setProfilePic", function(){
		var img = $("a", $(this)).attr("href");
		$("#actorAvatar").attr("src", img);
		data = {request:"UpdateProfileImage",data:JSON.stringify({img:img})};
		$.ajax({
			url: url,
			type: type,
			data: data,
			success: function(response){
				if(response.status){
					$("#set_profile_photo").modal("hide");
				}else{
					alert(response.message);
				}
				
			}
		});
		return false;
	});
	
	
	
	$(document).on("click", "#resendConfirmationLink", function(){
		data = {request: "ResendConfirmationLink", data:JSON.stringify({})};
		$.ajax({
			url: url,
			type: type,
			data: data,
			success: function(response){
				$("#resendCnfLnk-msg").html(response.message);
				$("#resendConfirmationModal").modal("show");
				setTimeout(function(){
					$("#resendConfirmationModal").modal("hide");
				}, 5000);
			}
		});
		return false;
	});
	
	$(document).on("click", ".removeImage", function(){
		var conf = confirm("Are you sure you want to remove this image ?");
		if(!conf)
			return false;
		
		var img = $(this).attr("data-image");
		var key = $(this).attr("data-key");
		data = {request: "RemoveImage", data: JSON.stringify({image: img})};
		$.ajax({
			url: url,
			type: type,
			data: data,
			success: function(response){
				if(response.status){
					$("#DocumentItem_" + key).addClass("animated fadeOut");
					$("#DocumentItem_" + key).remove();
				}else{
					alert(response.message);
				}
			}
		});
		return false;
	});
	
	$(document).on("click", ".shareButton", function(){
		var cond = $(this).attr("data-open");
		if(cond == "false"){
			$("#socialShare").show(500, "linear");
			$(this).attr("data-open", true);
		}else{
			$("#socialShare").hide(500, "linear");
			$(this).attr("data-open", false);
		}
		return false;
	});

	$(".bootstrap-tagsinput input").addClass("autoCompleteSkill");

	var ac = "";

	function split( val ) {
      return val.split( /,\s*/ );
    }

	function extractList(term) {
		return split( term ).pop();
	}

	$(".autoCompleteSkill")
		.bind( "keydown", function(event){
			if( event.keyCode === $.ui.keyCode.TAB && $(this).autocomplete("instance").menu.active ){
				event.preventDefault();
			}

			plc = $(this).attr("placeholder").replace(":", "");
			ac = plc.toLowerCase();
		})
		.autocomplete({
			minLength: 1,
			source: function(request, response){
				$.getJSON(base + "actor/skillSuggestions/" + ac, {
					term: extractList(request.term)
				}, response);
			},
			search: function(){
				var term = extractList(this.value);
				if(term.length < 2){
					return false;
				}
			},
			focus: function(){
				return false;
			},
			select: function(event, ui){
				var terms = split($("input#"+ac).val());
				console.log(terms);
				//terms.pop();
				terms.push(ui.item.value);
				$("#"+ac+"_edit "+ ".bootstrap-tagsinput input").before('<span class="tag label label-info">'+ui.item.value+'<span data-role="remove"></span></span>');
				//terms.push("");
				this.value = '';
				$("input#" + ac).val(terms);
				console.log(terms);
				return false;
			}
		});



	// To Remove Profile Image
	$(document).on("click", ".removeDP", function(){
		var conf = confirm("Are you sure you want to remove profile image ?");
		if(!conf)
			return false;

		data = {request: "RemoveProfilePic", data: JSON.stringify({})};
		$.ajax({
			url: url,
			type: type,
			data: data,
			success: function(response){
				if(response.status){
					$("#actorAvatar").attr("src", base + "assets/img/actors/default.png");
				}
				$("#savedChnagedMsg").html(response.message);
				$("#savedChnaged").show(500).delay(3000).hide(500);
			}
		});
		return false;
	});

	$(document).on("click", ".cropProfilePic", function(e){
		e.preventDefault();
    	e.stopPropagation();
    	$("#photoCropping").removeClass("hidden");
    	$("#photoCropping").addClass("animated bounceIn");
    	$form = $("form#cropperForm");
		img = $("img", $(this)).attr("src");
		$("input[name='imageName']", $form).val(img);
		img =  img;

		$("#cropThisImage").attr("src", img);

		$('#cropThisImage').cropper({
		  aspectRatio: 1/1,
		  scaleX:1,
		  scaleY:1,
		  minCropBoxHeight: 50,
		  maxCropBoxHeight: 200,
		  minCropBoxWidth: 50,
		  maxCropBoxWidth: 200,
		  zoomable: false,
		  zoomOnTouch: false, 
		  zoomOnWheel: false,
		  crop: function(e) {
		    // Output the result data for cropping image.
		    //console.log(e);
		    $("input[name='imageX']", $form).val(e.x);
		    $("input[name='imageY']", $form).val(e.y);
		    $("input[name='imageWidth']", $form).val(e.width);
		    $("input[name='imageHeight']", $form).val(e.height);
		    $("input[name='imageRotate']", $form).val(e.rotate);
		    $("input[name='imageScaleX']", $form).val(e.scaleX);
		    $("input[name='imageScaleY']", $form).val(e.scaleY);
		  }
		});

	});

	$(document).on("submit", "form#cropperForm", function(){
		var form = {};
		$("input", $(this)).each(function(index, value){
			if($(this).attr('name') == "imageName"){
				form[$(this).attr('name')] = $(this).val();
			}else{
				form[$(this).attr('name')] = Number($(this).val());
			}
		});

		data = {request: "UpdateProfileImage", data: JSON.stringify(form)};
		$.ajax({
			url: url,
			type: type,
			data: data,
			success: function(response){
				$("#cropperInfo").html(response.message).show(500);
				if(response.status){
					$("#actorAvatar").attr("src", base + "assets/img/actors/" + response.data.image);
					setTimeout(function(){
						$("#set_profile_photo").modal("hide");
					}, 3000);
					$("#photoCropping").addClass("hidden");
					$("#displayGallery").removeClass("hidden");
				}
			}
		});
		return false;

	});

	$(document).on("click", ".changePassword", function(){
		cur_p = $("input[name='current_passowrd']").val();
		new_p = $("input[name='new_passowrd']").val();
		con_p = $("input[name='confirm_passowrd']").val();
		if(con_p != new_p){
			$("#changepassword_err").html("New password and Confirm password did not match.").show(500).delay(3000).hide(500);
			return false;
		}
		data = {request: "ChangePasswordIn", data: JSON.stringify({ current: cur_p, password: new_p, confirm: con_p })};
		$.ajax({
			url: base + "ajax/",
			type: type,
			data: data, 
			success: function(response){
				$("#changepassword_err").html(response.message).show(500).delay(3000).hide(500);
				if(response.status){
					setTimeout(function(){
						window.location.href = base;
					}, 5000);
				}
			}
		});
		return false;
	});

});

String.prototype.toProperCase = function () {
    return this.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
};
$("input").tooltip({
 
      // place tooltip on the right edge
      position: "right",
 
      // a little tweaking of the position
      offset: [0, 0],
 
      // use the built-in fadeIn/fadeOut effect
      effect: "none",
 
      // custom opacity setting
      opacity: 0.7
 
});
function populate_photos()
{
	var json={};
	json.actor_images = $("#image_count").val();
	json.actor_profile_photo = $("#profile_pic").val();
	if(json.actor_images=="")
	{
		return;
	}
	var photoshtml='<div class="row" style="padding-right:15px;">'
                       +'<div class="DocumentList">'
                       +'  <ul class="list-inline">';

                       for(var k=0;k<json.actor_images;k++)
                       {
                        var str = json.actor_profile_photo;
                        var arr = str.split(".");
                        var ext = arr[2];
                        str1 = arr[0];
                        str2 = arr[1];
                        str2 = str2.substring(0, str2.length - 1);
                        str=str1+'.'+str2;
                        str+=k+'.'+ext;
                        //console.log(str);
        photoshtml+='<li class="DocumentItem">'
                       +'<a href="'+str+'" data-lightbox="'+json.actor_name+'"><img class="photo"src='+str+' height="100%" width=auto></img></a>' 
                       +'         </li>';
                      }
        photoshtml+='  </ul>'
                       +' </div>'
                       +' </div>';
        $("#photos_videos").html(photoshtml);
        $("#warningmsg").addClass("hidden");
        $("img").error(function () { 
	    $(this).hide();
	    // or $(this).css({visibility:"hidden"}); 
	});
	
	function SelectText(element) {
		var doc = document
			, text = doc.getElementById(element)
			, range, selection
		;    
		if (doc.body.createTextRange) {
			range = document.body.createTextRange();
			range.moveToElementText(text);
			range.select();
		} else if (window.getSelection) {
			selection = window.getSelection();        
			range = document.createRange();
			range.selectNodeContents(text);
			selection.removeAllRanges();
			selection.addRange(range);
		}
	}
	
	$(document).on("click", ".actor_link", function(){
		SelectText("actor_link");
	});



}

Dropzone.options.photoUpload={ 
    autoProcessQueue: false,
    uploadMultiple: true,
    parallelUploads: 100,
    maxFilesize:2,
    addRemoveLinks:true,
    maxFiles: 10,
    dictDefaultMessage:'<b>Drag or click here to upload <span style="color:#FFAA3A;">at least one picture</span></b>.<span class="info-small gray"><li>Ideally, keep the image size less than 1.5MB</li></span>',
    acceptedFiles:'image/*',
    paramName:'file',
    dictInvalidFileType:'Please stick to image files.',
    drop: function()
    {
    	
    },
    // The setting up of the dropzone
    init: function()
    {
      var myDropzone = this;
      $("#upload-btn").click(function(e)
      {
        e.preventDefault();
        e.stopPropagation();
        myDropzone.processQueue();
      });

      // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
      // of the sending event because uploadMultiple is set to true.
      this.on("sendingmultiple", function(file, xhr, formData)
      {
       //console.log(actor);
      });
      this.on("drop", function()
      {
       $("#upload-btn").removeClass("disabled");
       
      });
      this.on("addedfile", function(file)
      {
       $("#upload-btn").removeClass("disabled");
       
      });
      this.on("successmultiple", function(files, response)
      { 
        //console.log(files);
        $("#done-btn").removeClass("disabled");
        console.log(response);
        
        // Gets triggered when the files have successfully been sent.
        // Redirect user or notify of success.
      });
      this.on("errormultiple", function(files, response)
      {
        // Gets triggered when there was an error sending the files.
        // Maybe show form again, and notify user of error
      });
  }

}
function feet_to_cm()
{
	var feet = $("#feet").val();
	var inches = $("#inches").val();
	var measurement = Math.round((feet*12*2.54) + inches*2.54);
	$("#height").val(measurement);
	$("#feetToCmConverterModal").hide();
}
 function startIntro(){
        var intro = introJs();
          intro.setOptions({
            steps: [
              { 
                intro: "Hello world!"
              },
              {
                element: document.querySelector('#step1'),
                intro: "This is a tooltip."
              },
              {
                element: document.querySelectorAll('#step2')[0],
                intro: "Ok, wasn't that fun?",
                position: 'right'
              },
              {
                element: '#step3',
                intro: 'More features, more fun.',
                position: 'left'
              },
              {
                element: '#step4',
                intro: "Another step.",
                position: 'bottom'
              },
              {
                element: '#step5',
                intro: 'Get it, use it.'
              }
            ]
          });
          
          intro.setOption('showProgress', true).start();
      }
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})