<html>
<head>
<link href="/css/style.css" rel="stylesheet" />
</head>
<body>
	<header>
		<h1>Escolha um arquivo xlsx</h1>
	</header>
	<main>
		<form method="post" action="/migrate-spreadsheet"
			enctype="multipart/form-data">
			@csrf <input type="file" name="torcedor" accept=".xlsx" />
			<button type="submit">Enviar</button>
		</form>
	</main>
</body>
</html>