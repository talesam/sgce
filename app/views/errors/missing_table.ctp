<?php if ($this->viewVars['code']==500) : ?>
	<?php
	$db = ConnectionManager::getInstance();
	$connected = $db->getDataSource('default');
	if (!$connected->isConnected()) :
		$host	= $db->config->default['host'];
		$banco	= $db->config->default['database'];
		$login	= $db->config->default['login'];
		$senha	= $db->config->default['password'];
	?>
	<div id="txtInstalaBanco" style='align: 0px auto;'>
<p class='sql_tit'>Peça ao Administrador do Banco de dados para executar os comandos abaixo.</p>
<pre class='txt_sql' style='background-color: #FF8989; color: #000;'>
create database <?php echo $banco; ?> CHARACTER SET utf8;
grant all privileges on <?php echo $banco; ?>.* to <?php echo $login."@".$host." identified by \"".$senha."\" with grant option;\n"; ?>
flush privileges;</pre><br />
<p class='sql_obs2'>* Para alterar as configurações do banco de dados, edite o arquivo config/database.php</p>
<p class='sql_obs3'>Cliquei <a href="<?php echo $this->here; ?>">aqui</a> para atualizar.</p>
	</div>
	<?php else : 
	if (isset($_POST))
	{
		// instala todas as tabelas do sistema
		$arq = APP.'..'.DS.'uteis'.DS.'sgce_bd.sql';
		if (!file_exists($arq))
		{
			$this->erro = 'Não foi possível localicar o arquivo '.$arq;
			exit('não foi possível localizar o arquivo '.$arq);
		}
		$handle  = fopen($arq,"r");
		$texto   = fread($handle, filesize($arq));
		$sqls	 = explode(";",$texto);
		fclose($handle);
		// executando sql a sql
		foreach($sqls as $sql)
		{
			if (trim($sql)) $connected->query($sql, $cachequeries=false);
		}
		
		// populandos as tabelas do sistema
		$arq = APP.'..'.DS.'uteis'.DS.'popula.sql';
		if (!file_exists($arq))
		{
			$this->erro = 'Não foi possível localicar o arquivo '.$arq;
			exit('não foi possível localizar o arquivo '.$arq);
		}
		$handle  = fopen($arq,"r");
		$texto   = fread($handle, filesize($arq));
		$sqls	 = explode(";",$texto);
		fclose($handle);
		// executando sql a sql
		foreach($sqls as $sql)
		{
			if (trim($sql)) $connected->query($sql, $cachequeries=false);
		}
		
		header('Location: '.Router::url('/',true));
	}
	?>
	<center>
	<p>Clique no botão abaixo para instalar a SQL que vai popular o banco de dados.</p>
	<form action='' method='post' name='instalSql'>
		<input type='submit' name='btEnviar' id='btEnviar' value='Enviar' />
	</form>
	</center>
	<?php endif ?>
	
<? else : ?>
	<h2><?php __('Missing Database Table'); ?></h2>
	<p class="error">
		<strong><?php __('Error'); ?>: </strong>
		<?php printf(__('Database table %1$s for model %2$s was not found.', true), '<em>' . $table . '</em>',  '<em>' . $model . '</em>'); ?>
	</p>
	<p class="notice">
		<strong><?php __('Notice'); ?>: </strong>
		<?php printf(__('If you want to customize this error message, create %s', true), APP_DIR . DS . 'views' . DS . 'errors' . DS . 'missing_table.ctp'); ?>
	</p>
<?php endif ?>
