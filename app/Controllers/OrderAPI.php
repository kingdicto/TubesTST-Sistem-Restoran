<?php

namespace App\Controllers;

use App\Models\OrderAPImodel;

class OrderAPI extends BaseController
{
    public function index()
    {
        $menuModel = new OrderAPImodel();
        $data['dbpesanantar'] = $menuModel->getOrderData();

        // return view('/layout/header', $data).view('').view('/layout/footer');
        // return view('layout/header', $data).view('pages/restoran').view('layout/footer');
       
        return $this->response->setStatusCode(200)->setJSON($data);



    }
}