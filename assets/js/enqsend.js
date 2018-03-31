$(document).ready(function(){
	$("#enqsub").click(function(e){
		
		var formdata={
			'usrname' : $('#usrname').val(),
			'usrphone' : $('#usrphone').val(),
			'usremail' : $('#usremail').val(),
			'usradd' : $('#usradd').val(),
			'productname' : $("#productnameid option:selected").text(),
			'size' : $('#tmtsize option:selected').text(),
			'quantity' : $('#quant').val(),
			'message' : $('#message').val(),
		}
		alert(formdata.quantity);
		$.ajax({
			type    :'POST',
			url     :'enqsend.php',
			data    :formdata,
			dataType:'json',
			encode  :true
		}).done(function(){
			$('#enqsub').prop("disabled",true);
			$('#enqsub').text("submitted");
		})
		e.preventDefault();
	})
})