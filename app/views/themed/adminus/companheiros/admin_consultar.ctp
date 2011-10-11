<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Consultar Companheiro</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index', $this->data['Companheiro']['parente_id'])); ?></li></ul>
	</div>		<!-- .block_head ends -->
	
	
	<div class="block_content">
		
		<?php echo $this->Form->create('Companheiro'); echo $this->Form->input('id'); echo $this->Form->input('parente_id', array('type' => 'hidden')); ?>
		
			<p>
				<label>Nome do companheiro: </label><?= $this->data['Companheiro']['nome'] ?>
			</p>
				
			<p>
				<label>Escolaridade: </label><?php foreach($escolaridades as $_id => $_valor) if ($_id==$this->data['Familia']['escolaridade']) echo $_valor; ?>
				<br />
				<label>Profissão: </label><?= $this->data['Companheiro']['profissao'] ?>
				<br />
				<label>Ocupação: </label><?= $this->data['Companheiro']['ocupacao'] ?>
				<br />
				<label>Local do trabalho: </label><?= $this->data['Companheiro']['local_trabalho'] ?>
			</p>	

			<p>
				<label>Possui benefícios? </label><?= ($this->data['Companheiro']['beneficios']) ? 'Sim' : 'Não'; ?>
			</p>
	
		<?php echo $this->Form->end(null); ?>
		
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->
