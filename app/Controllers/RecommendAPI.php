<?php
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use App\Models\Recommend;
class RecommendAPI extends ResourceController
{
    public function index(){
        $model = model(Recommend::class);
        $data = [ 'message' => 'success',
            'dbrestoran' => $model->getDataRekomendasi()];
        return $this->respond($data,200);
     }
}
