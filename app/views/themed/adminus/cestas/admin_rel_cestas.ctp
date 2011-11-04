<style>table  { background-color: #fff; width: 100%; margin: 0px; padding: 0px; table td, table th { margin: 0px; padding; 0px; } table th { background: #ccc; } table tr { border-top: 1px solid black;}</style>
<table border='1' cellspacing='0' cellpadding='0'>
<tr>
	<th>Cestas Disponíveis</th>
	<th>data Gerada</th>
</tr>

<?php foreach($this->data as $_linha => $_arrModel): ?> 
<tr>
	<?php foreach($listaCampos as $_campo) : $c = explode('.',$_campo); ?>
	<td><?php echo $_arrModel[$c[0]][$c[1]] ?></td>
	<?php endforeach ?>
</tr>
<?php endforeach; ?>

<tr><td colspan="<?= count($listaCampos) ?>">Total: <?= $totalCestas; ?></td>
</tr>

</table>
<?php pr($this->data); ?>
