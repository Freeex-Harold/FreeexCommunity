<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->dashboard();
	}

	public function dashboard()
	{
		$menu['cur'] = 0;

		$this->load->view('admin/header');
		$this->load->view('admin/menu', $menu);
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}

	public function sitemap()
	{
		$menu['cur'] = 1;

		$this->load->view('admin/header');
		$this->load->view('admin/menu', $menu);
		$this->load->view('admin/sitemap');
		$this->load->view('admin/footer');
	}
}
