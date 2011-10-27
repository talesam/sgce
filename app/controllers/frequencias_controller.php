<?php
/**
 * Controlador para o cadastro de frequência
 * 
 * @package		sgce
 * @subpackage	sgce.controller
 */
/**
 * @package		sgce
 * @subpackage	sgce.controller
 */
class FrequenciasController extends AppController {
	/**
	 * Executa código antes da renderização da view
	 * 
	 * @return	void
	 */
	public function beforeRender()
	{
		$titulo 	= 'Frequência';
		$modelClass	= $this->modelClass;
		$familias 	= $this->Frequencia->Familia->find('list',array('conditions'=>array('Familia.situacao'=>1)));
		$codigos 	= $this->Frequencia->codigos;
		$this->set(compact('titulo','modelClass','familias','codigos'));
		parent::beforeRender();
	}

	/**
	 * Exibe a primeira página do cadastro
	 * 
	 * Use a variável listaCampos para definir quais campos serão listados
	 * 
	 * @return	void
	 */
	function admin_index($encontroId=null) 
	{
		// se foram postados os ids para exclusão
		if (!empty($this->data))
		{
			$ids = array();
			foreach($this->data['Frequencia']['id'] as $k => $v) if($v == 1) $ids[$k] = $k;
			if (empty($ids))
			{
				$this->Session->setFlash('Marque as frequências que deseja excluir.', 'flash_warning');
			} else
			{
				if($this->Frequencia->deleteAll(array('Frequencia.id' => $ids)))
					$this->Session->setFlash('Frequências removidas.', 'flash_success');
				else
					$this->Session->setFlash('Frequencias não removidas. Por favor, tente novamente.', 'flash_error');
			}
		}

		// recuperando a paginação
		$this->data 	= $this->paginate();

		// re-escrevendo a lista
		$_arrData		= $this->data;
		$codigos		= $this->Frequencia->codigos;
		$listaCampos	= array('Familia.nome','Frequencia.codigo','Frequencia.data');
		foreach($_arrData as $_linha => $_arrModel)
		{
			$this->data[$_linha]['Frequencia']['codigo'] 	= $codigos[$this->data[$_linha]['Frequencia']['codigo']];
		}
		$this->set(compact('listaCampos'));
	}

	/**
	 * Exibe a tela de edição do cadastro
	 * 
	 * @param	integer	$id Primarkey do campo a ser editado
	 * @return	void
	 */
	function admin_editar($id = null) 
	{
		if (!$id && empty($this->data)) 
		{
			$this->Session->setFlash('Frequência inválida.', 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) 
		{
			if ($this->Frequencia->save($this->data)) 
			{
				$this->Session->setFlash('Frequência salva.', 'flash_success');
				$this->redirect(array('action' => 'index', $this->data['Frequencia']['id']));
			} else 
			{
				$this->Session->setFlash('Frequência não pode ser salva. Por favor, tente novamente.', 'flash_error');
			}
		}
		$this->data = $this->Frequencia->read(null, $id);
	}

	/**
	 * Exibe a tela de inclusão do cadastro
	 * 
	 * @return	void
	 */
	function admin_cadastrar() 
	{
		if (!empty($this->data)) 
		{
			$this->Frequencia->create();
			if ($this->Frequencia->save($this->data)) 
			{
				$this->Session->setFlash('Frequência cadastrada', 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else 
			{
				$this->Session->setFlash('Frequência não pode ser cadastrada. Por favor, tente novamente.', 'flash_error');
			}
		}
	}

	/**
	 * Exibe a tela de consulta do cadastro
	 * 
	 * @return	void
	 */
	function admin_consultar($id=0) 
	{
		if (!$id && empty($this->data)) 
		{
			$this->Session->setFlash('Consulta Frequência inválida.', 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
		if (empty($this->data)) 
		{
			$this->data = $this->Frequencia->read(null, $id);
		}
	}

	/**
	 * Executa a exclusão do registro passado
	 * 
	 * @param	integer	$id		Id a ser excluído
	 * @return	void
	 */
	public function admin_excluir($id = null) {
		if(!$id) 
		{
			$this->Session->setFlash('Frequencia inválida', 'flash_error');
			$this->redirect(array('action'=>'index'));
		}
		if($this->Frequencia->delete($id)) {
			$this->Session->setFlash('Frequência removida.', 'flash_success');
			$this->redirect(array('action'=>'index'));
		} else
		{
			$this->Session->setFlash('Frequência não pode ser removida', 'flash_error');
		}
		$this->redirect(array('action' => 'index'));
	}
}
?>
