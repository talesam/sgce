<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Editar Estoque</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index')); ?></li></ul>
	</div>		<!-- .block_head ends -->
	
	
	
	<div class="block_content">
		
			<p>
				<label>Mantimento</label><br />
				<?= $this->data['Definicoescesta']['nome'] ?>
			</p>		
			
			<p>
				<label>Quantidade a ser cadastrada</label><br />
				<?= $this->data['Estoque']['quantidade'] ?>
			</p>
			
			<p>
				<label>Complemento quantidade (Kilo, litro, lata)</label><br />
				<?= $this->data['Estoque']['complemento_qt'] ?>
			</p>
			
			<p>
				<label>Data Entrada</label><br />
				<?= $this->data['Estoque']['data_entrada'] ?>
			</p>	

			<p>
				<label>Data Vencimento</label><br />
				<?= $this->data['Estoque']['data_vencimento'] ?>
			</p>
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->
