<?php
/**
 * Controlador pai de todos
 * 
 * @package		sgce
 * @subpackage	sgce.controller
 */
/**
 * @package		sgce
 * @subpackage	sgce.controller
 */
class AppController extends Controller {	
	public $components 	= array('Session', 'Email', 'Auth', 'File', 'Acl');
	public $helpers 	= array('Html', 'Form', 'Session', 'Fck');
	public $layout 		= 'admin';
	public $theme 		= 'adminus';
	public $view 		= 'Theme';
	
	/**
	 * Executa código antes de tudo
	 * 
	 * @return	void
	 */
	public function beforeFilter()
	{
		if ($this->params['controller']=='usuarios' && $this->params['action']=='admin_recuperarsenha')
		{
			$this->Auth->enabled = false;
		} else
		{
			//echo pr($this->params);
			$this->Auth->authorize 		= 'actions';
			$this->Auth->userModel 		= 'Usuario';
			$this->Auth->fields 		= array('username' => 'email', 'password' => 'senha');
			$this->Auth->authError 		= 'Desculpe, você precisa se autenticar no sistema para visualizar esta área.';
			$this->Auth->loginError 	= 'E-mail ou senha inválidos ou usuário pode estar inativo. Por favor, tente novamente.';
			$this->Auth->userScope 		= array('Usuario.status' => 1);
			$this->Auth->loginAction 	= array('admin' => true, 'controller' => 'usuarios', 'action' => 'login');
			$this->Auth->logoutRedirect = array('admin' => true, 'controller' => 'usuarios', 'action' => 'login');
			$this->Auth->loginRedirect 	= array('admin' => true, 'controller' => 'familias', 'action' => 'index');
			//$this->Auth->allow('*');
		}
	}

	/**
	 * 
	 * Função responsável por registrar todos eventos do sistema e gravar no banco de dados
	 * em forma de logs.
	 * 
	 * @param	string	$descricao	Descrição a ser gravada
	 * @return	void
	 */
	protected function gravarLog($descricao=null)
	{
		$data = array
		(
			'usuario_id' 	=> $this->Session->read('Auth.Usuario.id'),
			'descricao'		=> $descricao,
			'data'			=> date('Y-m-d H:i:s')
		);
		$log =& ClassRegistry::init('Log');
		$log->create();
		$log->save($data);
	}

	protected function _upload( $file = null , $path = null , $enctype = true , $newName = null ){
        set_time_limit(0);
        $this->File->path_base = ROOT.DS.APP_DIR.DS.WEBROOT_DIR.DS."arquivos".DS . $path.DS;
        $this->File->enctype = $enctype;
        $fileUploaded = $this->File->do_upload( $file , $newName  );
        return $fileUploaded;
    }
	
	protected function _thumb($name,$filename,$maxwidth=176,$maxheight=132, $path='fotos'){
		$base =  ROOT.DS.APP_DIR.DS.WEBROOT_DIR.DS."arquivos".DS . $path.DS;
		$name = $base . $name;
		$system=explode(".",$name);



		if (preg_match("/jpg|jpeg/",strtolower($system[1]))){
			$src_img=imagecreatefromjpeg($name);
		}
		if (preg_match("/png/",strtolower($system[1]))){
			$src_img=imagecreatefrompng($name);
		}
		$width=imageSX($src_img);
		$height=imageSY($src_img);


		if ($height > $width) 
		{   
		$ratio = $maxheight / $height;  
		$newheight = $maxheight;
		$newwidth = $width * $ratio; 
		$writex = round(($maxwidth - $newwidth) / 2);
		$writey = 0;
	}
		else 
		{
		$ratio = $maxwidth / $width;   
		$newwidth = $maxwidth;  
		$newheight = $height * $ratio;   
		$writex = 0;
		$writey = round(($maxheight - $newheight) / 2);
		}

		$dst_img = imagecreatetruecolor($newwidth, $newheight);


		imagecopyresampled($dst_img,$src_img,0,0,0,0,$newwidth, $newheight, $width, $height);

		if (preg_match("/png/",strtolower($system[1])))
		{
			imagepng($dst_img,$base.$filename); 
		} else {
			imagejpeg($dst_img,$base.$filename); 
		}
		imagedestroy($dst_img); 
		imagedestroy($src_img); 
	}

	/**
	 * Deleta um arquivo do sistema
	 * 
	 * @eturn	void
	 */
    protected function _deleteFile( $file , $path )
    {
        $path =  ROOT.DS.APP_DIR.DS.WEBROOT_DIR.DS."arquivos".DS . $path.DS;
        @unlink($path);
    }
}
