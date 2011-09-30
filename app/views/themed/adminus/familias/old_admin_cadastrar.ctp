<div class="block withsidebar">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Cadastrar Família</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index')); ?></li></ul>
	</div>		<!-- .block_head ends -->
	


	
	<div class="block_content">
	
		<div class="sidebar">
			<ul class="sidemenu">
				<li><a href="#sb1">Responsável</a></li>
				<li><a href="#sb2">Companheiro</a></li>
				<li><a href="#sb3">Dependente</a></li>
				<li><a href="#sb4">Questionário</a></li>
				<li><a href="#sb5">Cestas</a></li>
			</ul>
		</div>
		
		
		<?php echo $this->Form->create('Familia'); ?>
		<div class="sidebar_content" id="sb1">
			<div style="position: relative; top: -120px;">
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
				<?php echo $this->Form->input('Pessoa.nascimento', array('div' => false, 'label' => false)); ?>
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
				<?php echo $this->Form->input('escolaridade', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
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
			
			</div>
		</div>
<!-- FIM RESPONSAVEL -->

<!-- INICIO COMPANHEIRO -->
		<div class="sidebar_content" id="sb2">
			<div style="position: relative; top: -120px;">
			<p>
				<label>Nome</label><br />
				<?php echo $this->Form->input('nome', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
		
			<p>
				<label>Escolaridade</label><br />
				<?php echo $this->Form->input('escolaridade', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
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
				<?php echo $this->Form->input('local_trbalho', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
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
		</div>
<!-- FIM COMPANHEIRO - Aqui coloca assim, se possui, ou seja, se a pessoa marcar sim, aparece as informações do companheiro para digitar -->

<!-- INICIO DEPENDENTE -->
		<div class="sidebar_content" id="sb3">
			<div style="position: relative; top: -120px;">		
			<p>
				<label>Quantidade da dependentes</label><br />
				<?php echo $this->Form->input('qt_dependente', array('div' => false, 'label' => false, 'class' => 'styled', 'type' => 'select', 'options' => array(1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', 6 => '6', 7 => '7'))); ?>
			</p>

			<p>
				<label>Nome</label><br />
				<?php echo $this->Form->input('nome', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			<p>
				<label>Data de Nascimento</label><br />
				<?php echo $this->Form->input('Pessoa.nascimento', array('div' => false, 'label' => false)); ?>
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
				<?php echo $this->Form->input('parentesco', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			<p>
				<label>Escolaridade</label><br />
				<?php echo $this->Form->input('escolaridade', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			<p>
				<label>Estuda?</label><br />
				<?php echo $this->Form->input('estuda', array('div' => false, 'label' => false, 'class' => 'styled', 'type' => 'select', 'options' => array(0 => 'Não', 1 => 'Sim'))); ?>
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
			</div>
		</div>		
			
<!-- FIM DEPENDENTE -->

<!-- INICIO QUESTIONARIO -->			
		<div class="sidebar_content" id="sb4">
			<div style="position: relative; top: -120px;">
				<p>
					<?php 
					$x = 0;
						foreach($questionarios as $questionario): 
							echo $this->Form->input('Resposta.'.$x.'.questionario_id', array('value' => $questionario['Questionario']['id'], 'type' => 'hidden'));

							echo '<p>';
							$op = null;
							$ops = null;
							
							echo '<label>'.$questionario['Questionario']['pergunta'].'</label><br />';
							switch($questionario['Questionario']['tipo']){
								case 'select': {
									
									$op = explode(',', $questionario['Questionario']['extra']);
									foreach($op as $k => $v){
										$ops[trim($v)] = trim($v);
									}
									echo $this->Form->input('Resposta.'.$x.'.resposta', array('div' => false, 'label' => false, 'options' => $ops, 'class' => 'styled'));
									break;
								}
								
								case 'multiple': {
									$op = explode(',', $questionario['Questionario']['extra']);
									foreach($op as $k => $v){
										$ops[trim($v)] = trim($v);
									}
									echo $this->Form->input('Resposta.'.$x.'.resposta', array('div' => false, 'label' => false,  'type' => 'select', 'multiple' => 'checkbox', 'options' =>  $ops, 'class' => 'styled'));
									break;
								}
								
								
								case 'text': {
									echo $this->Form->input('Resposta.'.$x.'.resposta', array('div' => false, 'label' => false,   'class' => 'text medium'));
									break;
								}
								
								case 'checkbox': {
									echo $this->Form->input('Resposta.'.$x.'.resposta', array('div' => false, 'label' => false,   'type' => 'checkbox'));
									break;
								}
							}
							
							$x++;
	echo '</p>';
						endforeach;
					
					?>
				</p>
			</div>
		</div>
<!-- FIM QUESTIONARIO -->
	
			<p style="margin-left: 210px;">
				<input type="submit" class="submit small" value="Cadastrar" />
			</p>
		<?php echo $this->Form->end(null); ?>
		
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->
