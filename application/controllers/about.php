<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {
	function _remap($method)
	{
		switch( $method )
		{
			case 'index':
				$this->index();
				break;
			default:
				show_404();;
				break;
		}
	}
	
	public function index() {
		$this->load->view('view_about');
	}

}

