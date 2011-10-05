<div class="block">
	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		<h2>Definições de cestas</h2>
		<ul>
			<li><?php echo $this->Html->link('Cadastrar Definicoescesta', array('action' => 'cadastrar')); ?></li>
		</ul>
	</div>
	
	<div class="block_content">
		<?php echo $this->Form->create('Definicoescesta'); ?>
		<table cellpadding="0" cellspacing="0" width="100%" class="sortable">
			<thead>
				<tr>
					<th width="10"><input type="checkbox" class="check_all"/></th>
					<th><?php echo $this->Paginator->sort('nome'); ?></th>
					<th><?php echo $this->Paginator->sort('tipo'); ?></th>
					<th><?php echo $this->Paginator->sort('Quantidade para cesta', 'quantidade'); ?></th>
					<th><?php echo $this->Paginator->sort('medida'); ?></th>
					<th>Total no estoque</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($definicoescestas as $definicoescesta): ?>
				<tr>
					<td><?php echo $this->Form->input('id.'.$definicoescesta['Definicoescesta']['id'], array('type' => 'checkbox', 'div' => false, 'label' => false)); ?></td>
					<td><?php echo $definicoescesta['Definicoescesta']['nome']; ?></td>
					<td><?php echo $tipos[$definicoescesta['Definicoescesta']['tipo']]; ?></td>
					<td><?php echo $definicoescesta['Definicoescesta']['quantidade']; ?></td>
					<td><?php echo $medidas[$definicoescesta['Definicoescesta']['medida']]; ?></td>
					<td><?php echo $this->Html->link($estoque[$definicoescesta['Definicoescesta']['id']][0]['total'], array('action' => 'index', 'controller' => 'estoques', $definicoescesta['Definicoescesta']['id'])); ?></td>
					<td class="delete">
						<?php echo $this->Html->link('Consultar', array('action' => 'consultar', $definicoescesta['Definicoescesta']['id'])); ?> | 
						<?php echo $this->Html->link('Editar', array('action' => 'editar', $definicoescesta['Definicoescesta']['id'])); ?> | 
						<?php echo $this->Html->link('Excluir', array('action' => 'excluir', $definicoescesta['Definicoescesta']['id']), null, 'Tem certeza que deseja excluir?'); ?>
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
