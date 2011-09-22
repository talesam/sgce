<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Editar Pergunta</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index')); ?></li></ul>
	</div>		<!-- .block_head ends -->
	
	
	
	<div class="block_content">
	
		<?php echo $this->Form->create('Questionario'); echo $this->Form->input('id'); ?>
			
		<p>
			<label>Pergunta</label><br />
			<?php echo $this->Form->input('pergunta', array('div' => false, 'label' => false, 'class' => 'text medium')); ?>
		</p>		
			
		<p>
			<label>Tipo</label><br />
			<?php echo $this->Form->input('tipo', array('div' => false, 'label' => false, 'class' => 'styled', 'type' => 'select', 'options' => $opcoes)); ?>
		</p>
		
		<p>
			<label>Extra</label><br />
			<?php echo $this->Form->input('extra', array('div' => false, 'label' => false, 'class' => 'text medium')); ?>
			<legend>Utilize esse campo separado por , caso seja um campo de escolhas.</legend>
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
