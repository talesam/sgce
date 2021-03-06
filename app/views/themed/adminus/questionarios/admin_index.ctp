<div class="block">
	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		<h2>Questionários</h2>
		<ul>
			<li><?php echo $this->Html->link('Cadastrar Pergunta', array('action' => 'cadastrar')); ?></li>
		</ul>
	</div>
	
	<div class="block_content">
		<?php echo $this->Form->create('Questionario'); ?>
		<table cellpadding="0" cellspacing="0" width="100%" class="sortable">
			<thead>
				<tr>
					<th width="10"><input type="checkbox" class="check_all"/></th>
					<th><?php echo $this->Paginator->sort('pergunta'); ?></th>
					<th><?php echo $this->Paginator->sort('tipo'); ?></th>
					<th><?php echo $this->Paginator->sort('extra'); ?></th>
					<td>&nbsp;</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($questionarios as $questionario): ?>
				<tr>
					<td><?php echo $this->Form->input('id.'.$questionario['Questionario']['id'], array('type' => 'checkbox', 'div' => false, 'label' => false)); ?></td>
					<td><?php echo $questionario['Questionario']['pergunta']; ?></td>
					<td><?php echo $opcoes[$questionario['Questionario']['tipo']]; ?></td>
					<td><?php echo $questionario['Questionario']['extra']; ?></td>
					<td class="delete">
						<?php echo $this->Html->link('Editar', array('action' => 'editar', $questionario['Questionario']['id'])); ?> | 
						<?php echo $this->Html->link('Excluir', array('action' => 'excluir', $questionario['Questionario']['id']), null, 'Tem certeza que deseja excluir?'); ?>
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