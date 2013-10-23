<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Administrator extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('general');
		$this->load->model('getdata');
		$this->load->model('inputdata');
	}

	public function index()
	{
		$this->general->authadmin();
		$data['content'] = "home/index";
		$this->load->view('template',$data);
	}

	public function resetpass()
	{
		$this->general->authadmin();
		$data['content'] = "administrator/resetpass";
		$this->load->view('template',$data);	
	}

	public function reset($id)
	{
		$this->general->authadmin();
		$this->inputdata->resetuser($id);
		$info = "Password berhasil di reset";
        $this->general->informationSuccess($info);
		redirect('administrator/resetpass');
	}
	
	public function warning()
	{
		$this->load->view('administrator/warning');
	}
}


/* End of file administrator.php */
/* Location: ./application/controllers/administrator.php */?>