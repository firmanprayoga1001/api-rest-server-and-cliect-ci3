<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
		function getProduct($url){
			
			$data = file_get_contents($url);
			$data = json_decode($data, true);
			if ($data['status'] === 'TRUE') {
				$dataProduct = $data['result'];
				return $dataProduct;
			}	
		}

		$url = 'http://localhost/product_rest/gifts';
		$dataProduct = getProduct($url);
		// var_dump($dataProduct); die;

		$data = array(
			'title' => 'Manage Product',
			'page' => 'manage',
			'dataProduct' => $dataProduct
		);

		$this->load->view('layout',$data);
	}
}
