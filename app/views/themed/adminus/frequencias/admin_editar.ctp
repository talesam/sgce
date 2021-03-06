<?php if (!isset($modelClass)) 	$modelClass = Inflector::singularize($this->name); ?>
<?php if (!isset($titulo))		$titulo		= $this->name; ?>
<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		<h2>Editar <?= $titulo ?></h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index')); ?></li></ul>
	</div>		<!-- .block_head ends -->
	
	<div class="block_content">
	
		<?php echo $this->Form->create($modelClass);  ?>
			<p>
				<label>Responsável Família</label><br />
				<?php echo $this->Form->input('familia_id', array('div' => false, 'label' => false, 'options' => $familias, 'class' => 'styled', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>		
			
			<p>
				<label>Código</label><br />
				<?php echo $this->Form->input('codigo', array('div' => false, 'label' => false, 'type' => 'select', 'class' => 'styled', 'options' => $codigos)); ?>
			</p>	
				
			<p>
				<label>Data</label><br />
				<?php echo $this->Form->input('data', array('div' => false, 'label' => false)); ?>
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
