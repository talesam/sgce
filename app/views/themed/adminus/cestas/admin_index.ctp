<div class="block">
	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		<h2>Cestas</h2>
		
		<ul>
			<li><?php echo $this->Html->link('Gerar Cestas', array('controller' => 'cestas', 'action' => 'gerar_cestas')); ?></li>
		</ul>
	</div>
	
	<div class="block_content">
	
		<table cellpadding="0" cellspacing="0" width="100%" class="sortable">
			<thead>
				<tr>
					<th>Família</th>
					<th><?php echo $this->Paginator->sort('data_gerado'); ?></th>
					<th><?php echo $this->Paginator->sort('data_saida'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($cestas as $cesta): ?>
				<tr>
					<td>Disponível</td>
					<td><?php echo date('d/m/Y H:i:s', strtotime($cesta['Cesta']['data_gerado'])); ?></td>
					<td><?php echo $cesta['Cesta']['data_saida'] ? date('d/m/Y H:i:s', strtotime($cesta['Cesta']['data_saida'])) : '-'; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>	
		</table>
		
		<div class="tableactions">


			<div style="float:right;">
			<?php 
				echo $this->Paginator->counter(
					array(
						'format' => __('Página %page% de %pages%, Mostrar %current% registros de um total de %count%, a partir de registros %start%, termina em %end%', true))
					);
			?>
			</div>
		</div>		<!-- .tableactions ends -->
		
		<div class="pagination right">
				<?php echo $this->Paginator->prev('«', array(), null, array('style'=>'display:none;')); ?>
				<?php echo $this->Paginator->numbers(array('separator' => false, 'tag' => 'span', 'class' => 'active')); ?>
				<?php echo $this->Paginator->next('»', array(), null, array('style'=>'display:none;')); ?>
		</div>
			

	</div>
	
	<div class="bendl"></div>
	<div class="bendr"></div>
</div>