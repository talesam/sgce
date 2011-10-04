<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Cadastrar Companheiro</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index', $familiaId)); ?></li></ul>
	</div>		<!-- .block_head ends -->
	

	<div class="block_content">

		<?php echo $this->Form->create('Companheiro', array('url' => array('controller' => 'companheiros', 'action' => 'cadastrar', $familiaId))); echo $this->Form->input('parente_id', array('type' => 'hidden', 'value' => $familiaId)); echo $this->Form->input('companheiro', array('type' => 'hidden', 'value' => 1)); ?>
		
			<p>
				<label>Nome do companheiro</label><br />
				<?php echo $this->Form->input('nome', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
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
				<label>Local do trabalho</label><br />
				<?php echo $this->Form->input('local_trabalho', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>	

			<p>
				<label>Possui benefícios?</label><br />
				<?php echo $this->Form->input('beneficios', array('div' => false, 'label' => false, 'class' => 'styled', 'type' => 'select', 'options' => array(0 => 'Não', 1 => 'Sim'))); ?>
			</p>	

			<p>
				<label>O(a) companheiro(a) é pai ou mãe da(s) criança(s)?</label><br />
				<?php echo $this->Form->input('pai_mae', array('div' => false, 'label' => false, 'class' => 'styled', 'type' => 'select', 'options' => array(0 => 'Não', 1 => 'Sim'))); ?>
			</p>
			
			</div>
		
			
		
	
			<p>
				<input type="submit" class="submit small" value="Cadastrar" />
			</p>
		
		<?php echo $this->Form->end(null); ?>
		
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->
