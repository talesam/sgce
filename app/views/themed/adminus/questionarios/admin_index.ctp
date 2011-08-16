<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Questionarios</h2>
		
		<ul>
			<li><?php echo $this->Html->link('Cadastrar Questionario', array('action' => 'cadastrar')); ?></li>
		</ul>
	</div>		<!-- .block_head ends -->
	
	
	
	<div class="block_content">
	
		
			<table cellpadding="0" cellspacing="0" width="100%" class="sortable">
			
				<thead>
					<tr>
						<th>Nome</th>
						<td>&nbsp;</td>
					</tr>
				</thead>
				
				<tbody>
					<?php foreach ($questionarios as $questionarioId => $questionarioTitulo): ?>
					<tr>
						<td><?php echo $questionarioTitulo; ?>&nbsp;</td>
						<td class="delete">
							<?php echo  $this->Html->link('Mover para baixo', array('action' => 'move_down', $questionarioId)); ?> | 
							<?php echo  $this->Html->link('Mover para cima', array('action' => 'move_up', $questionarioId)); ?> | 
							<?php echo  $this->Html->link('Editar', array('action' => 'editar', $questionarioId)); ?> | 
							<?php echo $this->Html->link('Excluir', array('action' => 'excluir', $questionarioId), null, 'Tem certeza que deseja excluir?'); ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
				
			</table>
			
			
		
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
</div>		<!-- .block ends -->