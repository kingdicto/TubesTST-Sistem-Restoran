<?php
namespace App\Models;
use CodeIgniter\Model; 
class Dbrestoran extends Model{
    protected $table ='viewmenu';
    public function getMenuRestoran(){
        return $this->findAll(1000);
    }
}

