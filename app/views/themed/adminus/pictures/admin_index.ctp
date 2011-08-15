<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Fotos: <?php echo $product['Product']['name']; ?></h2>
		<ul>
			<li><?php echo $this->Html->link('Voltar', array('controller' => 'products', 'action' => 'index')); ?></li>
		</ul>
	</div>		<!-- .block_head ends -->
	
	
	
	<div class="block_content">
	
		<?php echo $this->Form->create('Picture', array('url' => array($product['Product']['id']))); ?>
		
			<table cellpadding="0" cellspacing="0" width="100%" class="sortable">
			
				<thead>
					<tr>
						<th width="10"><input type="checkbox" class="check_all"/></th>
						<th>Thumb</th>
						<th>Imagem</th>
						<td>&nbsp;</td>
					</tr>
				</thead>
				
				<tbody>
					<?php foreach ($pictures as $picture): ?>
					<tr>
						<td><?php echo $this->Form->input('id.'.$picture['Picture']['id'], array('type' => 'checkbox', 'div' => false, 'label' => false)); ?></td>
						<td><?php echo $this->Html->image('/arquivos/pictures/thumb_'.$picture['Picture']['name']); ?></td>
						<td><?php echo $this->Html->link('ver imagem', '/arquivos/pictures/'.$picture['Picture']['name'], array('rel' => 'facebox')); ?></td>
						<td class="delete">
							<?php echo $this->Html->link('Excluir', array('action' => 'delete', $picture['Picture']['id']), null, 'Tem certeza que deseja excluir?'); ?></td>
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