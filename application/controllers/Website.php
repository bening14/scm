<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website extends CI_Controller
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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->helper(array('url', 'download'));
	}

	// public function index()
	// {
	// 	redirect(base_url('website/landing'));
	// }

	public function index()
	{
		$data['blog'] = $this->Koneksi_model->tampil_data_limit('tbl_blog')->result();

		$this->load->view('template_landing/header', $data);
		$this->load->view('landing');
		$this->load->view('template_landing/footer');
	}

	public function blog()
	{
		$data['recent_post'] = $this->Koneksi_model->tampil_recent_post('tbl_blog')->result();
		$data['kategori'] = $this->Koneksi_model->kategori('tbl_blog')->result();
		$data['blog_limit5'] = $this->Koneksi_model->tampil_data_limit5('tbl_blog')->result();

		$this->load->view('template_landing/header', $data);
		$this->load->view('blog');
		$this->load->view('template_landing/footer');
	}

	public function blog_detil()
	{
		$data['recent_post'] = $this->Koneksi_model->tampil_recent_post('tbl_blog')->result();
		$data['kategori'] = $this->Koneksi_model->kategori('tbl_blog')->result();
		$data['blog_limit5'] = $this->Koneksi_model->tampil_data_limit5('tbl_blog')->result();

		$this->load->view('template_landing/header', $data);
		$this->load->view('blog_detil');
		$this->load->view('template_landing/footer');
	}

	public function form_contact()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');
		$data = array(
			'name' => $name,
			'email' => $email,
			'subject' => $subject,
			'message' => $message
		);

		$this->Koneksi_model->insert_data($data, 'tbl_pesan');
		$this->session->set_flashdata('message', '<div class="alert alert-info text-center" role="alert">Terima kasih sudah mengirim pesan, kami akan segera menindaklanjuti pesan Anda.</div>');
		redirect(base_url('website/landing#contact'));
	}

	public function admin()
	{
		if (!empty($_REQUEST)) {
			$this->Koneksi_model->sign_in();
		} else {
			$this->load->view('login');
		}
	}

	public function dashboard()
	{
		if ($this->session->userdata('logged_in')) {
			// $sess = $this->session->userdata();
			$data['title'] = 'Dashboard | Solusi Cipta Media';
			$data['nama'] = $this->session->userdata('nama');
			// $data['data_company'] = $this->session->userdata();
			// $data['session'] = $this->session->userdata();
			$data['pesan'] = $this->Koneksi_model->tampil_data('tbl_pesan')->result();



			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar');
			$this->load->view('template/body');
			$this->load->view('template/footer');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Anda dilarang keras masuk area ini!</div>');
			redirect(base_url('website/admin'));
		}
	}

	public function blog_admin()
	{
		if ($this->session->userdata('logged_in')) {
			// $sess = $this->session->userdata();
			$data['title'] = 'Blog | Solusi Cipta Media';
			$data['nama'] = $this->session->userdata('nama');
			// $data['data_company'] = $this->session->userdata();
			// $data['session'] = $this->session->userdata();
			$data['blog'] = $this->Koneksi_model->tampil_data('tbl_blog')->result();



			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar');
			$this->load->view('blog_admin');
			$this->load->view('template/footer');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Anda dilarang keras masuk area ini!</div>');
			redirect(base_url('website/admin'));
		}
	}

	public function input_blog()
	{
		if ($this->session->userdata('logged_in')) {
			// $sess = $this->session->userdata();
			$data['title'] = 'Blog | Solusi Cipta Media';
			$data['nama'] = $this->session->userdata('nama');
			// $data['data_company'] = $this->session->userdata();
			// $data['session'] = $this->session->userdata();
			$data['blog'] = $this->Koneksi_model->tampil_data('tbl_blog')->result();



			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar');
			$this->load->view('input_blog');
			$this->load->view('template/footer');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Anda dilarang keras masuk area ini!</div>');
			redirect(base_url('website/admin'));
		}
	}

	public function input_blog_action()
	{
		//ambil nama file
		$temp_filename = basename($_FILES["gambar"]["name"]);

		$config['upload_path']          = './asset/img/blog/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $temp_filename;
		$config['overwrite']            = true;
		$config['max_size']             = 0; // unlimited
		$config['max_width']            = 0;
		$config['max_height']           = 0;

		$this->load->library('upload', $config);

		$judul = $this->input->post('judul');
		$kategori = $this->input->post('kategori');
		$sub_konten = $this->input->post('sub_konten');
		$deskripsi = $this->input->post('konten');

		$data = array(
			'judul' => $judul,
			'konten' => $deskripsi,
			'kategori' => $kategori,
			'mini_konten' => $sub_konten,
			'gambar' => $temp_filename,
		);

		$this->Koneksi_model->insert_data($data, 'tbl_blog');

		if (!$this->upload->do_upload('gambar')) {
			redirect(base_url('website/blog_admin'));
		} else {
			redirect(base_url('website/blog_admin'));
		}
	}

	public function media()
	{
		if ($this->session->userdata('logged_in')) {
			// $sess = $this->session->userdata();
			$data['title'] = 'Blog | Solusi Cipta Media';
			$data['nama'] = $this->session->userdata('nama');
			// $data['data_company'] = $this->session->userdata();
			// $data['session'] = $this->session->userdata();
			$data['blog'] = $this->Koneksi_model->tampil_data('tbl_blog')->result();



			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar');
			$this->load->view('media');
			$this->load->view('template/footer');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Anda dilarang keras masuk area ini!</div>');
			redirect(base_url('website/admin'));
		}
	}

	public function media_action()
	{
		//ambil nama file
		$temp_filename = basename($_FILES["media"]["name"]);

		$config['upload_path']          = './asset/img/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $temp_filename;
		$config['overwrite']            = true;
		$config['max_size']             = 0; // unlimited
		$config['max_width']            = 0;
		$config['max_height']           = 0;

		$this->load->library('upload', $config);


		if (!$this->upload->do_upload('media')) {
			// $this->session->set_flashdata('message', '<div class="alert alert-info text-center" role="alert">Sukses Upload Gambar.</div>');
			redirect(base_url('website/media'));
		} else {
			// $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Gagal Upload Gambar.</div>');
			redirect(base_url('website/media'));
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('website/admin'));
	}
}
