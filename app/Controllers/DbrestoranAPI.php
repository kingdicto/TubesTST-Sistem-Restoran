<?php
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use App\Models\Dbrestoran;
class DbrestoranAPI extends ResourceController
{
    public function index(){
        $model = model(Dbrestoran::class);
        $data = ['message' => 'success', 'dbrestoran'=>$model -> getMenuRestoran()];
        return $this->respond($data,200);
    }
}


