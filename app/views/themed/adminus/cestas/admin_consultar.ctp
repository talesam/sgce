<table width='100%' style='background-color: #fff;'>
<?php 
foreach($this->data as $_linha => $_arrModel)
{
	echo '<tr>';
	foreach($listaCampos as $_campo)
	{
		$arrCmp = explode('.',$_campo);
		$c = isset($config[$arrCmp['0']][$arrCmp['1']]) ? $config[$arrCmp['0']][$arrCmp['1']] : null;
		$titulo = isset($c['titulo']) ? $c['titulo'] : $arrCmp['1'];
		echo '<th>'.$titulo.'</th>';
	}
	echo '</tr>';
	echo '<tr>';
	foreach($listaCampos as $_campo)
	{
		$arrCmp = explode('.',$_campo); 
		$c = isset($config[$arrCmp['0']][$arrCmp['1']]) ? $config[$arrCmp['0']][$arrCmp['1']] : null;
		echo '<td>';
		if (!is_array($c))
		{
			echo $c;
		} else
		{
			if (count($_arrModel[$arrCmp['0']]))
			{
				foreach($_arrModel[$arrCmp['0']] as $_linha2 => $_arrCampos2)
				{
					if ( isset($arrCmp['2']) && isset($_arrCampos2[$arrCmp['2']]) ) 
						echo $_arrCampos2[$arrCmp['2']].', ';
				}
			}
		}
		echo '</td>';
	}
	echo '</tr>';
}
?>
</table>
<?php debug($this->data); ?>
