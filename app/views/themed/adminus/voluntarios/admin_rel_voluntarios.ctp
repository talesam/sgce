<style>table  {background-color: #fff; width: 100%; margin: 0px; padding: 0px; table td, table th { margin: 0px; padding; 0px; } table th { background: #ccc; } table tr { border-top: 1px solid black;}</style>
<table border='1'>
<tr>
	<th>Nome</th>
	<th>Prestação de serviço</th>
	<th>Telefone</th>
	<th>Celular</th>
	<th>e-mail</th>
</tr>

<?php foreach($this->data as $_linha => $_arrModel): ?> 
<tr>
	<?php foreach($listaCampos as $_campo) : $c = explode('.',$_campo); ?>
	<td><?php echo $_arrModel[$c[0]][$c[1]] ?></td>
	<?php endforeach ?>
</tr>
<?php endforeach; ?>

</table>
