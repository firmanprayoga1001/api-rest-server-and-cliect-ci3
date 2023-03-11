<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Search extends REST_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
    }
    public function index_get()
    {
        $kword = $this->get('kword');

        if ($kword === NULL)
        {
            $this->response([
                'status' => 'FALSE',
                'message' => 'No product were found'
            ], REST_Controller::HTTP_NOT_FOUND); 
        }
        else {
            $data = $this->product_model->searchProduct($kword);
            if ($data)
            { 
                $this->response([
                    'status' => 'TRUE',
                    'result' => $data
                ], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->response([
                    'status' => 'FALSE',
                    'message' => 'No product were found'
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }    
}