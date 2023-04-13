<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tambah_Menu');
		$this->load->model('Edit_Menu');
		$this->load->model('Delete_Menu');
	}


	public function index()
	{
		$recordMn = $this->Tambah_Menu->getMenu();
		$DATA = array('menu' => $recordMn);
		$this->load->view('home', $DATA);
	}

	public function tambah_menu()
	{
		$this->form_validation->set_rules(
			'kd_menu',
			'Kode Menu',
			'required',
			[
				'required' => 'Masukkan Kode Menu!!!'
			]
		);
		$this->form_validation->set_rules(
			'nm_menu',
			'Nama Menu',
			'required',
			[
				'required' => 'Masukkan Nama Menu!!!'
			]
		);
		$this->form_validation->set_rules(
			'harga',
			'Harga',
			'required',
			[
				'required' => 'Masukkan Harga!!!'
			]
		);
		if ($this->form_validation->run()) {
			$kode_menu = $this->input->post('kd_menu');
			$nama_menu = $this->input->post('nm_menu');
			$harga = $this->input->post('harga');
			$gambar = $this->input->post('gambar');

			$DataInsert = array(
				'kd_menu' => $kode_menu,
				'nm_menu' => $nama_menu,
				'harga' => $harga,
				'gambar' => $gambar,
			);

			$this->Tambah_Menu->InsertMenu($DataInsert);
			redirect("/");
		} else {
			$this->load->view('tambah_menu');
		}


	}
	public function edit_menu($id)
	{
		$this->form_validation->set_rules(
			'kd_menu',
			'Kode Menu',
			'required',
			[
				'required' => 'Masukkan Kode Menu!!!'
			]
		);
		$this->form_validation->set_rules(
			'nm_menu',
			'Nama Menu',
			'required',
			[
				'required' => 'Masukkan Nama Menu!!!'
			]
		);
		$this->form_validation->set_rules(
			'harga',
			'Harga',
			'required',
			[
				'required' => 'Masukkan Harga!!!'
			]
		);
		if ($this->form_validation->run()) {
			$kode_menu = $this->input->post('kd_menu');
			$nama_menu = $this->input->post('nm_menu');
			$harga = $this->input->post('harga');
			$gambar = $this->input->post('gambar');

			$DataInsert = array(
				'kd_menu' => $kode_menu,
				'nm_menu' => $nama_menu,
				'harga' => $harga,
				'gambar' => $gambar,
			);

			$this->Edit_Menu->EditMenu($DataInsert, $id);
			redirect("/");
		} else {
			$menu = $this->Edit_Menu->ChangeEdit($id)->row();
			$data = [
				"id" => $menu->id,
				"kode_menu" => $menu->kd_menu,
				"nama_menu" => $menu->nm_menu,
				"harga" => $menu->harga,
				"gambar" => $menu->gambar,
			];
			$this->load->view('edit_menu', $data);
		}

	}

	public function Delete()
	{
		$id = $this->uri->segment(3);
		$this->Delete_Menu->getDelete($id);
		redirect("/");

	}
}