<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}

		$this->load->model('m_admin');
		$this->load->helper(array('form', 'url'));
	}

	function index(){
		$this->load->view('header');
		$data['barang'] = $this->m_admin->tampil_servis()->result();
		$this->load->view('v_listtransaksi', $data);
	}

	public function listtransaksi_pel() {
		$this->load->view('header');
		$data['pelanggan'] = $this->m_admin->tampil_pelanggan()->result();
		$this->load->view('v_transaksi_listpel', $data);
	}

	public function listtransaksi_pelbaru() {
		$this->load->view('header');
		$this->load->view('v_tambahtpelanggan');
	}

	public function listpelanggan() {
		$this->load->view('header');
		$data['pelanggan'] = $this->m_admin->tampil_pelanggan()->result();
		$this->load->view('v_listpelanggan', $data);
	}

	public function tambah_pelanggan() {
		$this->load->view('header');
		$this->load->view('v_tambahpelanggan');
	}


	public function add_pelanggan() {
		$nama_pelanggan = $this->input->post('nama_pelanggan');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');

		$data = array(
			'nama_pelanggan' => $nama_pelanggan,
			'no_hp' => $no_hp,
			'alamat' => $alamat
			);

		$this->m_admin->input_data($data,'pelanggan');
		redirect('admin/listpelanggan');

	}

	public function tambah_tpelanggan() {
		$this->load->view('header');
		$this->load->view('v_tambahtpelanggan');
	}

	public function add_tpelanggan() {
		$nama_pelanggan = $this->input->post('nama_pelanggan');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');

		$data = array(
			'nama_pelanggan' => $nama_pelanggan,
			'no_hp' => $no_hp,
			'alamat' => $alamat
			);

		$this->m_admin->input_data($data,'pelanggan');
		redirect('admin/listtransaksi_pel');

	}

	function edit_pelanggan($id_pelanggan) {
		$this->load->view('header');
		$where = array('id_pelanggan' => $id_pelanggan);
		$data['pelanggan'] = $this->m_admin->edit_data($where,'pelanggan')->result();
		$this->load->view('v_editpelanggan',$data);
	}

	function v_transaksi1($id_pelanggan) {
		$this->load->view('header');
		$where = array('id_pelanggan' => $id_pelanggan);
		$data['pelanggan'] = $this->m_admin->edit_data($where,'pelanggan')->result();
		$this->load->view('v_tambahtransaksi1',$data);
	}


	function update_pelanggan() {
		$id_pelanggan = $this->input->post('id_pelanggan');
		$nama_pelanggan = $this->input->post('nama_pelanggan');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');

		$data = array(
			'nama_pelanggan' => $nama_pelanggan,
			'no_hp' => $no_hp,
			'alamat' => $alamat
			);

		$where = array(
			'id_pelanggan' => $id_pelanggan
			);

		$this->m_admin->update_data($where,$data,'pelanggan');
		redirect('admin/listpelanggan');
	}

	function hapus_pelanggan($id_pelanggan){
		$where = array('nama_pelanggan' => $id_pelanggan);
		$this->m_admin->hapus_data($where,'pelanggan');
		redirect('admin/listpelanggan');
	}

	public function tambahTransaksi() {
		$this->load->view('header');
		$this->load->view('v_tambahtransaksi');
	}

	public function t_pelada() {
		$this->load->view('header');
		$this->load->view('v_tambahtransaksi1');
	}

	public function add_transaksi() {
		$config['upload_path']          = './upload/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		$nama_pelanggan = $this->input->post('nama_pelanggan');
		$jenis_barang = $this->input->post('jenis_barang');
		$kerusakan = $this->input->post('kerusakan');
		$tarif = $this->input->post('tarif');
		$tgl_servis = $this->input->post('tgl_servis');
		$tgl_ambil = $this->input->post('tgl_ambil');

		if ( ! $this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('v_upload', $error);
		} else {
			$upload_data = $this->upload->data();

			$data = array(
				'nama_pelanggan' => $nama_pelanggan,
				'jenis_barang' => $jenis_barang,
				'kerusakan' => $kerusakan,
				'tarif' => $tarif,
				'tgl_servis' => $tgl_servis,
				'tgl_ambil' => $tgl_ambil,
				'gambar' => $upload_data['file_name'],
				);

			$this->load->view('v_listtransaksi', $data);

		}
		$this->m_admin->input_data($data,'barang');
		redirect('admin/');
	}

	public function detail_transaksi($kode_barang){
		$this->load->view('header');
		$where = array('kode_barang' => $kode_barang);
		$data['barang'] = $this->m_admin->edit_data($where,'barang')->result();
		$this->load->view('v_detailtransaksi',$data);
	}

	public function edit_transaksi($kode_barang) {
		$this->load->view('header');
		$where = array('kode_barang' => $kode_barang);
		$data['barang'] = $this->m_admin->edit_data($where,'barang')->result();
		$this->load->view('v_edittransaksi',$data);
	}

	public function edit_fototransaksi($kode_barang) {
		$this->load->view('header');
		$where = array('kode_barang' => $kode_barang);
		$data['barang'] = $this->m_admin->edit_data($where,'barang')->result();
		$this->load->view('v_editfototransaksi',$data);
	}

	function update_transaksi() {
		$kode_barang = $this->input->post('kode_barang');
		$nama_pelanggan = $this->input->post('nama_pelanggan');
		$jenis_barang = $this->input->post('jenis_barang');
		$kerusakan = $this->input->post('kerusakan');
		$tarif = $this->input->post('tarif');
		$tgl_servis = $this->input->post('tgl_servis');
		$tgl_ambil = $this->input->post('tgl_ambil');

		$data = array(
			'nama_pelanggan' => $nama_pelanggan,
			'jenis_barang' => $jenis_barang,
			'kerusakan' => $kerusakan,
			'tarif' => $tarif,
			'tgl_servis' => $tgl_servis,
			'tgl_ambil' => $tgl_ambil
			);

		$where = array(
			'kode_barang' => $kode_barang
			);

		$this->m_admin->update_data($where,$data,'barang');
		redirect('admin/');
	}

	function update_fotoservis() {
		$config['upload_path']          = './upload/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 1024;
		$config['max_height']           = 1024;

		$kode_barang = $this->input->post('kode_barang');

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('v_upload', $error);
		} else {
			$upload_data = $this->upload->data();

			$data = array(
				'gambar' => $upload_data['file_name']
				);

			$where = array(
				'kode_barang' => $kode_barang
				);

			$this->m_admin->update_data($where,$data,'barang');
			redirect('admin/');
			}
		} 

		function hapus_transaksi($kode_barang){
			$where = array('kode_barang' => $kode_barang);
			$this->m_admin->hapus_data($where,'barang');
			redirect('admin/');
		}
	}