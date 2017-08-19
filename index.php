<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<title>Javascript Review</title>
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body class="container-fluid">
<br>
	<div class="row">
		<div class="col-md-3"></div>
		<input type="text" class="form-control col-md-6" id="textinput" />
		<div class="col-md-3"></div>
	</div>
	<div class="row">
		<div class="col-md-3"></div>
		<div id="content" class="col-md-6"></div>
		<div class="col-md-3"></div>
	</div>
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
				$("#content").html(res.answer);
				console.log(res);
			}
		});
	});
</script>
</html>