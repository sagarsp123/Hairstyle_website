$('document').ready(function() {
/* handle form validation */
$("#register-form").validate({
rules:
{
firstname: {
required: true,
minlength: 3
},
{
lastname: {
required: true,
minlength: 3
},
age: {
required: true,
age: true
},
dob: {
required: true,
dob: true
},
contact: {
required: true,
minlength: 10
},
address: {
required: true,
address: true
},
email: {
required: true,
email: true
},
},
messages:
{
firstname: "please enter first name",
lastname: "please enter last name",
email: "please enter a valid email address",
age: "please enter your age",
dob: "please enter your date of birth",
contact: "please enter contact number",
address: "please enter address"
},
submitHandler: submitForm
});
/* handle form submit */
function submitForm() {
var data = $("#register-form").serialize();
$.ajax({
type : 'POST',
url : 'Logindatabase.php',
data : data,
beforeSend: function() {
$("#error").fadeOut();
$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
},
success : function(response) {
if(response==1){
$("#error").fadeIn(1000, function(){
$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>   Sorry email already taken !</div>');
$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span>   Create Account');
});
} else if(response=="registered"){
$("#btn-submit").html('<img src="ajax-loader.gif" />   Signing Up ...');
setTimeout('$(".form-signin").fadeOut(500, function(){ $(".register_container").load("welcome.php"); }); ',3000);
} else {
$("#error").fadeIn(1000, function(){
$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span>   '+data+' !</div>');
$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span>   Create Account');
});
}
}
});
return false;
}
});

