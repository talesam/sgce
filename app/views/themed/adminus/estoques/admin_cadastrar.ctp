<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Cadastrar Estoque  para mantimento <?php echo $mantimento['Mantimento']['nome']; ?></h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index', $mantimento['Mantimento']['id'])); ?></li></ul>
	</div>		<!-- .block_head ends -->
	
	
	
	<div class="block_content">
	
		<?php echo $this->Form->create('Estoque', array('url' => array('action' => 'cadastrar', $mantimento['Mantimento']['id'])));  ?>

			
			<p>
				<label>Descrição</label><br />
				<?php echo $this->Form->input('descricao', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>		
			
			<p>
				<label>Quantidade a ser cadastrada (Obrigatório)</label><br />
				<?php echo $this->Form->input('quantidade', array('div' => false, 'label' => false, 'class' => 'text medium')); ?>
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
				<input type="submit" class="submit small" value="Cadastrar" />
			</p>
		<?php echo $this->Form->end(null); ?>
		
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->
