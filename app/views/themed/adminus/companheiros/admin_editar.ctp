<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Editar Companheiro</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index', $this->data['Companheiro']['parente_id'])); ?></li></ul>
	</div>		<!-- .block_head ends -->
	


	
	<div class="block_content">
	

		
		
		<?php echo $this->Form->create('Companheiro'); echo $this->Form->input('id'); echo $this->Form->input('parente_id', array('type' => 'hidden')); ?>
		
			<p>
				<label>Nome do companheiro</label><br />
				<?php echo $this->Form->input('nome', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
		
			
		
	
			<p>
				<input type="submit" class="submit small" value="Salvar" />
			</p>
		
		<?php echo $this->Form->end(null); ?>
		
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->
