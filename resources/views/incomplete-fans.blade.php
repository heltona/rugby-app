<html>
<head>
<link href="/css/style.css" rel="stylesheet" />

</head>
<body id="all-fans" class="incomplete">
	
	<table>
		<thead>
			<tr>
				<th>Nome</th>
				<th>Documento</th>
				<th>endereço</th>
				<th>bairro</th>
				<th>cidade</th>
				<th>uf</th>
				<th>telefone</th>
				<th>email</th>
				<th>ativo</th>

			</tr>
		</thead>
		<tbody>
			@foreach($fans as $fan)
			<tr>
				<td><a href="/individual-fan/{{ $fan->id }}">{{ $fan->nome }} </a></td>

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