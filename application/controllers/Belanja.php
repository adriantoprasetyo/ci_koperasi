<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belanja extends CI_Controller {

	public function index()
	{
		$this->load->model("belanja_model");
		$data["data"] = $this->belanja_model->get_data();
		$this->load->view('input_belanja', $data);
	}

	public function simpan_belanja()
	{
		$this->load->model("belanja_model");

		$sql = "select id_barang from barang where nama_barang = ? ";
		$query = $this->db->query($sql, $this->input->post("jenis_barang"))->row();

		$data = array(
			'barang_id' => $query->id_barang,
			'jumlah' => $this->input->post("jumlah_barang"),
			'tanggal' => date("Y/m/d"),
			'total_belanja' => $this->input->post("total_belanja")
		);

		$this->belanja_model->insert_belanja($data);
		redirect(base_url());
	}
}
