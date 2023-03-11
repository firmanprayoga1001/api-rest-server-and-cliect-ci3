<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Gifts extends REST_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
    }
    public function index_get()
    {
        $id = $this->get('id');

        if ($id === NULL)
        {
            $data = $this->product_model->getProduct($id);
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
        else {
            $data = $this->product_model->getProduct($id);
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
    public function index_post()
    {
        $name = $this->post('name');
        $data = [
            'product_name' => $name,
            'info_product' => $this->post('info'),
            'qty' => $this->post('qty'),
            'point' => $this->post('point'),
            'picture' => $this->post('pic')
        ];
        if ($name === NULL){
            $this->response([
                'status' => 'FALSE',
                'message' => 'Input all atributes to run this function'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($name)
            {
                $status = $this->product_model->addProduct($data);
                if ($status >= 0) {
                    $this->response([
                        'status' => 'TRUE',
                        'message' => 'Product has been added',
                        'result' => $data
                    ], REST_Controller::HTTP_OK);
                } else {
                    $this->response([
                        'status' => 'FALSE',
                        'message' => 'Product failed to add'
                    ], REST_Controller::HTTP_BAD_REQUEST);
                }   
            } else { 
                $this->response([
                    'status' => 'FALSE',
                    'message' => 'Incomplete data'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }
    public function index_patch()
    {
        $id = $this->patch('id');
        $data = [
            'id' => $id,
            'product_name' => $this->patch('name'),
            'info_product' => $this->patch('info'),
            'qty' => $this->patch('qty'),
            'point' => $this->patch('point'),
            'picture' => $this->patch('pic')
        ];
        if ($id === NULL){
            $this->response([
                'status' => 'FALSE',
                'message' => 'Input id atributes to run this function'
            ], REST_Controller::HTTP_NOT_FOUND);
        } else {
            $cek_data = $this->product_model->getProduct($id);
            if ($cek_data){
                $status = $this->product_model->updateProduct($data);
                if ($status >= 0) {
                    $this->response([
                        'status' => 'TRUE',
                        'message' => 'Product has been updated',
                        'result' => $data
                    ], REST_Controller::HTTP_OK);
                } else {
                    $this->response([
                        'status' => 'FALSE',
                        'message' => 'Product failed to update'
                    ], REST_Controller::HTTP_BAD_REQUEST);
                }   
            } else {
                $this->response([
                    'status' => 'FALSE',
                    'message' => 'No product were found'
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }
    public function index_delete()
    {
        $id = $this->delete('id');
        if ($id === NULL)
        {
            $this->response([
                'status' => 'FALSE',
                'message' => 'No product were not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
        else {
            $status = $this->product_model->deleteProduct($id);
            if ($status > 0 ){
                $this->response([
                    'status' => 'TRUE',
                    'message' => 'Product has been deleted'
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => 'FALSE',
                    'message' => 'No product were found'
                ], REST_Controller::HTTP_NOT_FOUND);
            }  
            
        }
    }
}