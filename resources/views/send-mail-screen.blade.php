<html>
<head>
<link href="/css/style.css" rel="stylesheet" />

</head>
<body id="send-email">
	<header>
		<h1>Click para enviar email para os torcedores</h1>
	</header>
	<main>
		<form method="post" action="/send-email">
			@csrf
			<button type="submit">Enviar Email</button>
		</form>
	</main>
</body>
</html>