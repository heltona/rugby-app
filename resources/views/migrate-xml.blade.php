<html>
<head>
<link href="/css/style.css" rel="stylesheet" />

</head>
<body>
	<header>
		<h1>Escolha um arquivo XML</h1>
	</header>
	<main>
		<form method="post" action="/migrate-xml"
			enctype="multipart/form-data">
			@csrf <input type="file" name="torcedor" accept="text/xml" />
			<button type="submit">Enviar</button>
		</form>
	</main>
</body>
</html>