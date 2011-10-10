<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Editar Definicoescesta</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index')); ?></li></ul>
	</div>		<!-- .block_head ends -->
	
	
	
	<div class="block_content">
	
		<?php echo $this->Form->create('Definicoescesta'); echo $this->Form->input('id'); ?>
			<p>
				<label>Nome (Obrigatório)</label><br />
				<?php echo $this->Form->input('nome', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>		
			
			<p>
				<label>Tipo</label><br />
				<?php echo $this->Form->input('tipo', array('div' => false, 'label' => false, 'type' => 'select', 'class' => 'styled', 'options' => $tipos)); ?>
				<legend>Escolha tipo "Cesta" para mantimentos que compõe a cesta básica e "Extra" para os que não compõem</legend>
			</p>	
			
			<p>
				<label>Quantidade mínima para cesta (Obrigatório)</label><br />
				<?php echo $this->Form->input('quantidade', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
				<legend>Digite a quantidade mínima de cada mamtimento que compõe a cesta</legend>
			</p>
					
			<p>
				<label>Medida</label><br />
				<?php echo $this->Form->input('medida', array('div' => false, 'label' => false, 'type' => 'select', 'class' => 'styled', 'options' => $medidas)); ?>
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
