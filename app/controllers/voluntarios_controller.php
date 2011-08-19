<?php
class VoluntariosController extends AppController {
	
	function admin_index() {
			if(!empty($this->data)){
				$ids = array();
			 	foreach($this->data['Voluntario']['id'] as $k => $v){
					if($v == 1){
						$ids[$k] = $k;
					}
				}
				if(empty($ids)){
					$this->Session->setFlash('Marque os voluntários para excluir.', 'flash_warning');
				}else{
					if($this->Voluntario->deleteAll(array('Voluntário.id' => $ids))){
						$this->Session->setFlash('Voluntário removidos.', 'flash_success');
					}else{
						$this->Session->setFlash('Voluntário não removidos. Por favor, tente novamente.', 'flash_error');
					}
				}
			}

			$this->Voluntario->recursive = 0;
			$this->set('voluntarios', $this->paginate());
		}

	function admin_cadastrar() {
			if (!empty($this->data)) {
				$this->Voluntario->create();
				
				if ($this->Voluntario->save($this->data)) {
					
					$this->gravarLog('Cadastrou voluntário: '. $this->data['Voluntario']['nome']);
					
					$this->Session->setFlash('Voluntário cadastrado', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Voluntário não pode ser cadastrado. Por favor, tente novamente.', 'flash_error');
				}
			}
		}

		function admin_editar($id = null) {
			if (!$id && empty($this->data)) {
				$this->Session->setFlash('Voluntário inválido.', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
			if ($this->Voluntario->save($this->data)) {
				
				$this->gravarLog('Modificou usuário: '. $this->data['Voluntario']['nome']);
				
				$this->Session->setFlash('Voluntário salvo.', 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Voluntário não pode ser salvo. Por favor, tente novamente.', 'flash_error');
			}
			if (empty($this->data)) {
				$this->data = $this->Voluntario->read(null, $id);
			}
		
		}

		public function admin_excluir($id = null) {
			if(!$id) {
				$this->Session->setFlash('Voluntário inválido', 'flash_error');
				$this->redirect(array('action'=>'index'));
			}
			
			$data = $this->Voluntario->read(null, $id);
			if($this->Voluntario->delete($id)) {
				
				$this->gravarLog('Excluiu voluntário: '. $data['Voluntario']['nome']);
				
				$this->Session->setFlash('Voluntário removido.', 'flash_success');
				$this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash('Voluntário não pode ser removido', 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
}
?>
