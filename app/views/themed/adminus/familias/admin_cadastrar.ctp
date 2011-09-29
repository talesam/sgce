<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Cadastrar Família</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index')); ?></li></ul>
	</div>		<!-- .block_head ends -->
	


	
	<div class="block_content">
	

		
		
		<?php echo $this->Form->create('Familia'); ?>
			<p>
				<label>Situação</label><br />
				<?php echo $this->Form->input('status', array('div' => false, 'label' => false, 'class' => 'styled', 'type' => 'select', 'options' => array(0 => 'Não apta', 1 => 'Apta'))); ?>
			</p>
			<p>
				<label>Nome do representande</label><br />
				<?php echo $this->Form->input('nome', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			<p>
				<label>Data de Nascimento</label><br />
				<?php echo $this->Form->input('nascimento', array('div' => false, 'label' => false, 'type' => 'text' , 'class' => 'text medium mask-data')); ?>
			</p>
			
			<p>
				<label>Endereço</label><br />
				<?php echo $this->Form->input('endereco', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>	
			
			<p>
				<label>Número</label><br />
				<?php echo $this->Form->input('numero', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>				
			
			<p>
				<label>Complemento</label><br />
				<?php echo $this->Form->input('complemento', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			<p>
				<label>Bairro</label><br />
				<?php echo $this->Form->input('bairro', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			<p>
				<label>Referência</label><br />
				<?php echo $this->Form->input('referencia', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
					
			<p>
				<label>Telefone</label><br />
				<?php echo $this->Form->input('telefone', array('div' => false, 'label' => false, 'class' => 'text medium mask-telefone', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			<p>
				<label>Escolaridade</label><br />
				<?php echo $this->Form->input('escolaridade', array('div' => false, 'label' => false, 'class' => 'styled', 'empty' => 'Selecione', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>

			<p>
				<label>Profissão</label><br />
				<?php echo $this->Form->input('profissao', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>

			<p>
				<label>Ocupação</label><br />
				<?php echo $this->Form->input('ocupacao', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			<p>
				<label>Está trabalhando?</label><br />
				<?php echo $this->Form->input('trabalha', array('div' => false, 'label' => false, 'class' => 'styled', 'type' => 'select', 'options' => array(0 => 'Não', 1 => 'Sim'))); ?>
			</p>		
			
			<p>
				<label>Local do trabalho</label><br />
				<?php echo $this->Form->input('local_trabalho', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>	

			<p>
				<label>Possui benefícios?</label><br />
				<?php echo $this->Form->input('beneficios', array('div' => false, 'label' => false, 'class' => 'styled', 'type' => 'select', 'options' => array(0 => 'Não', 1 => 'Sim'))); ?>
			</p>	

			<p>
				<label>Situação conjugal - companheiro(a)?</label><br />
				<?php echo $this->Form->input('companheiro', array('div' => false, 'label' => false, 'class' => 'styled', 'type' => 'select', 'options' => array(0 => 'Não', 1 => 'Sim'))); ?>
			</p>
			
			<p>
				<label>Possui dependentes?</label><br />
				<?php echo $this->Form->input('dependente', array('div' => false, 'label' => false, 'class' => 'styled', 'type' => 'select', 'options' => array(0 => 'Não', 1 => 'Sim'))); ?>
			</p>
			
			<p>
				<label>Renda Familiar</label><br />
				<?php echo $this->Form->input('renda_familia', array('div' => false, 'label' => false, 'class' => 'text medium mask-moeda', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>		

			<p>
				<label>Renda Percapta</label><br />
				<?php echo $this->Form->input('renda_percapta', array('div' => false, 'label' => false, 'class' => 'text medium mask-moeda', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
		
	
			<p>
				<input type="submit" class="submit small" value="Cadastrar" />
			</p>
		
		<?php echo $this->Form->end(null); ?>
		
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->
