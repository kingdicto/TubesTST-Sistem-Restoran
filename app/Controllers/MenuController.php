<?php
namespace App\Controllers;
use App\Models\Dbrestoran;
class MenuController extends BaseController
{
    public function index()
    {
        // if (session()->get('num_user') == '') {
        //     return redirect()->to('/login');
        // }


        $model = model(Dbrestoran::class);
        $data['dbrestoran'] = $model->getMenuRestoran();
        return view('header', $data).view('menu').
        view('dbrestoran').view('footer');
    }
}
