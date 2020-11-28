<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Cetba_controller extends CI_Controller {
	function  __construct(){
		parent :: __construct();
		$this->load->model('cetba_model');            
	}

	public function menu()
	{
		$data['menu'] = $this->cetba_model->get_menu_polozky();
		$data['knihy'] = $this->cetba_model->index();
		$this->load->view('layout/header');
		$this->load->view('layout/navbar', $data);
		$this->load->view('pages/index', $data);
		$this->load->view('layout/footer');
	}

	public function prvni_strana()
	{
		$data['menu'] = $this->cetba_model->get_menu_polozky();
		$data['knihy'] = $this->cetba_model->get_strana_1();
		$this->load->view('layout/header');
		$this->load->view('layout/navbar', $data);
		$this->load->view('pages/prvni_strana', $data);
		$this->load->view('layout/footer');
	}

	public function druha_strana()
	{
	    $data['menu'] = $this->cetba_model->get_menu_polozky();
	    $data['knihy'] = $this->cetba_model->get_strana_2();
		$this->load->view('layout/header');
		$this->load->view('layout/navbar', $data);
		$this->load->view('pages/druha_strana', $data);
		$this->load->view('layout/footer');
	}
	public function treti_strana() {
	    
	    $data['menu'] = $this->cetba_model->get_menu_polozky();
	    $data['knihy'] = $this->cetba_model->get_strana_3();
		$this->load->view('layout/header');
		$this->load->view('layout/navbar', $data);
		$this->load->view('pages/treti_strana', $data);
		$this->load->view('layout/footer');
	}

	public function ctvrta_strana() {
	    
	    $data['menu'] = $this->cetba_model->get_menu_polozky();
	    $data['knihy'] = $this->cetba_model->get_strana_4();
		$this->load->view('layout/header');
		$this->load->view('layout/navbar', $data);
		$this->load->view('pages/ctvrta_strana', $data);
		$this->load->view('layout/footer');

	}
}
