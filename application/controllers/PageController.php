<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {

	public function index()
	{
		$this->template->partials('pages/home');
	}

	public function about(){
		$this->template->partials('pages/about');
	}
	
	public function testimonial(){
		$this->template->partials('pages/testimonial');
	}

	public function login(){
		$this->template->partials('pages/login');
	}

	public function registrasi(){
		$this->template->partials('pages/registrasi');
	}

	public function blog(){
		$this->template->partials('pages/blog');
	}

	public function blog_detail(){
		$this->template->partials('pages/blog_detail');
	}

	public function blog_category(){
		$this->template->partials('pages/blog_category');
	}

	public function blog_mapel()
	{
		$this->template->partials('pages/blog_mapel');
	}

	public function blog_carikampus()
	{
		$this->template->partials('pages/blog_carikampus');
	}

	public function event()
	{
		# code...
		$this->template->partials('pages/event');
	}

	public function ranking()
	{
		# code...
		$this->template->partials('pages/ranking');
	}

	public function detail_tryout()
	{
		# code...
		$this->template->partials('pages/detail_tryout');
	}

	public function riwayat_pembelian()
	{
		# code...
		$this->template->partials('pages/riwayat_pembelian');
	}

	public function profile()
	{
		# code...
		$this->template->partials('pages/profile');
	}

}

/* End of file PageController.php */
/* Location: ./application/controllers/PageController.php */