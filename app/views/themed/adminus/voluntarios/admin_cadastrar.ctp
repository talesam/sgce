<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Cadastrar Voluntário</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index')); ?></li></ul>
	</div>		<!-- .block_head ends -->
	
	
	
	<div class="block_content">
	
		<?php echo $this->Form->create('Voluntario'); ?>
			<p>
				<label>Nome (Obrigatório)</label><br />
				<?php echo $this->Form->input('nome', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			

			<p>
				<label>E-mail</label><br />
				<?php echo $this->Form->input('email', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			
			<p>
				<label>Endereço</label><br />
				<?php echo $this->Form->input('endereco', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			<p>
				<label>Complemento</label><br />
				<?php echo $this->Form->input('complemento', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
		
			<p>
				<label>Número</label><br />
				<?php echo $this->Form->input('numero', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			<p>
				<label>Bairro</label><br />
				<?php echo $this->Form->input('bairro', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			<p>
				<label>Cidade</label><br />
				<?php echo $this->Form->input('cidade', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			
			<p>
				<label>UF</label><br />
				<?php echo $this->Form->input('uf', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			
			
			<p>
				<label>CEP</label><br />
				<?php echo $this->Form->input('cep', array('div' => false, 'label' => false, 'class' => 'text medium mask-cep', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
					
			<p>
				<label>Telefone</label><br />
				<?php echo $this->Form->input('telefone', array('div' => false, 'label' => false,  'class' => 'text medium mask-telefone', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			<p>
				<label>Celular</label><br />
				<?php echo $this->Form->input('celular', array('div' => false, 'label' => false,  'class' => 'text medium mask-telefone', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			
			<p>
				<label>Situação</label><br />
				<?php echo $this->Form->input('status', array('div' => false, 'label' => false, 'class' => 'styled', 'type' => 'select', 'options' => array(1 => 'Ativo', 0 => 'Inativo'))); ?>
			</p>
			
		
			<p>
				<label>Prestão de serviço (Obrigatório)</label><br />
				<?php echo $this->Form->input('prestacao_servico', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
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
