<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="utf-8">
	<title>Teste</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Buscar clientes</h2>  
		<div>
			<div class="input-group">
				<input type="text" name="search_name" id="search_name" class="form-control" placeholder="Nome do cliente">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button" onclick="buscar_cliente()">Buscar</button>
				</span>
			</div>
		</div>       
		<div style="padding-top:10px">
			<table class="table table-bordered">
			<thead id="table" style="display: none">
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Idade</th>
					<th>Telefone</th>
					<th>Endereço</th>
					<th>Código Categoria</th>
					<th>Categoria</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody id="clientes"></tbody>
			</table>
		</div>
		<div id="nre" style="display: none">
			<p>Nenhum resultado encontrado!</p>
		</div>
	</div>
</body>
<script>
function buscar_cliente() {
	$.ajax({
	    type: 'POST',
	    url: 'clientes_curl.php',
	    data: {
			'name': $('input[name=search_name]').val()
		},
	    dataType: 'json',
	    success: success
	});
}

function success(result) {
	if (result == '') {
		$('#clientes').empty();
		$('#table').css('display', 'none');
		$('#nre').css('display', 'table-header-group');
	} else {
		var clientes = '';
		result.forEach(function(item, i) {
		    clientes += '<tr>';
		    clientes += '<td>'+item.cli_id+'</td>';
		    clientes += '<td>'+item.cli_nome+'</td>';
		    clientes += '<td>'+item.cli_idade+'</td>';
		    clientes += '<td>'+item.cli_telefone+'</td>';
		    clientes += '<td>'+item.cli_endereco+'</td>';
		    clientes += '<td>'+item.cat_codigo+'</td>';
		    clientes += '<td>'+item.cat_nome+'</td>';
		    clientes += '<td>'+item.cat_status+'</td>';
		    clientes += '</tr>'
		});
		$('#nre').css('display', 'none');
		$('#table').css('display', 'table-header-group');
		$('#clientes').html(clientes);
	}
}	
</script>
</html>