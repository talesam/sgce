<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Voluntários</h2>
		
		<ul>
			<li><?php echo $this->Html->link('Cadastrar voluntário', array('action' => 'cadastrar')); ?></li>
		</ul>
	</div>		<!-- .block_head ends -->
	
	
	
	<div class="block_content">
	
		<?php echo $this->Form->create('Voluntario'); ?>
		
			<table cellpadding="0" cellspacing="0" width="100%" class="sortable">
			
				<thead>
					<tr>
						<th width="10"><input type="checkbox" class="check_all"/></th>
						<th><?php echo $this->Paginator->sort('nome');?></th>
						<th><?php echo $this->Paginator->sort('E-mail', 'email');?></th>
						<th><?php echo $this->Paginator->sort('telefone');?></th>
						<th><?php echo $this->Paginator->sort('celular');?></th>
						<td>&nbsp;</td>
					</tr>
				</thead>
				
				<tbody>
					<?php foreach ($voluntarios as $voluntario): ?>
					<tr>
						<td><?php echo $this->Form->input('id.'.$voluntario['Voluntario']['id'], array('type' => 'checkbox', 'div' => false, 'label' => false)); ?></td>
						<td><?php echo $voluntario['Voluntario']['nome']; ?>&nbsp;</td>
						<td><?php echo $voluntario['Voluntario']['email']; ?>&nbsp;</td>
						<td><?php echo $voluntario['Voluntario']['telefone']; ?>&nbsp;</td>
						<td><?php echo $voluntario['Voluntario']['celular']; ?>&nbsp;</td>
						<td class="delete">
							<?php echo  $this->Html->link('Consultar', array('action' => 'consultar', $voluntario['Voluntario']['id'])); ?> | 
							<?php echo  $this->Html->link('Editar', array('action' => 'editar', $voluntario['Voluntario']['id'])); ?> | 
							<?php echo $this->Html->link('Excluir', array('action' => 'excluir', $voluntario['Voluntario']['id']), null, 'Tem certeza que deseja excluir?'); ?>
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
			
			<p>
	
			<div class="pagination right">
				<?php echo $this->Paginator->prev('«', array(), null, array('style'=>'display:none;')); ?>
				<?php echo $this->Paginator->numbers(array('separator' => false, 'tag' => 'span', 'class' => 'active')); ?>
				<?php echo $this->Paginator->next('»', array(), null, array('style'=>'display:none;')); ?>
			</div>		<!-- .pagination ends -->
			
		<?php echo $this->Form->end(null);?>
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
</div>		<!-- .block ends -->
