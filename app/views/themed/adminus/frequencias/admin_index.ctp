<?php if (!isset($modelClass)) 	$modelClass = Inflector::singularize($this->name); ?>
<?php if (!isset($titulo))		$titulo		= $this->name; ?>
<?php if (!isset($campos))		$campos		= array(); ?>
<div class="block">
	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		<h2><?= $titulo ?></h2>
		<ul>
			<li><?php echo $this->Html->link('Cadastrar '.$titulo, array('controller' => $this->params['controller'], 'action' => 'cadastrar')); ?></li>
		</ul>
	</div>
	
	<div class="block_content">
		<?php echo $this->Form->create($modelClass); ?>
		<table cellpadding="0" cellspacing="0" width="100%" class="sortable">
			<thead>
				<tr>
					<th width="10"><input type="checkbox" class="check_all"/></th>
					<?php foreach($listaCampos as $_campo): $c = explode('.',$_campo) ?>
					<th>
						<?php $valor = (isset($campos[$c['0']][$c['1']]['input']['label']['text'])) ? $campos[$c['0']][$c['1']]['input']['label']['text'] : $c['1']; ?>
						<?php echo $this->Paginator->sort($valor); ?>
					</th>
					<?php endforeach ?>
					<th colspan='2'></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($this->data as $_linha => $_arrModel): ?>
				<tr>
					<td><?php echo $this->Form->input('id.'.$_arrModel[$modelClass]['id'], array('type' => 'checkbox', 'div' => false, 'label' => false)); ?></td>
					<?php foreach($listaCampos as $_campo): $c = explode('.',$_campo) ?>
					<td>
						<?php $valor = $_arrModel[$c['0']][$c['1']]; if ($c['1']=='data') $valor=date('d/m/Y',strtotime($valor)); ?>
						<?php echo $valor; ?>
					</td>
					<?php endforeach; ?>
					<td class="delete">
						<?php echo $this->Html->link('Consultar', 	array('action' => 'consultar', 	$_arrModel[$modelClass]['id'])); ?> | 
						<?php echo $this->Html->link('Editar', 		array('action' => 'editar', 	$_arrModel[$modelClass]['id'])); ?> | 
						<?php echo $this->Html->link('Excluir', 	array('action' => 'excluir', 	$_arrModel[$modelClass]['id']), null, 'Tem certeza que deseja excluir?'); ?>
					</td>

				</tr>
				<?php endforeach; ?>
			</tbody>	
		</table>
		
		<div class="tableactions">
			<select>
				<option>Acões</option>
				<option>Excluir</option>
			</select>
			
			<input type="submit" class="submit tiny" value="Aplicar" />

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
			
	<?php echo $this->Form->end(null);?>
	</div>
	
	<div class="bendl"></div>
	<div class="bendr"></div>
</div>
