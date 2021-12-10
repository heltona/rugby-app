<html>
<head></head>
<body>
	<form method="post" action="/migrate-spreadsheet" enctype="multipart/form-data">
	@csrf
		<input type="file" name="torcedor" accept=".xlsx" />
		<button type="submit">Enviar</button>
	</form>

</body>
</html>