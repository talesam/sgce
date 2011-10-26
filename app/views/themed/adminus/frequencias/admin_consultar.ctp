<?php if (!isset($modelClass)) 	$modelClass = Inflector::singularize($this->name); ?>
<?php if (!isset($titulo))		$titulo		= $this->name; ?>
<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Editar <?= $titulo ?></h2>
		<ul><li><?php echo $this->Html->link('VOLTAR', array('action' => 'index')); ?></li></ul>
	</div>		<!-- .block_head ends -->
	

	<div class="block_content">
			<p>
				<label>Responsável Família: </label><?php $valor = $this->data['Familia']['nome'];  echo $valor; ?>
			</p>		
			
			<p>
				<label>Código: </label><?php $valor = $this->data['Frequencia']['codigo'];  echo $codigos[$valor]; ?>
			</p>	
				
			<p>
				<label>Data: </label><?php $valor = $this->data['Frequencia']['data'];  echo date('d/m/Y', strtotime($valor)); ?>
			</p>
		
		
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
		
</div>		<!-- .block ends -->

