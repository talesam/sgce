<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Cadastrar Dependente</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index', $familiaId)); ?></li></ul>
	</div>		<!-- .block_head ends -->
	


	
	<div class="block_content">
	

		
		
		<?php echo $this->Form->create('Dependente', array('url' => array('controller' => 'dependentes', 'action' => 'cadastrar', $familiaId))); echo $this->Form->input('parente_id', array('type' => 'hidden', 'value' => $familiaId)); echo $this->Form->input('dependente', array('type' => 'hidden', 'value' => 1)); ?>
		
			<p>
				<label>Nome do dependente</label><br />
				<?php echo $this->Form->input('nome', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
		
			
		
	
			<p>
				<input type="submit" class="submit small" value="Cadastrar" />
			</p>
		
		<?php echo $this->Form->end(null); ?>
		
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->
