<div class="block">
	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		<h2>Dependentes</h2>
		<ul>
			<li><?php echo $this->Html->link('Cadastrar Dependente', array('action' => 'cadastrar', $familiaId)); ?></li>
		</ul>
	</div>
	
	<div class="block_content">
		<?php echo $this->Form->create('Dependente'); ?>
		<table cellpadding="0" cellspacing="0" width="100%" class="sortable">
			<thead>
				<tr>
					<th width="10"><input type="checkbox" class="check_all"/></th>
					<th>Nome</th>
					<th>Dependente</th>
					<th>Dependentes</th>
					<th><?php echo $this->Paginator->sort('Situação', 'situacao'); ?></th>
					<td>&nbsp;</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($dependentes as $dependente): ?>
				<tr>
					<td><?php echo $this->Form->input('id.'.$dependente['Dependente']['id'], array('type' => 'checkbox', 'div' => false, 'label' => false)); ?></td>
					<td><?php echo $dependente['Dependente']['nome']; ?></td>
					<td class="delete">
						<?php echo  $this->Html->link('Consultar', array('action' => 'consultar', $dependente['Dependente']['id'])); ?> | 
						<?php echo  $this->Html->link('Editar', array('action' => 'editar', $dependente['Dependente']['id'])); ?> | 
						<?php echo $this->Html->link('Excluir', array('action' => 'excluir', $dependente['Dependente']['id']), null, 'Tem certeza que deseja excluir?'); ?>
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
