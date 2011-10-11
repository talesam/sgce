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
				<label>Quantidade: </label><?= $this->data['Estoque']['quantidade'] ?>
			</p>
			
			<p>
				<label>Data Entrada: </label><?php $data = explode('-',$this->data['Estoque']['data_entrada']); echo $data[2].'/'.$data[1].'/'.$data[0]; ?>
			</p>	

			<p>
				<label>Data Vencimento: </label><?php $data = explode('-',$this->data['Estoque']['data_vencimento']); echo $data[2].'/'.$data[1].'/'.$data[0]; ?>
			</p>
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->
