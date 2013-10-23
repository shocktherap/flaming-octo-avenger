<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Breaker extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function kriteriautama()
	{
		$this->load->model('ujicoba');
		$this->ujicoba->kriteriautama(22013,100000);
	}
	public function hitung()
	{
		echo "1 : ".(1.06/0.13)."</br>";
		echo "2 : ".(2.13/0.26)."</br>";
		echo "3 : ".(0.8/0.1)."</br>";
		echo "4 : ".(0.42/0.05)."</br>";
		echo "5 : ".(0.64/0.08)."</br>";
		echo "6 : ".(1.06/0.13)."</br>";
		echo "7 : ".(0.8/0.1)."</br>";
		echo "8 : ".(1.06/0.13)."</br>";
	}
}


/* End of file break.php */
/* Location: ./application/controllers/break.php */?>