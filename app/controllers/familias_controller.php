<?php
class FamiliasController extends AppController {




	function admin_index() {
			if(!empty($this->data)){
				$ids = array();
			 	foreach($this->data['Familia']['id'] as $k => $v){
					if($v == 1){
						$ids[$k] = $k;
					}
				}
				if(empty($ids)){
					$this->Session->setFlash('Marque os familias para excluir.', 'flash_warning');
				}else{
					if($this->Familia->deleteAll(array('Familia.id' => $ids))){
						$this->Session->setFlash('Familias removidos.', 'flash_success');
					}else{
						$this->Session->setFlash('Familias não removidos. Por favor, tente novamente.', 'flash_error');
					}
				}
			}

			$this->Familia->recursive = -1;
			$this->Familia->Behaviors->Attach('Containable');
			$this->paginate['contain'] = array('Pessoa' => array('conditions' => array('Pessoa.tipo' => 'responsavel')));
			$familias = $this->paginate();

			$this->set('familias', $familias);

		}


		

		
	private function _questionarios(){
			
			$_questionarios = $this->Familia->Questionario->generatetreelist();
			
			$x= null;
			$questionarios = array();
			foreach($_questionarios as $k => $v){
				if($v[0] == '_'){
					$questionarios[$x][$k] = substr($v, 1, strlen($v));
				}else{
					$x = $v;
				}
			}
			
		
			$this->set('questionarios', $questionarios);
	}
		
	
	function admin_cadastrar() {
			if (!empty($this->data)) {
				$this->Familia->create();
				if ($this->Familia->saveAll($this->data)) {
					$this->Session->setFlash('Produto cadastrado', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Produto não pode ser cadastrado. Por favor, tente novamente.', 'flash_error');
				}
				
			}

			$this->_questionarios();
			$this->set('escolaridades', $this->Familia->Pessoa->escolaridades);
		}

		function admin_editar($id = null) {
			if (!$id && empty($this->data)) {
				$this->Session->setFlash('Produto inválido.', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
			if (!empty($this->data)) {
		
				if ($this->Familia->save($this->data)) {
					
			
					
					$this->Session->setFlash('Produto salvo.', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Produto não pode ser salvo. Por favor, tente novamente.', 'flash_error');
				}
			}
			if (empty($this->data)) {
				$this->data = $this->Familia->read(null, $id);
			}
		
			$this->_questionarios();
			$this->set('escolaridades', $this->Familia->Pessoa->escolaridades);
		}


		public function admin_excluir($id = null) {
			if(!$id) {
				$this->Session->setFlash('Produto inválido', 'flash_error');
				$this->redirect(array('action'=>'index'));
			}
			if($this->Familia->delete($id)) {
				$this->Session->setFlash('Produto removido.', 'flash_success');
				$this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash('Produto não pode ser removido', 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
}
?>