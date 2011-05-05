<!--//
$(document).ready(function(){
    $("#LoggingFrm").validate({
		rules: {
			"data[login_name]": { required: true},
			"data[login_pass]": { required: true}
		},
		messages: {
			"data[login_name]": "Please enter the correct user name",
			"data[login_pass]": "Please enter your password"
		}
	});
    $("#PostFrm").validate({
		rules: {
			"data[trade][title]": { required: true,"minlength":4},
			"data[trade][content]": { required: true}
		},
		messages: {
			"data[trade][title]": "Please enter the title of supply and demand",
			"data[trade][content]": "Please enter the details of supply and demand"
		}
	});  
    $("#regfrm").validate({
		rules: {
			"data[member][username]": { required: true,rangelength:[5,20]},
			"data[member][userpass]": { required: true,rangelength:[6,20]},
			"data[member][email]": { required: true, email:true},
			"re_memberpass": { required: true, equalTo: "#memberpass"}
		},
		messages: {
			"data[member][username]": {
				required:"Please enter the correct user name",
				rangelength:"Please enter the range of 5-20 character user name"
			},
			"data[member][userpass]": {
				required:"Please enter your password",
				rangelength:"Please enter the password between 6-20 characters"
			},
			"data[member][email]": "Please enter the correct Email",
			"re_memberpass": "Please re-enter the password inconsistent"
		}
	}); 

   $('#dataMemberUsername').blur(function (){
	 var username = $("#dataMemberUsername").val();
	 if(username.length<5){
		 return;
	 }
	 var params = "username="+username;
	 var action = "checkusername";
     $.ajax({
       url:'ajax.php?action='+action,
       type:'get',
       dataType:'json',
       data:params,
       success:update_checkusernameDiv
     });
   });	
   
   $('#dataUsername').blur(function (){
	 var username = $("#dataMemberUsername").val();
	 if(username.length<5){
		 return;
	 }
	 var params = "username="+username;
	 var action = "checkusername";
     $.ajax({
       url:'ajax.php?action='+action,
       type:'get',
       dataType:'json',
       data:params,
       success:getpass_checkusernameDiv
     });
   });	

   $('#memberpass').blur(function (){
	 var userpass = $("#memberpass").val();
	  if(userpass.length<6){
		 return;
	    }
	 });

   $('#exchange_imgcapt').click(function (){
	 $('#imgcaptcha').attr('src','captcha.php?sid=' + Math.random());
	 $('#login_auth').focus();
	 return false;
   });	

   $('#dataMemberEmail').blur(function (){
	 var email = $("#dataMemberEmail").val();
	 if(email.length<5){
		 return;
	 }
	 var params = "email="+email;
	 var action = "checkemail";
     $.ajax({
       url:'ajax.php?action='+action,
       type:'get',
       dataType:'json',
       data:params,
       success:update_checkemailDiv
     });
   });	
});
function update_checkusernameDiv(data){
	var errorNumber = data.isError;
	if(errorNumber!=0)
	{
		$("#Submit").attr('disabled', true);
		$("#membernameDiv").html('<img src="images/check_error.gif" alt="Can not use">User name already exists');
	}else{
		$("#Submit").attr('disabled', false);
		$("#membernameDiv").html('<img src="images/check_right.gif" alt="You can use">');
	}
}
function update_checkemailDiv(data){
	var errorNumber = data.isError;
	if(errorNumber!=0)
	{
		$("#Submit").attr('disabled', true);
		$("#memberemailDiv").html('<img src="images/check_error.gif" alt="Can not use">Email already exists');
	}else{
		$("#Submit").attr('disabled', false);
		$("#memberemailDiv").html('<img src="images/check_right.gif" alt="You can use">');
	}
}
function login(frm){
	if($('#LoginName').val() == ""){
			alert("Please enter the correct user name");
			$('#LoginName').focus();
			return false;
		}else if($('#UserEmail').val() == ""){
			alert("Enter Email Address");
			$('#UserEmail').focus();
			return false;
	}
}
function getpass_checkusernameDiv(data){
	var errorNumber = data.isError;
	if(errorNumber!=0)
	{
		$("#GoNext").attr('disabled', true);
		$("#checkusernameDiv").html('Authentication failed');
	}else{
		$("#GoNext").attr('disabled', false);
		$("#checkusernameDiv").html('');
	}
}
//-->