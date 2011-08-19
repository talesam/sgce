<?php
/**
 * LogsController
 * 
 * [Short Description]
 *
 * @package default
 * @author Rafael Malatesta e Tales Mendonça
 * @version $Id$
 * @copyright __MyCompanyName__
 **/

class LogsController extends AppController {

	public function admin_index(){
		$this->paginate['order'] = array('Log.data' => 'desc');
		$this->set('logs', $this->paginate());
	}
}
?>
