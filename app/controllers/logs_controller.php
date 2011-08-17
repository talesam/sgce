<?php
/**
 * LogsController
 * 
 * [Short Description]
 *
 * @package default
 * @author Edinei L. Cipriani
 * @version $Id$
 * @copyright __MyCompanyName__
 **/

class LogsController extends AppController {

	public function admin_index(){
		$this->set('logs', $this->paginate());
	}
}
?>