<?php
class UsuariosController extends AppController {
	
	public function login(){
		
	}
	
	public function recuperarsenha(){
		if ( !empty($this->data) ) {
			
			$usuario = $this->Usuario->findByEmail($this->data['Usuario']['email']);

			if(!empty($usuario)){
						# Enviando e-mail...
						$nome = 'SGCE - Sistema Gerencial Casa Espírita';
						$email  = 'talesam@gmail.com';
						$senha = substr(String::uuid(),0, 6);
						$mensagem = nl2br("Olá, sua nova senha para acesso ao site é: ". $senha."\nAtenciosamente, administração do site.");

						$assunto = 'Nova senha - SGCE';
						
						$a = array('id' => $usuario['Usuario']['id'], 'senha' => $this->Auth->password($senha) );
						$this->Usuario->save($a);
						
						$this->Email->to = $this->data['Usuario']['email'];
						$this->Email->subject = $assunto;
						$this->Email->from = $email.'<'.$email.'>';
						$this->Email->fromName = $nome;

						$this->Email->sendAs = 'both'; // html, text, both


						if ( $this->Email->send($mensagem) ) {
							$this->flash( 'Sua nova senha foi enviada com sucesso para seu e-mail.', '/usuarios/login',3);
						} else {
							$this->flash( 'Houve algum problema para recuperar sua senha. Por favor tente novamente mais tarde.', '/usuarios/recuperarsenha', 3 );
						}
			}else{
					$this->flash( 'Não encontramos seu e-mail em nossos cadastros. Por favor, tente novamente mais tarde.', '/usuarios/recuperarsenha', 3 );
			}
		

		}
	}
	
	public function logout(){
		$this->redirect($this->Auth->logout());
	}
	
	public function admin_login(){
		//pr($this->data); die();
	}
	
	public function admin_logout(){
		$this->redirect($this->Auth->logout());
	}

	function admin_index() {
			if(!empty($this->data)){
				$ids = array();
			 	foreach($this->data['Usuario']['id'] as $k => $v){
					if($v == 1){
						$ids[$k] = $k;
					}
				}
				if(empty($ids)){
					$this->Session->setFlash('Marque os usuários para excluir.', 'flash_warning');
				}else{
					if($this->Usuario->deleteAll(array('Usuario.id' => $ids))){
						$this->Session->setFlash('Usuários removidos.', 'flash_success');
					}else{
						$this->Session->setFlash('Usuários não removidos. Por favor, tente novamente.', 'flash_error');
					}
				}
			}

			$this->Usuario->recursive = 0;
			$this->set('usuarios', $this->paginate());
		}

	function admin_cadastrar() {
			if (!empty($this->data)) {
				$this->Usuario->create();
				if(!empty($this->data['Usuario']['temp_senha'])){
					$this->data['Usuario']['senha'] = $this->Auth->password($this->data['Usuario']['temp_senha']);	
				}
				
				if ($this->Usuario->save($this->data)) {
					
					$this->gravarLog('Cadastrou usuário: '. $this->data['Usuario']['nome']);
					
					$this->Session->setFlash('Usuário cadastrado', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Usuário não pode ser cadastrado. Por favor, tente novamente.', 'flash_error');
				}
			}
		}

		function admin_editar($id = null) {
			if (!$id && empty($this->data)) {
				$this->Session->setFlash('Usuário inválido.', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
			if (!empty($this->data)) {
				if(!empty($this->data['Usuario']['temp_password'])){
					$this->data['Usuario']['password'] = $this->Auth->password($this->data['Usuario']['temp_password']);	
				}
				if ($this->Usuario->save($this->data)) {
					
					$this->gravarLog('Modificou usuário: '. $this->data['Usuario']['nome']);
					
					$this->Session->setFlash('Usuário salvo.', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Usuário não pode ser salvo. Por favor, tente novamente.', 'flash_error');
				}
			}
			if (empty($this->data)) {
				$this->data = $this->Usuario->read(null, $id);
			}
		
		}

		public function admin_excluir($id = null) {
			if(!$id) {
				$this->Session->setFlash('Usuário inválido', 'flash_error');
				$this->redirect(array('action'=>'index'));
			}
			
			$data = $this->Usuario->read(null, $id);
			if($this->Usuario->delete($id)) {
				
				$this->gravarLog('Excluiu usuário: '. $data['Usuario']['nome']);
				
				$this->Session->setFlash('Usuario removido.', 'flash_success');
				$this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash('Usuario não pode ser removido', 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
}
?>
