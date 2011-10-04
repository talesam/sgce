<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Consultar Dependente</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index', $this->data['Dependente']['parente_id'])); ?></li></ul>
	</div>		<!-- .block_head ends -->
	

	<div class="block_content">
			
		<?php echo $this->Form->create('Dependente'); echo $this->Form->input('id'); echo $this->Form->input('parente_id', array('type' => 'hidden')); ?>
		
			<p>
				<label>Nome do dependente: </label><?= $this->data['Dependente']['nome'] ?>
				<br />
				<label>Data de Nascimento: </label><?= $this->data['Dependente']['nascimento'] ?>
			</p>
			
			<!-- Peso, Altura e Situação nutricional é para crianças de até 7 anos -->
			<p>
				<label>Peso: </label><?= $this->data['Dependente']['peso'] ?>
				<br />
				<label>Altura: </label><?= $this->data['Dependente']['altura'] ?>
			</p>
			
			<p>
				<label>Situação Normal? </label><?= $this->data['Dependente']['situacao_nutricional'] ?>
			</p>
			
			<p>
				<label>Parentesco: </label><?= $this->data['Dependente']['parentesco'] ?>
				<br />
				<label>Escolaridade: </label><?= $this->data['Dependente']['escolaridade'] ?>
				<br />
				<label>Nome da escola: </label><?= $this->data['Dependente']['nome_escola'] ?>
				<br />
				<label>Manequim/Calçado: </label><?= $this->data['Dependente']['manequim'] ?>
				<br />
				<label>Ocupação: </label><?= $this->data['Dependente']['ocupacao'] ?>
			</p>
			
			<!-- A renda é apenas para maiores de 16 anos -->
			<p>
				<label>Renda: </label><?= $this->data['Dependente']['renda'] ?>
			</p>		
			
		<?php echo $this->Form->end(null); ?>
		
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->
