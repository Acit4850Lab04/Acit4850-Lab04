<?php
class First extends Application {
	
	function __construct(){
	    parent::__construct();
	}
	
    public function index()
    {
		$this->data['pagebody'] = 'justone'; // this is the view we want shown
		$this->load->model('Quotes');		
	    $first = $this->Quotes->first();
		
		$this->data['what'] = $first['what'];
		$this->data['who'] = $first['who'];
		$this->data['mug'] = $first['mug'];
		$this->render();
	}
}
?>