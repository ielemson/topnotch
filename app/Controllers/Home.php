<?php

namespace App\Controllers;

use App\Models\Service;
use Config\Services;
class Home extends BaseController
{
    public function __construct()
    {
        $this->db = db_connect(); // Loading database
        // OR $this->db = \Config\Database::connect();
        $this->session = Services::session();
    }


    public function index()
    {
        $serviceModel = new Service();

        $data = [
			'title'=>'Home :: TopNotch Engineering',
            'active_home'=>'active',
            'services' => $serviceModel->findAll()
            // 'user' => $this->session->user
		];

        // dd($data);

        return view('welcome',$data);
    }

   

}
