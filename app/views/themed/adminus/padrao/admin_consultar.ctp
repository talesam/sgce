<?php $separador = isset($separador) ? $separador : ': '; ?>
<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Consultar <?= (isset($titulo)) ? $titulo : '???' ?></h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index')); ?></li></ul>
	</div>		<!-- .block_head ends -->
	
	
	
	<div class="block_content">
		<?php
		foreach($listaCampos as $_campo)
		{
			$arrCmp = explode('.',$_campo);
			$c = isset($config[$arrCmp['0']][$arrCmp['1']]) ? $config[$arrCmp['0']][$arrCmp['1']] : null;
			$v = $this->data['0'][$arrCmp['0']][$arrCmp['1']];
			$titulo = isset($c['titulo']) ? $c['titulo'] : $arrCmp['1'];
			echo '<p><label>'.$titulo.$separador.'</label>';
			if (is_array($v))
			{
				$v = '';
				$arrVal = $this->data['0'][$arrCmp['0']];
				foreach($arrVal as $_linha => $_arrCampos) $v .= $_arrCampos[$arrCmp['2']].', ';
				$v = trim(substr($v,0,strlen($v)-2));
			}
			echo $v;
			echo '</p>';
		}
		?>
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->
<?php //debug($this->data); ?>
