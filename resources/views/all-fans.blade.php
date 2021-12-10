<html>
<head>
<link href="/css/style.css" rel="stylesheet" />

</head>
<body id="all-fans">
	<table>
		<thead>
			<tr>
				<th>Nome</th>
				<th>Documento</th>
				<th>Endereço</th>
				<th>Bairro</th>
				<th>Cidade</th>
				<th>UF</th>
				<th>Telefone</th>
				<th>Email</th>
				<th>Ativo</th>

			</tr>
		</thead>
		<tbody>
			@foreach($fans as $fan)
			<tr>
				<td>{{ $fan->nome }}</td>
				<td>{{ $fan->documento }}</td>
				<td>{{ $fan->endereco }}</td>
				<td>{{ $fan->bairro }}</td>
				<td>{{ $fan->cidade }}</td>
				<td>{{ $fan->uf }}</td>
				<td>{{ $fan->telefone }}</td>
				<td>{{ $fan->ativo }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>