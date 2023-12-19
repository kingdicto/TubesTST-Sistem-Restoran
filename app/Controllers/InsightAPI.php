<?php
namespace App\Controllers;

use App\Models\InsightAPImodel;

class InsightAPI extends BaseController
{
    public function index($selectedMonth = null, $seg1 = null, $seg2 = null)
    {
        $menuModel = new InsightAPImodel();
        $data['dbpesanantar'] = $menuModel->getInsightData();

        // Set variabel $selectedMonth untuk digunakan di view
        $data['selectedMonth'] = $selectedMonth;
        return view('header', $data).view('menu').view('core').view('footer');
    }
}




