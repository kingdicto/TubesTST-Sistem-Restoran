<?php
namespace App\Controllers;
use App\Models\Report;
class ReportController extends BaseController{
    //  public function index(){
    //      if (session()->get('num_user') == '') {
    //          return redirect()->to('/login');}
    //      $model = model(Report::class);
    //      $data['report'] = $model->getDataReport();
    //      return view('header', $data).view('menu').
    //      view('report').view('footer'); 
    //  }

    public function __construct() {
        parent::__construct();
        $this->load->model('viewreport1');
    }

    public function index() {
        $data['viewreport1'] = $this->Order_model->getDataReport();
        $this->load->view('report', $data);
    }


}