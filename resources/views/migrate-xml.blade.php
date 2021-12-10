<html>
<head></head>
<body>
	<form method="post" action="/migrate-xml" enctype="multipart/form-data">
		@csrf 
		<input type="file" name="torcedor" accept="text/xml" />
		<button type="submit">Enviar</button>
	</form>

</body>
</html>