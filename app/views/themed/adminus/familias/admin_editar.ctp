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
				<label>Endereço:</label><br />
				<?php echo $this->Form->input('endereco', array('div' => false, 'label' => false, 'class' => 'text medium')); ?>
			</p>	
			
			<p>
				<label>Número:</label><br />
				<?php echo $this->Form->input('numero', array('div' => false, 'label' => false, 'class' => 'text medium')); ?>
			</p>				
			
			<p>
				<label>Complemento:</label><br />
				<?php echo $this->Form->input('complemento', array('div' => false, 'label' => false, 'class' => 'text medium')); ?>
			</p>
			
			<p>
				<label>Bairro:</label><br />
				<?php echo $this->Form->input('bairro', array('div' => false, 'label' => false, 'class' => 'text medium')); ?>
			</p>
			
			<p>
				<label>Referência:</label><br />
				<?php echo $this->Form->input('referencia', array('div' => false, 'label' => false, 'class' => 'text medium')); ?>
			</p>
			
			<p>
				<label>Telefone:</label><br />
				<?php echo $this->Form->input('telefone', array('div' => false, 'label' => false, 'class' => 'text medium mask-telefone')); ?>
			</p>
						
			<p>
				<label>Renda Familiar:</label><br />
				<?php echo $this->Form->input('renda_familia', array('div' => false, 'label' => false, 'class' => 'text medium mask-moeda')); ?>
			</p>		

			<p>
				<label>Renda Percapta:</label><br />
				<?php echo $this->Form->input('renda_percapta', array('div' => false, 'label' => false, 'class' => 'text medium mask-moeda')); ?>
			</p>
			
				<p>
					<label>Situação</label><br />
					<?php echo $this->Form->input('status', array('div' => false, 'label' => false, 'class' => 'styled', 'type' => 'select', 'options' => array(1 => 'Apta', 0 => 'Não aptra'))); ?>
				</p>
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
