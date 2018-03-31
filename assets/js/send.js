$(document).ready(function(){

	$('#consub').click(function(e){
		
		var formdata = {
			'usrname':$('#usrname').val(),
			'email':$('#usremail').val(),
			'message':$('#message').val()
		};
		
		$.ajax({
            type        : 'POST',
            url         : 'send.php', 
            data        : formdata, 
            dataType    : 'json', 
            encode      : true
        })
            .done(function(data) {
                $('#usrname').val(""); 
                $('#message').val(""); 
                $('#usremail').val("");
                
               $("#consub").prop("disabled",true);
               $("#consub").text("submitted");
            });
		e.preventDefault();
	})
})