<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Questionário</h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index')); ?></li></ul>
	</div>		<!-- .block_head ends -->
	
	<div class="block_content">
	
		<?php echo $this->Form->create('Familia', array('url' => array('action' => 'questionario', $id))); echo $this->Form->input('id'); ?>

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
									echo $this->Form->input('Resposta.'.$x.'.resposta', array('div' => false, 'label' => false, 'type' => 'select', 'multiple' => 'checkbox', 'options' =>  $ops, 'selected' => $ops2, 'class' => 'styled'));
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
					
					<hr />
					<p>
						<input type="submit" class="submit small" value="Salvar" />
					</p>

				<?php echo $this->Form->end(null); ?>
		
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->
