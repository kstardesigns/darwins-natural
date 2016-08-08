//$.post("email.php", { data : $("#currentorder").html() }, function(result){
	  /* handle results */
//	});


$("#orderform").submit(function() {
    $("#content").val($("#currentorder").html());
});