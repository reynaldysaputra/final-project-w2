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

}