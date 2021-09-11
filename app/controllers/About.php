<?php 

class About extends Controller{
	public function index($nama = 'user', $pekerjaan='pekerjaan')
	{
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['judul'] = 'About Me';
		// view pages
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}

	public function contact()
	{
		$data['judul'] = 'Contact';
		$this->view('templates/header', $data);
		$this->view('about/contact');
		$this->view('templates/footer');
	}
}