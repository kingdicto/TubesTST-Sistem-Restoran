<?php
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use App\Models\OrderAPImodel;
class Core extends ResourceController
{
    public function index(){
        $model = model(OrderAPImodel::class);
        $data = ['message' => 'success', 'dbrestoran'=>$model -> getInsightData()];
        return $this->respond($data,200);
    }
}
