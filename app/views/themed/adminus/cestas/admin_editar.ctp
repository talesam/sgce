<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Doação de cesta</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index')); ?></li></ul>
	</div>		<!-- .block_head ends -->
	
	<div class="block_content">
	
		<?php echo $this->Form->create('Cesta'); echo $this->Form->input('id'); ?>
			<p>
				<label>Responsável Família</label><br />
				<?php echo $this->Form->input('familia_id', array('div' => false, 'label' => false, 'options' => $familias, 'class' => 'styled', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>		
			
				
			<p>
				<label>Data</label><br />
				<?php echo $this->Form->input('data_saida', array('div' => false, 'label' => false)); ?>
			</p>
					
			<hr />
			
			<p>
				<input type="submit" class="submit small" value="Doar Cesta" />
			</p>
		<?php echo $this->Form->end(null); ?>
		
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->
