<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="X-UA-Compatible" content="IE=7" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Admin | SGCE</title>
	
	<?php 
		echo $this->Html->css(array('style', 'jquery.wysiwyg', 'facebox', 'visualize', 'date_input')); 
	
	?>
	<!--[if lt IE 8]><?php echo $this->Html->css('ie'); ?><![endif]-->
	<!--[if IE]><?php echo $this->Html->script('excanvas'); ?><![endif]-->
	<script> var appdir = '<?php echo $this->Html->webroot('/'); ?>'; </script>
	<?php
		echo $this->Html->script(
			array(
				'jquery',
				'jquery.img.preload',
				'jquery.filestyle.mini',
				'jquery.wysiwyg',
				'jquery.date_input.pack',
				'facebox',
				'jquery.visualize',
				'jquery.visualize.tooltip',
				'jquery.select_skin',
				'jquery.tablesorter.min',
				'ajaxupload',
				'jquery.pngfix',
				'custom',
				'masked',
				'price'
			)
		);
	?>
	<script>
		$.facebox.settings.closeImage = '<?php echo $this->Html->url('/theme/adminus/images/close.png'); ?>';
		$.facebox.settings.loadingImage = '<?php echo $this->Html->url('/theme/adminus/images/ajax-loader.gif'); ?>';
		
		$(function(){
			$(".mask-telefone").mask("(99) 9999-9999");
			$(".mask-cep").mask("99999-999");
			$(".mask-cpf").mask("999.999.999-99");
			
			$('.mask-moeda').priceFormat({
			    prefix: '',
			    centsSeparator: ',',
			    thousandsSeparator: '.'
			});
		});
		
	</script>
	<style>small { display: block; margin-left: 5px !important;}</style>
</head>

<body>

	<div id="hld">
	
		<div class="wrapper">		<!-- wrapper begins -->
	
		<?php if($this->params['action'] != 'admin_login'): ?>
			
			<div id="header">
				<div class="hdrl"></div>
				<div class="hdrr"></div>
				
				<h1><?php echo $this->Html->link('SGCE', '/'); ?></h1>
				
				<ul id="nav">					

					<li><?php echo $this->Html->link('Cadastros', 'javascript:;'); ?>
						<ul>
							<li><?php echo $this->Html->link('Usuário', array('controller' => 'usuarios', 'action' => 'cadastrar')); ?></li>
							<li><?php echo $this->Html->link('Voluntário', array('controller' => 'voluntarios', 'action' => 'cadastrar')); ?></li>

							<li><?php echo $this->Html->link('Familia', array('controller' => 'familias', 'action' => 'cadastrar')); ?></li>
							<li><?php echo $this->Html->link('Encontro', array('controller' => 'encontros', 'action' => 'cadastrar')); ?></li>

							<li><?php echo $this->Html->link('Mantimento', array('controller' => 'mantimentos', 'action' => 'cadastrar')); ?></li>
							<li><?php echo $this->Html->link('Estoque', array('controller' => 'estoques', 'action' => 'cadastrar')); ?></li>
						</ul>
					</li>

					<li><?php echo $this->Html->link('Consultas', 'javascript:;'); ?>
						<ul>
							<li><?php echo $this->Html->link('Usuário', array('controller' => 'usuarios', 'action' => 'index')); ?></li>
							<li><?php echo $this->Html->link('Voluntário', array('controller' => 'voluntarios', 'action' => 'index')); ?></li>
							
							<li><?php echo $this->Html->link('Família', array('controller' => 'familias', 'action' => 'index')); ?></li>
							<li><?php echo $this->Html->link('Encontro', array('controller' => 'encontros', 'action' => 'index')); ?></li>
							
							<li><?php echo $this->Html->link('Mantimento', array('controller' => 'mantimentos', 'action' => 'index')); ?></li>
							<li><?php echo $this->Html->link('Estoque', array('controller' => 'estoques', 'action' => 'index')); ?></li>
						</ul>
					</li>
					
					<li><?php echo $this->Html->link('Relatórios', 'javascript:;'); ?>
						<ul>
							<li><?php echo $this->Html->link('Voluntário', array('controller' => 'voluntarios', 'action' => 'index')); ?></li>
												
							<li><?php echo $this->Html->link('Vencimento Matrícula', array('controller' => 'familias', 'action' => 'index')); ?></li>
							<li><?php echo $this->Html->link('Família Apta', array('controller' => 'familias', 'action' => 'index')); ?></li>
							
							<li><?php echo $this->Html->link('Vencimento Mantimento', array('controller' => 'mantimentos', 'action' => 'index')); ?></li>
							<li><?php echo $this->Html->link('Cesta Disponível', array('controller' => 'cestas', 'action' => 'index')); ?></li>
							<li><?php echo $this->Html->link('Item Pendente Cesta', array('controller' => 'cestas', 'action' => 'index')); ?></li>
						</ul>
					</li>					

					<li><?php echo $this->Html->link('Cestas', array('controller' => 'cestas', 'action' => 'index')); ?> </li>

					<li><?php echo $this->Html->link('Logs', array('controller' => 'logs', 'action' => 'index')); ?> </li>
				</ul>
				
			<p class="user">Olá, <a href="#"><?php echo $this->Session->read('Auth.Usuario.nome'); ?></a> | <?php echo $this->Html->link('Sair', array('controller' => 'usuarios', 'action' => 'logout')); ?></p>
			</div>		<!-- #header ends -->
			
			
			
			

			
			<?php echo $this->Session->flash(); ?>
			
			
			
			<?php echo $content_for_layout; ?>

			
			
			
			
			
			
			<?php else: echo $content_for_layout; endif; ?>

			
			<div id="footer">
			
				<p class="left"><a href="#">SGCE</a></p>
							<?php echo $this->element('sql_dump'); ?>
			</div>
		
		
		</div>						<!-- wrapper ends -->
		
	</div>		<!-- #hld ends -->

</body>
</html>
