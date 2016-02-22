<?php 

include_once("actions/Action.inc.php");

class UserJSONAction extends Action {

	/**
	 *
	 * @see Action::run()
	 */	
	public function run() {
		$this->setView(getViewByName("UserJSON"));
		if(isset($_GET['email'])){
			$user = $this->database->getUser($_GET['email']);
			$record['records'] = array($user->getJsonData());
			echo json_encode($record);
		}else{
			echo '0';
		}
	}

}

