<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Account extends Kodakil_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->user_check_login();
        $this->load->model('Account_model', 'model');
        $this->load->model('Basket_model', 'BM');
    }

    public function index()
    {
        $data               = $this->Constract_model->getAllData();

        $data->step = 1;

        $this->load->view('header', $data);
        $this->load->view('account-detail');
        $this->load->view('footer');
    }

    public function orders()
    {
        $data             = $this->Constract_model->getAllData();
        $data->orders = $this->model->getOrders($data->user->id);
        $data->step = 2;

        $this->load->view('header', $data);
        $this->load->view('account-orders');
        $this->load->view('footer');
    }

    public function wishlist()
    {
        $data             = $this->Constract_model->getAllData();
        $data->step = 3;

        $data->favorites = $this->model->getUserFavorites($data->user->id);


        $this->load->view('header', $data);
        $this->load->view('account-wishlist');
        $this->load->view('footer');
    }



    public function address()
    {
        $data               = $this->Constract_model->getAllData();
        $data->adress       = $this->model->getUserAdress($data->user->id);
        $data->step = 4;

        $this->load->view('header', $data);
        $this->load->view('account-adress');
        $this->load->view('footer');
    }

    
}
