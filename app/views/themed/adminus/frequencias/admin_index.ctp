<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Frequências de <?php echo $encontro['Frequencia']['data']; ?></h2>
		
	</div>		<!-- .block_head ends -->
	
	
	<?php echo $this->Form->create('Frequencia'); ?>
	<div class="block_content">
	
		
			<table cellpadding="0" cellspacing="0" width="100%" class="sortable">
			
				<thead>
					<tr>
						<th>Responsável pela família</th>
						<th>Situação</th>
					</tr>
				</thead>
				
				<tbody>
					<?php foreach ($pessoas as $pessoa): ?>
					<tr>
						<td><?php echo $pessoa['Pessoa']['nome']; ?></td>
						<td>
							<?php echo $this->Form->input('codigo', array( 'label' => false, 'class' => 'styled', 'type' => 'select', 'options' => $codigos, 'selected' => isset($frequencias[$pessoa['Pessoa']['familia_id']]) ? $codigos[$frequencias[$pessoa['Pessoa']['familia_id']]] : null, 'empty' => '-')); ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
				
			</table>
			<p>
				<input type="submit" class="submit small" value="Salvar" />
			</p>
		<?php echo $this->Form->end(null); ?>
			
			
		
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
</div>		<!-- .block ends -->
