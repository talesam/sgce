<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Consultar Família</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index')); ?></li></ul>
	</div>		<!-- .block_head ends -->
	

	<div class="block_content">
	
		<?php echo $this->Form->create('Familia'); echo $this->Form->input('id'); ?>

			<p>
				<label>Situação: </label><?= $this->data['Familia']['situacao'] ?>
			</p>
			<p>
				<label>Nome do representande: </label><?= $this->data['Familia']['nome'] ?>
				<br />
				<label>CPF: </label><?= $this->data['Familia']['cpf'] ?>
				<br />
				<label>Data de Nascimento: </label><?= $this->data['Familia']['nascimento'] ?>
			</p>
					
			<p>
				<label>Endereço: </label><?= $this->data['Familia']['endereco'] ?>
				<br />
				<label>Número: </label><?= $this->data['Familia']['numero'] ?>
				<br />
				<label>Complemento: </label><?= $this->data['Familia']['complemento'] ?>
				<br />
				<label>Bairro: </label><?= $this->data['Familia']['bairro'] ?>
				<br />
				<label>Referência: </label><?= $this->data['Familia']['referencia'] ?>
				<br />
				<label>Cidade: </label><?= $this->data['Familia']['cidade'] ?>
			</p>
					
			<p>
				<label>Telefone: </label><?= $this->data['Familia']['telefone'] ?>
			</p>
			
			<p>
				<label>Escolaridade: </label><?= $this->data['Familia']['escolaridade'] ?>
				<br />
				<label>Profissão: </label><?= $this->data['Familia']['profissao'] ?>
				<br />
				<label>Ocupação: </label><?= $this->data['Familia']['ocupacao'] ?>
				<br />
				<label>Local do trabalho: </label><?= $this->data['Familia']['local_trabalho'] ?>
				<br />
				<label>Possui benefícios? </label><?= $this->data['Familia']['beneficios'] ?>
				<br />
				<label>Situação conjugal - companheiro(a)? </label><?= $this->data['Familia']['companheiro'] ?>
				<br />
				<label>Possui dependentes? </label><?= $this->data['Familia']['dependente'] ?>
			</p>
			
			<p>
				<label>Renda Familiar: </label><?= $this->data['Familia']['renda_familiar'] ?>
				<br />
				<label>Renda per capita: </label><?= $this->data['Familia']['renda_percapta'] ?>
			</p>
			
			
		<?php echo $this->Form->end(null); ?>
		
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->
