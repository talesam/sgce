<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Perguntas</h2>
		
		<ul>
			<li><?php echo $this->Html->link('Cadastrar Pergunta', array('action' => 'cadastrar')); ?></li>
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
					<?php foreach ($perguntas as $perguntaId => $perguntaTitulo): ?>
					<tr>
						<td><?php echo $perguntaTitulo; ?>&nbsp;</td>
						<td class="delete">
							<?php echo  $this->Html->link('Mover para baixo', array('action' => 'move_down', $perguntaId)); ?> | 
							<?php echo  $this->Html->link('Mover para cima', array('action' => 'move_up', $perguntaId)); ?> | 
							<?php echo  $this->Html->link('Editar', array('action' => 'editar', $perguntaId)); ?> | 
							<?php echo $this->Html->link('Excluir', array('action' => 'excluir', $perguntaId), null, 'Tem certeza que deseja excluir?'); ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
				
			</table>
			
			
		
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
</div>		<!-- .block ends -->