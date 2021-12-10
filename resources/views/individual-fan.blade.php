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
	<form method="post" action="/edit-fan">
		@csrf
		<input type="hidden" name="id" value="{{ $fan->id }}" />
		<div>
			<label>Nome: </label> <input type="text" name="nome"
				value="{{ $fan->nome }}" />
		</div>
		<div>
			<label>Documento: </label> <input type="text" name="documento"
				value="{{ $fan->documento }}" />
		</div>
		<div>
			<label>CEP: </label> <input type="text" name="cep" value="{{ $fan->cep}}" />
		</div>
		<div>
			<label>Endereço: </label> <input type="text" name="endereco"
				value="{{ $fan->endereco }}" />
		</div>
		<div>
			<label>Bairro: </label> <input type="text" name="bairro"
				value="{{ $fan->bairro }}" />
		</div>
		<div>
			<label>Cidade: </label> <input type="text" name="cidade"
				value="{{ $fan->cidade }}" />
		</div>
		<div>
			<label>UF: </label> <input type="text" name="uf" value="{{ $fan->uf }}" />
		</div>
		<div>
			<label>Telefone: </label> <input type="text" name="telefone"
				value="{{ $fan->telefone }}" />
		</div>
		<div>
			<label>Email: </label> <input type="text" name="email"
				value="{{ $fan->email }}" />
		</div>
		<div>
			<label>Ativo: </label> <input type="text" name="ativo"
				value="{{ $fan->ativo }}" />
		</div>

		<button type="submit">Enviar</button>
	</form>

</body>
</html>