<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Consultar Usuário</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index')); ?></li></ul>
	</div>		<!-- .block_head ends -->
	
	
	
	<div class="block_content">
	
		<?php echo $this->Form->create('Usuario'); echo $this->Form->input('id'); ?>
			<p>
				<label>Situação: </label><?= ($this->data['Usuario']['status']) ? 'Ativo' : 'Inativo'; ?>
				<br />
				<label>Prestão de serviço: </label><?= $this->data['Usuario']['prestacao_servico'] ?>
			</p>

			<p>
				<label>Nome: </label><?= $this->data['Usuario']['nome'] ?>
				<br />
				<label>Grupo: </label><?= $this->data['Grupo']['nome'] ?>
				<br />
				<label>E-mail: </label><?= $this->data['Usuario']['email'] ?>
				<br />
				<label>CPF: </label><?= $this->data['Usuario']['cpf'] ?>
			</p>
			
			<p>
				<label>Endereço: </label><?= $this->data['Usuario']['endereco'] ?>
				<br />
				<label>Complemento: </label><?= $this->data['Usuario']['complemento'] ?>
				<br />
				<label>Número: </label><?= $this->data['Usuario']['numero'] ?>
				<br />
				<label>Bairro: </label><?= $this->data['Usuario']['bairro'] ?>
				<br />
				<label>Cidade: </label><?= $this->data['Usuario']['cidade'] ?>
				<br />
				<label>UF: </label><?= $this->data['Usuario']['uf'] ?>
				<br />
				<label>CEP: </label><?= $this->data['Usuario']['cep'] ?>
			</p>
					
			<p>
				<label>Telefone: </label><?= $this->data['Usuario']['telefone'] ?>
				<br />
				<label>Celular: </label><?= $this->data['Usuario']['celular'] ?>
			</p>

		<?php echo $this->Form->end(null); ?>
		
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->
