<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$data = [
			'title' => 'Home',
			'content' => 'home',

		];
		$this->load->view('layout/template', $data);
	}
}
