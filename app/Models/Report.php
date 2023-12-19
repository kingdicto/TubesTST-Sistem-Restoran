<?php
namespace App\Models;
use CodeIgniter\Model; class Report extends Model{
     protected $table = 'viewreport1';
     public function getDataReport(){
        $query = $this->db->query("
            SELECT 
                'Margherita Pizza' AS Menu,
                SUM(Margherita_Pizza) AS TotalPesanan
            FROM `order`
            UNION
            SELECT 
                'Spaghetti Bolognese' AS Menu,
                SUM(Spaghetti_Bolognese) AS TotalPesanan
            FROM `order`
            UNION
            SELECT 
                'Risotto ai Funghi' AS Menu,
                SUM(Risotto_ai_Funghi) AS TotalPesanan
            FROM `order`
        ");

        return $query->result();
     }
}