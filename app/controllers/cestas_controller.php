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
		
			$estoque =& ClassRegistry::init('Estoque');
			$mantimento =& ClassRegistry::init('Mantimento');
			$mantimentos = $mantimento->find('all');

			$totalCestas = 0;
			$ok = true;

			while($ok){
				$cesta = array();
				foreach($mantimentos as $m){
					$total_estoque = $estoque->find('count', array('conditions' => array('Estoque.mantimento_id' => $m['Mantimento']['id'], 'Estoque.data_saida' => null)));
					if($total_estoque >= $m['Mantimento']['quantidade']){
						$estoques_para_cesta = $estoque->find('all', array(
							'limit' => $m['Mantimento']['quantidade'],
							'order' => array('Estoque.data_vencimento' => 'asc'),
							'conditions' => array(
								'Estoque.mantimento_id' => $m['Mantimento']['id'], 
								'Estoque.data_saida' => null) 
							));


						foreach($estoques_para_cesta as $estoque_para_cesta){
							$cesta['Estoque'][] = array('id' => $estoque_para_cesta['Estoque']['id']);
							$data[] = array('id' =>  $estoque_para_cesta['Estoque']['id'], 'data_saida' => date('Y-m-d H:i:s'));

						}
					}else{
						$ok = false;
					}
				}

				if($ok){
					$cesta['Cesta']['data_gerado'] = date('Y-m-d H:i:s');
					//pr($data); die();
					foreach($data as $d){
						$estoque->save(array('id' => $d['id'], 'data_saida' => $d['data_saida']));
					}
					$this->Cesta->saveAll($cesta);
					$totalCestas++;
				}
				unset($data);

			}
			if($totalCestas > 0){
				$this->Session->setFlash($totalCestas .' nova(s) cesta(s) gerada(s)', 'flash_success');
			}else{
				$this->Session->setFlash('Nenhuma nova cesta gerada.', 'flash_error');
			}
			$this->redirect($this->referer());
	}
	
}
?>
