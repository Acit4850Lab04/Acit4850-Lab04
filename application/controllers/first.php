<?php
class First extends Application {
	
	function __construct(){
	    parent::__construct();
	}
	
    public function index(){
		$this->data['pagebody'] = 'justone'; // this is the view we want shown
		$this->load->model('Quotes');		
	    $first = $this->Quotes->first();
		
		$this->data['what'] = $first['what'];
		$this->data['who'] = $first['who'];
		$this->data['mug'] = $first['mug'];
		$this->render();
	}
	
	public function zzz(){
		$this->index();
	}
	
	public function gimmie($number){
		$this->data['pagebody'] = 'justone'; // this is the view we want shown
		$this->load->model('Quotes');		
	    $gimmieperson = $this->Quotes->get($number);
		
		$this->data['what'] = $gimmieperson['what'];
		$this->data['who'] = $gimmieperson['who'];
		$this->data['mug'] = $gimmieperson['mug'];
		$this->render();
	}
}
?>