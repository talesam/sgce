<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Cadastrar Família</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index')); ?></li></ul>
	</div>		<!-- .block_head ends -->
	
	
	
	<div class="block_content">
	
		<?php echo $this->Form->create('Familia'); ?>
		
			<p>
				<label>Nome:</label><br />
				<?php echo $this->Form->input('nome', array('div' => false, 'label' => false, 'class' => 'text medium')); ?>
			</p>
			
			<p>
				<label>Descrição:</label><br />
				<?php echo $this->Form->input('description', array('div' => false, 'label' => false, 'class' => 'text medium')); ?>
			</p>

		
			
			<p>
				<?php echo $this->Form->input('Pergunta', array('div' => false, 'label' => false, 'multiple' => 'checkbox')); ?>
			</p>
	

			<hr />
			
			<p>
				<input type="submit" class="submit small" value="Cadastrar" />
			</p>
		<?php echo $this->Form->end(null); ?>
		
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->