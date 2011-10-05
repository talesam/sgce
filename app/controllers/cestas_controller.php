<?php
/**
 * CestasController
 * 
 * [Short Description]
 *
 * @package default
 * @author Rafael Malatesta e Tales Mendonça
 * @version $Id$
 * @copyright __MyCompanyName__
 **/

class CestasController extends AppController {
	
	public function admin_index(){
	
		
		$this->set('cestas', $this->paginate());
	}
	
	
	public function admin_gerar_cestas(){
		$defCesta = ClassRegistry::init('Definicoescesta');
		$estoqueCesta = ClassRegistry::init('Estoque');
		$estoqueCesta->recursive = -1;
		$cestas = 0;
		$ok = true;
		while($ok){
			/* Pego todas as definições da cesta  */
			foreach($defCesta->find('all') as $def){

				/* Verifico se possúi itens de definicao da cesta no estoque ordenando pela data de vencimento */
				$estoque = $estoqueCesta->find('first', 
					array(
						'conditions' => 
							array(
								'Estoque.definicoescesta_id' => $def['Definicoescesta']['id'], 
								'Estoque.quantidade >' => 0,
								'Estoque.complemento_qt ' => $def['Definicoescesta']['quantidade']
							), 
							'order' => 
								array(
									'Estoque.data_vencimento' => 'ASC'
								)
							)
						);

				if(!empty($estoque)){
					$estoqueCesta->save(array('id' => $estoque['Estoque']['id'], 'quantidade' => ($estoque['Estoque']['quantidade'] - 1)));
				}else{ $ok = false; }
			}
			
			if($ok == true){
				$cestas++;
			}
			
		}
		
		if($cestas > 0){
			for($i=0; $i < $cestas; $i++){
				$this->Cesta->create();
				$this->Cesta->save(array('data_gerada' => date('Y-m-d H:i:s')));
			}
			$this->Session->setFlash($cestas . ' cestas geradas.', 'flash_success');
		}else{
			$this->Session->setFlash('Não foi possível gerar nenhuma cesta.', 'flash_error');
		}
		
		$this->redirect('index');

		
		
	}
}
?>
