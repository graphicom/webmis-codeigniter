<?php
class Web extends MY_Controller {
	/* Index */
	public function index(){
		$data['HostUrl'] = @$_SERVER['REQUEST_SCHEME'].'://'.@$_SERVER['SERVER_NAME'];
		$this->MyView('web/index_v',$data);
	}
}
?>