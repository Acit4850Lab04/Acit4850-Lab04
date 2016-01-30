<?php
class Bingo extends Application {
	
	function __construct(){
	    parent::__construct();
	}
	
    public function index(){
		$this->data['pagebody'] = 'justone'; // this is the view we want shown
		$this->load->model('Quotes');		
	    $bingo = $this->Quotes->get(5);
		
		$this->data['what'] = $bingo['what'];
		$this->data['who'] = $bingo['who'];
		$this->data['mug'] = $bingo['mug'];
		$this->render();
	}
}
?>