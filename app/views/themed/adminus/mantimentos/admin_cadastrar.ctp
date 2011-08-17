<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Cadastrar Mantimento</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index')); ?></li></ul>
	</div>		<!-- .block_head ends -->
	
	
	
	<div class="block_content">
	
		<?php echo $this->Form->create('Mantimento');  ?>

			
			<p>
				<label>Nome:</label><br />
				<?php echo $this->Form->input('nome', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>		
			
				<p>
					<label>Tipo:</label><br />
					<?php echo $this->Form->input('tipo', array('div' => false, 'label' => false, 'type' => 'select', 'class' => 'styled', 'options' => $tipos)); ?>
				</p>	
				
					<p>
						<label>Quantidade mínima para cesta:</label><br />
						<?php echo $this->Form->input('quantidade', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
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