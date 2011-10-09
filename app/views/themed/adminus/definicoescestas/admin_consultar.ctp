<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Consultar Definições cesta</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index')); ?></li></ul>
	</div>		<!-- .block_head ends -->
	
	
	
	<div class="block_content">
	
		<?php echo $this->Form->create('Definicoescesta'); echo $this->Form->input('id'); ?>	
			<p>
				<label>Nome: </label><?= $this->data['Definicoescesta']['nome'] ?>
			</p>		
			
			<p>
				<label>Tipo: </label><?= $this->data['Definicoescesta']['tipo'] ?>
			</p>	
				
			<p>
				<label>Quantidade mínima para cesta: </label><?= $this->data['Definicoescesta']['complemento_qt'] ?><?= $this->data['Definicoescesta']['medida'] ?>
			</p>
			
		<?php echo $this->Form->end(null); ?>
		
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->
