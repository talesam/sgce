<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Consultar Estoque</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index')); ?></li></ul>
	</div>		<!-- .block_head ends -->
	
	
	
	<div class="block_content">
		
			<p>
				<label>Mantimento: </label><?= $this->data['Definicoescesta']['nome'] ?>
			</p>		
			
			<p>
				<label>Quantidade cadastrada: </label><?= $this->data['Estoque']['quantidade'] ?>
			</p>
			
			<p>
				<label>Complemento quantidade (Kilo, litro, lata): </label><?= $this->data['Estoque']['complemento_qt'] ?>
			</p>
			
			<p>
				<label>Data Entrada: </label><?= $this->data['Estoque']['data_entrada'] ?>
			</p>	

			<p>
				<label>Data Vencimento: </label><?= $this->data['Estoque']['data_vencimento'] ?>
			</p>
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->
