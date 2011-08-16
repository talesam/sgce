<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Editar Questionario</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index')); ?></li></ul>
	</div>		<!-- .block_head ends -->
	
	
	
	<div class="block_content">
	
		<?php echo $this->Form->create('Questionario'); echo $this->Form->input('id');  ?>
			
			<p>
				<label>Categoria:</label><br />
				<?php echo $this->Form->input('parent_id', array('div' => false, 'label' => false, 'class' => 'styled', 'options' => $questionarios, 'empty' => 'Categoria Pai')); ?>
			</p>
			
			<p>
				<label>Título:</label><br />
				<?php echo $this->Form->input('titulo', array('div' => false, 'label' => false, 'class' => 'text medium', 'type' => 'text')); ?>
			</p>
			
			<p>
				<label>Descrição:</label><br />
				<?php echo $this->Form->input('descricao', array('div' => false, 'label' => false, 'class' => 'text medium')); ?>
			</p>
			

				
				

				
			<hr />
			
			<p>
				<input type="submit" class="submit small" value="Salvar" />
			</p>
		<?php echo $this->Form->end(null); ?>
		
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->