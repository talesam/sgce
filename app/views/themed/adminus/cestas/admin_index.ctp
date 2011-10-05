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
					<th><?php echo $this->Paginator->sort('data_gerada'); ?></th>
					<th><?php echo $this->Paginator->sort('data_saida'); ?></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($cestas as $cesta): ?>
				<tr>
					<td><?php echo $cesta['Cesta']['familia_id'] ? 'Cesta doada' : 'Cesta disponível para doação'; ?></td>
					<td><?php echo date('d/m/Y H:i:s', strtotime($cesta['Cesta']['data_gerada'])); ?></td>
					<td><?php echo $cesta['Cesta']['data_saida'] ? date('d/m/Y H:i:s', strtotime($cesta['Cesta']['data_saida'])) : '-'; ?></td>
					<td class="delete">
						
						<?php echo $this->Html->link('Editar', array('action' => 'editar', $cesta['Cesta']['id'])); ?>
						
					</td>
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