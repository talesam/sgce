<div class="block">
	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		<h2>Frequência</h2>
		
		<ul>
			<li><?php echo $this->Html->link('Cadastrar Frequencia', array('controller' => 'frequencias', 'action' => 'cadastrar')); ?></li>
		</ul>
	</div>
	
	<div class="block_content">
	
		<table cellpadding="0" cellspacing="0" width="100%" class="sortable">
			<thead>
				<tr>
					<?php foreach($listaCampos as $_campo): $c = explode('.',$_campo) ?>
					<th>
						<?php echo $this->Paginator->sort($c['1']); ?>
					</th>
					<?php endforeach ?>
					<th colspan='2'></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($this->data as $_linha => $_arrModel): ?>
				<tr>
					
					<?php foreach($listaCampos as $_campo): $c = explode('.',$_campo) ?>
					<td>
						<?php $valor = $_arrModel[$c['0']][$c['1']]; if ($c['1']=='data') $valor=date('d/m/Y',strtotime($valor)); ?>
						<?php echo $valor; ?>
					</td>
					<?php endforeach; ?>
					<td class="delete">
						<?php echo $this->Html->link('Consultar', 	array('action' => 'consultar', 	$_arrModel['Frequencia']['id'])); ?> | 
						<?php echo $this->Html->link('Editar', 		array('action' => 'editar', 	$_arrModel['Frequencia']['id'])); ?> | 
						<?php echo $this->Html->link('Excluir', 	array('action' => 'excluir', 	$_arrModel['Frequencia']['id']), null, 'Tem certeza que deseja excluir?'); ?>
					</td>

				</tr>
				<?php endforeach; ?>
			</tbody>	
		</table>
		
		<div class="tableactions">


			<div style="float:right;">
			<?php 
				echo $this->Paginator->counter(
					array(
						'format' => __('Página %page% de %pages%, Mostrar %current% registros de um total de %count%, a partir de registros %start%, termina em %end%', true))
					);
			?>
			</div>
		</div>		<!-- .tableactions ends -->
		
		<div class="pagination right">
				<?php echo $this->Paginator->prev('«', array(), null, array('style'=>'display:none;')); ?>
				<?php echo $this->Paginator->numbers(array('separator' => false, 'tag' => 'span', 'class' => 'active')); ?>
				<?php echo $this->Paginator->next('»', array(), null, array('style'=>'display:none;')); ?>
		</div>
			

	</div>
	
	<div class="bendl"></div>
	<div class="bendr"></div>
</div>
<?= pr($this->data); ?>
