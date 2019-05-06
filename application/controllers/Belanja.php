<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belanja extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("belanja_model");
		$this->load->model("produk_model");
	}

	public function index()
	{	
		$data["data"] = json_encode($this->belanja_model->get_data());
		$this->load->view('header');
		$this->load->view('input_belanja', $data);
		$this->load->view('footer');
	}

	// Gunakan ini jika menggunakan JQuery :

	// public function getData()
	// {
	// 	$data["data"] = $this->belanja_model->get_data();
	// 	echo json_encode($data);
	// }

	public function simpan_belanja()
	{

		$query = $this->produk_model->get_data_by_id($this->input->post("jenis_barang"));

		$data_belanja = array(
			'barang_id' => $query->id_barang,
			'jumlah' => $this->input->post("jumlah_barang"),
			'tanggal' => date("Y/m/d"),
			'total_belanja' => $this->input->post("total_belanja")
		);

		$stok = $query->stok_barang;
		$total_stok = $stok + $this->input->post("jumlah_barang");
		
		$stok = $total_stok;
		$id = $query->id_barang;

		$this->produk_model->update_stok_barang($id, $stok);
		$this->belanja_model->insert_belanja($data_belanja);
		redirect(base_url());
	}
}
