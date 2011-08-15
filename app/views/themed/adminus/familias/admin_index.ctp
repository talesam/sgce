<div class="block">
	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		<h2>Familias</h2>
		<ul>
			<li><?php echo $this->Html->link('Cadastrar Família', array('action' => 'cadastrar')); ?></li>
		</ul>
	</div>
	
	<div class="block_content">
		<?php echo $this->Form->create('Familia'); ?>
		<table cellpadding="0" cellspacing="0" width="100%" class="sortable">
			<thead>
				<tr>
					<th width="10"><input type="checkbox" class="check_all"/></th>
					<th><?php echo $this->Paginator->sort('Situação', 'status'); ?></th>
					<th><?php echo $this->Paginator->sort('nome'); ?></th>
					<th><?php echo $this->Paginator->sort('nascimento'); ?></th>
					<th><?php echo $this->Paginator->sort('telefone'); ?></th>
					<th><?php echo $this->Paginator->sort('bairro'); ?></th>
					<td>&nbsp;</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($familias as $familia): ?>
				<tr>
					<td><?php echo $this->Form->input('id.'.$familia['Familia']['id'], array('type' => 'checkbox', 'div' => false, 'label' => false)); ?></td>
					<td><?php echo $familia['Familia']['status'] ?  'Ativa' : 'Inativa'; ?></td>
					<td><?php echo $this->Html->link($familia['Familia']['nome'], array(), array('rel' => 'facebox')); ?></td>
					<td><?php echo date('d/m/Y', strtotime($familia['Familia']['nascimento'])); ?></td>
					<td><?php echo $familia['Familia']['telefone'] ?: '-'; ?></td>
					<td><?php echo $familia['Familia']['bairro'] ?: '-'; ?></td>
					<td class="delete">
						<?php echo  $this->Html->link('Editar', array('action' => 'editar', $familia['Familia']['id'])); ?> | 
						<?php echo $this->Html->link('Excluir', array('action' => 'excluir', $familia['Familia']['id']), null, 'Tem certeza que deseja excluir?'); ?>
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