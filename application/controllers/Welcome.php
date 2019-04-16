<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('biodata');
		// echo "<h1>Hello World</h1>";
	}

	public function lain(){
		echo "<h1>Ini halaman lain</h1>";
	}

	public function error(){
		$this->load->view('errors/html/error_404.php');
	}

	public function about($nama, $asal){
		echo "Ini adalah halaman about";
		echo "<h3> Nama : ".$nama;
		echo "<h3> Asal : ".$asal."</h3>";
	}

	public function profile(){
		$this->load->view('profile');
	}
}
