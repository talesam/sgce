<div class="block">
	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		<h2>Estoques</h2>
		<ul>
			<li><?php echo $this->Html->link('Cadastrar Estoque', array('action' => 'cadastrar')); ?></li>
		</ul>
	</div>
	
	<div class="block_content">
		<?php echo $this->Form->create('Estoque'); ?>
		<table cellpadding="0" cellspacing="0" width="100%" class="sortable">
			<thead>
				<tr>
					<th width="10"><input type="checkbox" class="check_all"/></th>
					<th><?php echo $this->Paginator->sort('Nome', 'Definicoescesta.nome'); ?></th>
					<th><?php echo $this->Paginator->sort('Quantidade', 'quantidade'); ?></th>
					<th><?php echo $this->Paginator->sort('Complemento', 'Definicoescesta.complemento_qt'); ?></th>
					<th><?php echo $this->Paginator->sort('Data Entrada', 'data_entrada'); ?></th>
					<th><?php echo $this->Paginator->sort('Data Vencimento', 'data_vencimento'); ?></th>
					<td>&nbsp;</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($estoques as $estoque): ?>
				<tr>
					<td><?php echo $this->Form->input('id.'.$estoque['Estoque']['id'], array('type' => 'checkbox', 'div' => false, 'label' => false)); ?></td>
					<td><?php echo $estoque['Definicoescesta']['nome']; ?></td>
					<td><?php echo $estoque['Estoque']['quantidade']; ?></td>
					<td><?php echo $estoque['Definicoescesta']['complemento_qt']; ?> <?php echo $estoque['Definicoescesta']['medida']; ?></td>
					<td><?php echo date('d/m/Y', strtotime($estoque['Estoque']['data_entrada'])); ?></td>
					<td><?php echo date('d/m/Y', strtotime($estoque['Estoque']['data_vencimento'])); ?></td>
					<td class="delete">
						<?php echo $this->Html->link('Consultar', array('action' => 'consultar', $estoque['Estoque']['id'])); ?> | 
						<?php echo $this->Html->link('Editar', array('action' => 'editar', $estoque['Estoque']['id'])); ?> | 
						<?php echo $this->Html->link('Excluir', array('action' => 'excluir', $estoque['Estoque']['id']), null, 'Tem certeza que deseja excluir?'); ?>
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
