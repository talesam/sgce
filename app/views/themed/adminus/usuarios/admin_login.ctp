<div class="block small center login">
	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
					
		<h2>Admin Login</h2>
		
	</div>		<!-- .block_head ends -->
	<div class="block_content">
		
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->Session->flash('auth'); ?>
		<?php echo $this->Form->create('Usuario'); ?>
		<p>
			<label>Usuário:</label> <br />
			<?php echo $this->Form->input('email', array('label' => false, 'div' => false, 'class' => 'text small')); ?>
		</p>
						
		<p>
			<label>Senha:</label> <br />
			<?php echo $this->Form->input('senha', array('label' => false, 'type' => 'password', 'div' => false, 'class' => 'text small')); ?>
		</p>
						
		<p>
			<input type="submit" class="submit" value="Login" /> &nbsp; 
		</p>
		<?php echo $this->Form->end(null); ?>
					
	</div>		<!-- .block_content ends -->					
	<div class="bendl"></div>
	<div class="bendr"></div>

</div>		<!-- .login ends -->
			
			
			
		