<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function index() {
		$this->load->view('templates/header');
		$this->load->view('pages/beranda');
		$this->load->view('templates/footer');
	}
	
	public function gejala() {
		$this->load->view('templates/header');
		$this->load->view('pages/gejala');
		$this->load->view('templates/footer');
	}

	public function blog() {
		$this->load->view('templates/header');
		$this->load->view('pages/blog');
		$this->load->view('templates/footer');
	}

	public function tentang() {
		$this->load->view('templates/header');
		$this->load->view('pages/tentang');
		$this->load->view('templates/footer');
	}

	public function contact() {
		$this->load->view('templates/header');
		$this->load->view('pages/contact');
		$this->load->view('templates/footer');
	}

	public function feedback()
	{
		$this->form_validation->set_rules('namadepan', 'Nama Depan','required', [
			'required' => 'Nama Depan Belum Diisi!!'
		]);
		$this->form_validation->set_rules('namabelakang','Nama Belakang','required',[
			'required' => 'Nama Belakang Belum Diisi!!'
		]);
		$this->form_validation->set_rules('email','Email','required',[
			'required' => 'Email Belum Diisi!!'
		]);
		$this->form_validation->set_rules('subject','Subject','required',[
			'required' => 'Subject Belum Diisi!!'
		]);
		$this->form_validation->set_rules('pesan','Pesan','required',[
			'required' => 'Pesan Masih Kosong!!'
		]);
		
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header');
			$this->load->view('pages/contact');
			$this->load->view('templates/footer');
		}else {
			$data = [
				'nama_depan' => htmlspecialchars($this->input->post('namadepan', true)),
				'nama_belakang' => htmlspecialchars($this->input->post('namabelakang', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'subject' => htmlspecialchars($this->input->post('subject', true)),
				'komentar' => htmlspecialchars($this->input->post('pesan', true)),
			];
			$this->session->set_flashdata('pesan', '<script>Swal.fire("Berhasil!","Pesan Anda Telah Dikirim","success")</script>');
			$this->M_feedback->simpanData($data);
            redirect(base_url('page/contact'));
		}
	}

}