<html>
<head>
<!-- migrate to a stylesheet later -->
	<style type="text/css">
	   label {
	       display: inline-block;
	       width: 100px;
	   }
	</style>
</head>
<body>
	<form method="post" action="/create-new-fan">
		@csrf
		<div>
			<label>Nome: </label> <input type="text" name="nome"
				value="" />
		</div>
		<div>
			<label>Documento: </label> <input type="text" name="documento"
				value="" />
		</div>
		<div>
			<label>CEP: </label> <input type="text" name="cep" value="" />
		</div>
		<div>
			<label>Endereço: </label> <input type="text" name="endereco"
				value="" />
		</div>
		<div>
			<label>Bairro: </label> <input type="text" name="bairro"
				value="" />
		</div>
		<div>
			<label>Cidade: </label> <input type="text" name="cidade"
				value="" />
		</div>
		<div>
			<label>UF: </label> <input type="text" name="uf" value="" />
		</div>
		<div>
			<label>Telefone: </label> <input type="text" name="telefone"
				value="" />
		</div>
		<div>
			<label>Email: </label> <input type="text" name="email"
				value="" />
		</div>
		<div>
			<label>Ativo: </label> <input type="text" name="ativo"
				value="" />
		</div>

		<button type="submit">Enviar</button>
	</form>

</body>
</html>
