<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Editar Estoque</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index')); ?></li></ul>
	</div>		<!-- .block_head ends -->
	
	
	
	<div class="block_content">
	
		<?php echo $this->Form->create('Estoque'); echo $this->Form->input('id'); ?>

			
			<p>
				<label>Mantimento</label><br />
				<?php echo $this->Form->input('definicoescesta_id', array('div' => false, 'label' => false, 'options' => $definicoescestas, 'class' => 'styled', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>		
			
			<p>
				<label>Quantidade a ser cadastrada</label><br />
				<?php echo $this->Form->input('quantidade', array('div' => false, 'label' => false, 'class' => 'text medium')); ?>
			</p>
			
			<p>
				<label>Complemento quantidade</label><br />
				<?php echo $this->Form->input('complemento_qt', array('div' => false, 'label' => false, 'class' => 'styled', 'options' => array_combine(range(1,5), range(1,5)) )); ?>
			</p>
			
			<p>
				<label>Data Entrada</label><br />
				<?php echo $this->Form->input('data_entrada', array('div' => false, 'label' => false)); ?>
			</p>	

			<p>
				<label>Data Vencimento</label><br />
				<?php echo $this->Form->input('data_vencimento', array('div' => false, 'label' => false)); ?>
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
