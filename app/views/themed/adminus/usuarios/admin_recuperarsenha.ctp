<?php echo $this->Form->create('Usuario'); echo $this->Form->input('id'); ?>

<p>
<label>E-mail (Obrigatório)</label><br />
<?php echo $this->Form->input('email', array('div' => false, 'label' => false, 'class' => 'text medium', 'error' => array('wrap' => 'span', 'class' => 'note error'))); ?>
</p>

<hr />
	
<p><input type="submit" class="submit small" value="Enviar" /></p>

<?php echo $this->Form->end(null); ?>
