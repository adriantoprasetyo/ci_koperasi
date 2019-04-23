<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("produk_model");
	}

	public function index()
	{	
		$data["data"] = $this->produk_model->get_data();

		$this->load->view('header');
		$this->load->view('riwayat_produk', $data);
	}
}
