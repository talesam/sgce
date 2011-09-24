<div class="block withsidebar">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Editar Família</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index')); ?></li></ul>
	</div>		<!-- .block_head ends -->
	


	
	<div class="block_content">
	
		<div class="sidebar">
			<ul class="sidemenu">
				<li><a href="#sb1">Família</a></li>
				<li><a href="#sb2">Pessoas</a></li>
				<li><a href="#sb3">Questionário</a></li>
				<li><a href="#sb3">Cestas</a></li>
			</ul>
		</div>
		
		
		<?php echo $this->Form->create('Familia'); echo $this->Form->input('id'); ?>
		<div class="sidebar_content" id="sb1">
		
			<div style="position: relative; top: -120px;">			
			<p>
				<label>Situação</label><br />
				<?php echo $this->Form->input('status', array('div' => false, 'label' => false, 'class' => 'styled', 'type' => 'select', 'options' => array(0 => 'Não apta', 1 => 'Apta'))); ?>
			</p>
			<p>
				<label>Nome Representande</label><br />
				<?php echo $this->Form->input('Pessoa.nome', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			<p>
				<label>Data de Nascimento</label><br />
				<?php echo $this->Form->input('Pessoa.nascimento', array('div' => false, 'label' => false)); ?>
			</p>
			
			<p>
				<label>Endereço</label><br />
				<?php echo $this->Form->input('Pessoa.endereco', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>	
			
			<p>
				<label>Número</label><br />
				<?php echo $this->Form->input('Pessoa.numero', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>				
			
			<p>
				<label>Complemento</label><br />
				<?php echo $this->Form->input('Pessoa.complemento', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			<p>
				<label>Bairro</label><br />
				<?php echo $this->Form->input('Pessoa.bairro', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			<p>
				<label>Referência</label><br />
				<?php echo $this->Form->input('referencia', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
					
			<p>
				<label>Telefone</label><br />
				<?php echo $this->Form->input('Pessoa.telefone', array('div' => false, 'label' => false, 'class' => 'text medium mask-telefone', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
			
			<p>
				<label>Escolaridade</label><br />
				<?php echo $this->Form->input('Pessoa.escolaridade', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>

			<p>
				<label>Profissão</label><br />
				<?php echo $this->Form->input('Pessoa.profissao', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>

			<p>
				<label>Ocupação</label><br />
				<?php echo $this->Form->input('Pessoa.ocupacao', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
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

<!-- INICIO COMPANHEIRO - Aqui coloca assim, se possui, ou seja, se a pessoa marcar sim, aparece as informações do companheiro para digitar -->

			<p>
				<label>Nome do Companheiro</label><br />
				<?php echo $this->Form->input('nome_companheiro', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>
		
			<p>
				<label>Escolaridade</label><br />
				<?php echo $this->Form->input('escolaridade_companheiro', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>

			<p>
				<label>Profissão</label><br />
				<?php echo $this->Form->input('profissao_companheiro', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>

			<p>
				<label>Ocupação</label><br />
				<?php echo $this->Form->input('ocupacao_companheiro', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>	
			
			<p>
				<label>Está trabalhando?</label><br />
				<?php echo $this->Form->input('trabalha_companheiro', array('div' => false, 'label' => false, 'class' => 'styled', 'type' => 'select', 'options' => array(0 => 'Não', 1 => 'Sim'))); ?>
			</p>		
			
			<p>
				<label>Local do trabalho</label><br />
				<?php echo $this->Form->input('local_trb_companheiro', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
			</p>	

			<p>
				<label>Possui benefícios?</label><br />
				<?php echo $this->Form->input('beneficios_companheiro', array('div' => false, 'label' => false, 'class' => 'styled', 'type' => 'select', 'options' => array(0 => 'Não', 1 => 'Sim'))); ?>
			</p>	

			<p>
				<label>O(a) companheiro(a) é pai ou mãe da(s) criança(s)?</label><br />
				<?php echo $this->Form->input('pai_mae', array('div' => false, 'label' => false, 'class' => 'styled', 'type' => 'select', 'options' => array(0 => 'Não', 1 => 'Sim'))); ?>
			</p>
			
			<p>
				<label>Possui dependentes?</label><br />
				<?php echo $this->Form->input('dependente', array('div' => false, 'label' => false, 'class' => 'styled', 'type' => 'select', 'options' => array(0 => 'Não', 1 => 'Sim'))); ?>
			</p>

<!-- FIM COMPANHEIRO - Aqui coloca assim, se possui, ou seja, se a pessoa marcar sim, aparece as informações do companheiro para digitar -->
<!-- INICIO DEPENDETE - Aqui coloca assim, se possui, ou seja, se a pessoa marcar sim, aparece as informações do companheiro para digitar -->

<!-- FIM DEPENDETE - Aqui coloca assim, se possui, ou seja, se a pessoa marcar sim, aparece as informações do companheiro para digitar -->
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
			</div>	
		</div>
			
		<div class="sidebar_content" id="sb3">
			<div style="position: relative; top: -120px;">
				<p>
					<?php 
					$x = 0;
						foreach($questionarios as $questionario): 
														$xy = null;
							foreach($respostas as $resposta):
								if($resposta['Resposta']['questionario_id'] == $questionario['Questionario']['id']):
									echo $this->Form->input('Resposta.'.$x.'.id', array('value' => $resposta['Resposta']['id'], 'type' => 'hidden'));
									$xy = $resposta['Resposta']['resposta'];
									break;
								endif;
							endforeach;
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
									
														$ops2 = array();
														if($xy){
															$op2 = explode(',', $xy);
															foreach($op2 as $k2 => $v2){
																$ops2[trim($v2)] = trim($v2);
															}
														}
									echo $this->Form->input('Resposta.'.$x.'.resposta', array('div' => false, 'label' => false, 'options' => $ops, 'selected' => $ops2, 'class' => 'styled'));
									break;
								}
								
								case 'multiple': {
									$op = explode(',', $questionario['Questionario']['extra']);
									foreach($op as $k => $v){
										$ops[trim($v)] = trim($v);
									}
									$ops2 = array();
									if($xy){
										$op2 = explode(',', $xy);
										foreach($op2 as $k2 => $v2){
											$ops2[trim($v2)] = trim($v2);
										}
									}
									echo $this->Form->input('Resposta.'.$x.'.resposta', array('div' => false, 'label' => false,  'type' => 'select', 'multiple' => 'checkbox', 'options' =>  $ops, 'selected' => $ops2, 'class' => 'styled'));
									break;
								}
								
								
								case 'text': {
									echo $this->Form->input('Resposta.'.$x.'.resposta', array('div' => false, 'label' => false,  'value' => $xy, 'class' => 'text medium'));
									break;
								}
								
								case 'checkbox': {
									
									echo $this->Form->input('Resposta.'.$x.'.resposta', array('div' => false, 'label' => false,  'checked' => $xy ? true: false, 'type' => 'checkbox'));
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
	
			<p style="margin-left: 210px;">
				<input type="submit" class="submit small" value="Salvar" />
			</p>
		<?php echo $this->Form->end(null); ?>
		
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->
