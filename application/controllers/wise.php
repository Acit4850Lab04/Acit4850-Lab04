<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Wise extends Application {

	function __construct(){
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index(){

	}
	
	//used for link 8
	function bingo(){
		$this->data['pagebody'] = 'justone';	// this is the view we want shown
		
		// build the quote, to pass on to our view
		$this->load->model('Quotes');
		$author = $this->quotes->get("6");
	
	
		$this->data['what'] = $author['what'];
		$this->data['mug'] = $author['mug'];
		$this->data['who'] = $author['who'];
		$this->render();
	}
}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */