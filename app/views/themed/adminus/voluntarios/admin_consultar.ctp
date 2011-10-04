<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Consultar Voluntário</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index')); ?></li></ul>
	</div>		<!-- .block_head ends -->
	
	
	
	<div class="block_content">
	
		<?php echo $this->Form->create('Voluntario'); echo $this->Form->input('id'); ?>
			<p>
				<label>Prestão de serviço: </label><?= $this->data['Voluntario']['prestacao_servico'] ?>
			</p>

			<p>
				<label>Nome: </label><?= $this->data['Voluntario']['nome'] ?>
				<br />
				<label>E-mail: </label><?= $this->data['Voluntario']['email'] ?>
			</p>
			
			<p>
				<label>Endereço: </label><?= $this->data['Voluntario']['endereco'] ?>
				<br />
				<label>Complemento: </label><?= $this->data['Voluntario']['complemento'] ?>
				<br />
				<label>Número: </label><?= $this->data['Voluntario']['numero'] ?>
				<br />
				<label>Bairro: </label><?= $this->data['Voluntario']['bairro'] ?>
				<br />
				<label>Cidade: </label><?= $this->data['Voluntario']['cidade'] ?>
				<br />
				<label>UF: </label><?= $this->data['Voluntario']['uf'] ?>
				<br />
				<label>CEP: </label><?= $this->data['Voluntario']['cep'] ?>
			</p>
					
			<p>
				<label>Telefone: </label><?= $this->data['Voluntario']['telefone'] ?>
				<br />
				<label>Celular</label><?= $this->data['Voluntario']['celular'] ?>
				<br />
			</p>
						
		<?php echo $this->Form->end(null); ?>
		
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->
