<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Recuperar Senha</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index')); ?></li></ul>
	</div>		<!-- .block_head ends -->
	
	
	
	<div class="block_content">
		<?php echo $this->Form->create('Usuario'); echo $this->Form->input('id'); ?>

			<p>
				<label>E-mail (Obrigatório)</label><br />
				<?php echo $this->Form->input('email', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>

			<hr />
			<p>
				<input type="submit" class="submit small" value="Enviar" />
			</p>
			<?php echo $this->Form->end(null); ?>
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->
