<?php
namespace App\Models;
use CodeIgniter\Model;
class Order extends Model {
    protected $DBGroup ='default';
    protected $table = 'viewinsight';
    public function getDataOrder(){
        return $this->findAll(1000);
    }
}