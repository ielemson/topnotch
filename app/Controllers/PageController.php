<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Service;

class PageController extends BaseController
{

    public function about(){
        $serviceModel = new Service();
        $data['banner_caption'] = "About Us";
		$data['banner_img'] = "about-page-title-bg.jpg";
		$data['title'] = "About Us :: TopNotch Engr.";
		$data['active_about'] = "active";
        $data['services'] = $serviceModel->findAll();

        return view('aboutus',$data);
    }
    
    public function contact(){
        $serviceModel = new Service();
        $data['banner_caption'] = "Contact Us";
		$data['banner_img'] = "contact-us.jpg";
		$data['title'] = "Contact Us :: TopNotch Engr.";
		$data['active_contact'] = "active";
        $data['services'] = $serviceModel->findAll();
        return view('contactus',$data);
    }


    public function service($slug=null){

        $serviceModel = new Service();
        // $categoryModel = new Category();
        

        $data['singleService'] = $serviceModel->where('slug', $slug)->first();

        $data['banner_caption'] = $data['singleService']['title'];
		$data['banner_img'] = "3.jpg";
		$data['title'] = $data['singleService']['title'].''." :: TopNotch Engr.";
        $data['services'] = $serviceModel->findAll();
        // dd($data);
        return view('service',$data);
    }

    public function mission(){
        $serviceModel = new Service();
        $data['banner_caption'] = "Mission Statement";
		$data['banner_img'] = "3.jpg";
		$data['title'] = "Mission Statement :: TopNotch Engr.";
		$data['active_mission'] = "active";
        $data['services'] = $serviceModel->findAll();
        return view('mission',$data);
    }

    public function vision(){
        $serviceModel = new Service();
        $data['banner_caption'] = "Mission Statement";
		$data['banner_img'] = "3.jpg";
		$data['title'] = "Mission Statement :: TopNotch Engr.";
		$data['active_vision'] = "active";
        $data['services'] = $serviceModel->findAll();
        return view('vision',$data);
    }

   

}
