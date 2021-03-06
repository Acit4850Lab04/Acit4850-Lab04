<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown
		// build the quote, to pass on to our view
		$this->load->model('Quotes');
		$author = $this->quotes->last();
	
	
		$this->data['what'] = $author['what'];
		$this->data['mug'] = $author['mug'];
		$this->data['who'] = $author['who'];
		$this->render();
	}

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */