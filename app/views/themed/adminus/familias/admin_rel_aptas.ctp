<style>table  { background-color: #fff; width: 100%; margin: 0px; padding: 0px; table td, table th { margin: 0px; padding; 0px; } table th { background: #ccc; } table tr { border-top: 1px solid black;}</style>
<table border='1'>
<tr>
		<th>Situação</th>
		<th>Nome do Representante</th>

</tr>

<?php foreach($this->data as $_linha => $_arrModel): ?> 
<tr>
	<td align='center'><?php echo ($_arrModel['Familia']['situacao']==1) ? 'Apta': 'Não Apta'; ?></td>
	<td><?php echo $_arrModel['Familia']['nome']; ?></td>
</tr>
<?php endforeach; ?>

</table>
