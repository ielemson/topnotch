<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        
		$data['title'] = "Home :: Chaplin Rowan";
		$data['active_home'] = "active";

        return view('welcome',$data);
    }

   

}
