<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Editar Dependente</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index', $this->data['Dependente']['parente_id'])); ?></li></ul>
	</div>		<!-- .block_head ends -->
	


	
	<div class="block_content">
	

		
		
		<?php echo $this->Form->create('Dependente'); echo $this->Form->input('id'); echo $this->Form->input('parente_id', array('type' => 'hidden')); ?>
		
			<p>
				<label>Nome do dependente</label><br />
				<?php echo $this->Form->input('nome', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			<p>
				<label>Data de Nascimento</label><br />
				<?php echo $this->Form->input('nascimento', array('div' => false, 'label' => false)); ?>
			</p>
			
			<!-- Peso, Altura e Situação nutricional é para crianças de até 7 anos -->
			<p>
				<label>Peso</label><br />
				<?php echo $this->Form->input('peso', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			<p>
				<label>Altura</label><br />
				<?php echo $this->Form->input('altura', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			<p>
				<label>Situação Normal?</label><br />
				<?php echo $this->Form->input('situacao_nutricional', array('div' => false, 'label' => false, 'class' => 'styled', 'type' => 'select', 'options' => array(0 => 'Não', 1 => 'Sim'))); ?>
			</p>
			
			<p>
				<label>Parentesco</label><br />
				<?php echo $this->Form->input('parentesco', array('div' => false, 'label' => false, 'class' => 'styled', 'type' => 'select', 'options' => array(0 => 'Nenhum', 1 => 'Filho(a) do responsável', 2 => 'Filho(a) do companheiro(a)', 3 => 'Enteado(a) do responsável', 4 => 'Enteado(a) do companheiro(a)', 5 => 'Neto(a) do responsável', 6 => 'Neto(a) do companheiro(a)'))); ?>
			</p>
			
			<p>
				<label>Escolaridade</label><br />
				<?php echo $this->Form->input('escolaridade', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			<p>
				<label>Nome da escola</label><br />
				<?php echo $this->Form->input('nome_escola', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			<p>
				<label>Manequim/Calçado</label><br />
				<?php echo $this->Form->input('manequim', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			<p>
				<label>Ocupação</label><br />
				<?php echo $this->Form->input('ocupacao', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			<!-- A renda é apenas para maiores de 16 anos -->
			<p>
				<label>Renda</label><br />
				<?php echo $this->Form->input('renda', array('div' => false, 'label' => false, 'class' => 'text medium mask-moeda', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>		
			
		
	
			<p>
				<input type="submit" class="submit small" value="Salvar" />
			</p>
		
		<?php echo $this->Form->end(null); ?>
		
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->
