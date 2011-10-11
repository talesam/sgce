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
				<legend>Digite a quantidade de pacotes que serão cadastrados</legend>
			</p>
			
			<p>
				<label>Complemento quantidade (Kilo, litro, lata)</label><br />
				<?php echo $this->Form->input('complemento_qt', array('div' => false, 'label' => false, 'class' => 'styled', 'options' => array('0.5'=>'0,5', '1'=>'1', '1.5'=>'1,5', '2'=>'2', '2.5'=>'2,5', '3'=>'3', '3.5'=>'3,5', '4'=>'4', '4.5'=>'4,5', '5'=>'5') )); ?>
				<legend>Escolha se o pacote é de 0.5kg, 1kg, 2kg, 3kg, 1l ...</legend>
			</p>
			
			<p>
				<label>Data Entrada</label><br />
				<?php echo $this->Form->input('data_entrada', array('div' => false, 'label' => false)); ?>
			</p>	

			<p>
				<label>Data Vencimento</label><br />
				<?php echo $this->Form->input('data_vencimento', array('div' => false, 'label' => false)); ?>
				<legend>Referente a 1 pacote ou a pacotes iguais (mesmo peso) e com mesma data de vencimento</legend>
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
