<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    var $model;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MyModel');
        $this->model= $this->MyModel;
        $this->output->set_content_type("application/json");
        $this->output->set_header("Access-Control-Allow-Origin: *");
        $this->output->set_header("Access-Control-Allow-Methods:GET, OPTIONS");
        $this->output->set_header("Access-Control-Allow-Header: Content-Type, Content-Length, Accept-Encoding");
    }

	public function allProduct(){
        $method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
            $response = $this->model->allProduct();
            json_output(200,$response);
        }
    } 

    public function oneProduct($id){
        $method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
            $response = $this->model->oneData('product',$id);
            json_output(200,$response);
        }
    }

    public function categoryProduct($category){
        $method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
            $response = $this->model->oneData('product',$category,'category');
            json_output(200,$response);
        }
    }

    public function allBanner($category){
        $method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
            $response = $this->model->allData('banner');
            json_output(200,$response);
        }
    }

    public function allNotification($category){
        $method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
            $response = $this->model->allData('notification');
            json_output(200,$response);
        }
    }

    public function allApportUnity($category){
        $method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
            $response = $this->model->allData('apportunity');
            json_output(200,$response);
        }
    }
}