<html>
<head>
	<title>Javascript Review</title>
	<script 
		src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

</head>
<body>
	<div id="content"></div>
	<input type="text" id="textinput" />
</body>
<script	type="text/javascript">
	var jTextInput = $("#textinput");
	jTextInput.keyup( function() {
		$.ajax({
			"method": "POST",
			"url": "ajax-receiver.php",
			"dataType": "JSON",
			"data": {
				"textValue": $("#textinput").val()
			},
			success: function(res) {
				$("#content").html(res.revstring);
				console.log(res);
			}
		});
	});
</script>
</html>