<?php
namespace App\Models;
use CodeIgniter\Model;
class Recommend extends Model {
    protected $DBGroup ='default';
    protected $table = 'viewrekomendasi';
    public function getDataRekomendasi(){
        return $this->findAll(1000);
    }
}