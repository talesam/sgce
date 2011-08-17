<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Logs</h2>
		

		
	</div>		<!-- .block_head ends -->
	
	
	
	<div class="block_content">
	
	
			<table cellpadding="0" cellspacing="0" width="100%" class="sortable">
			
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('Usuário', 'usuario');?></th>
						<th><?php echo $this->Paginator->sort('data');?></th>
						<th><?php echo $this->Paginator->sort('Descrição', 'descricao');?></th>						
					</tr>
				</thead>
				
				<tbody>
					<?php foreach ($logs as $log): ?>
					<tr>
						<td><?php echo $log['Usuario']['nome']; ?>&nbsp;</td>
						<td><?php echo date('d/m/Y H:i:s', strtotime($log['Log']['data'])); ?>&nbsp;</td>
						<td><?php echo $log['Log']['descricao']; ?>&nbsp;</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
				
			</table>
			
			

				
				<div style="float:right;">
					<?php 
						echo $this->Paginator->counter(
							array(
								'format' => __('Página %page% de %pages%, Mostrar %current% registros de um total de %count%, a partir de registros %start%, termina em %end%', true))
							);
					?>
				</div>

			<!-- .tableactions ends -->
			
			<p>
	
			<div class="pagination right">
				<?php echo $this->Paginator->prev('«', array(), null, array('style'=>'display:none;')); ?>
				<?php echo $this->Paginator->numbers(array('separator' => false, 'tag' => 'span', 'class' => 'active')); ?>
				<?php echo $this->Paginator->next('»', array(), null, array('style'=>'display:none;')); ?>
			</div>		<!-- .pagination ends -->
			

		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
</div>		<!-- .block ends -->