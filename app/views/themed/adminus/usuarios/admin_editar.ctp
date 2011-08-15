<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Cadastrar Usuário</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index')); ?></li></ul>
	</div>		<!-- .block_head ends -->
	
	
	
	<div class="block_content">
	
		<?php echo $this->Form->create('Account'); echo $this->Form->input('id'); ?>
			<p>
				<label>Nome:</label><br />
				<?php echo $this->Form->input('username', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
				
		
						
				<p>
					<label>Senha:</label><br />
					<?php echo $this->Form->input('temp_password', array('div' => false, 'label' => false, 'type' => 'password', 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
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