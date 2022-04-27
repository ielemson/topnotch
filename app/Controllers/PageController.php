<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PageController extends BaseController
{

    public function about(){

        $data['banner_caption'] = "About Us";
		$data['banner_img'] = "about-page-title-bg.jpg";
		$data['title'] = "About Us :: TopNotch Engr.";
		$data['active_about'] = "active";

        return view('aboutus',$data);
    }
    
    public function contact(){

        $data['banner_caption'] = "Contact Us";
		$data['banner_img'] = "3.jpg";
		$data['title'] = "Contact Us :: TopNotch Engr.";
		$data['active_contact'] = "active";

        return view('contactus',$data);
    }
    public function mission(){

        $data['banner_caption'] = "Mission Statement";
		$data['banner_img'] = "3.jpg";
		$data['title'] = "Mission Statement :: TopNotch Engr.";
		$data['active_mission'] = "active";

        return view('mission');
    }
    public function vision(){
        return view('vision');
    }

    public function repair()
    {
        $data['banner_caption'] = "Repairs";
		$data['banner_img'] = "3.jpg";
		$data['title'] = "Repairs :: TopNotch Engr.";
		$data['active_mission'] = "active";
        
        return view('repairs',$data);    
    
    }

    public function sales()
    {
        $data['banner_caption'] = "Sales";
		$data['banner_img'] = "3.jpg";
		$data['title'] = "Sales :: TopNotch Engr.";
		$data['active_mission'] = "active";

        return view('sales',$data);    
    }

    public function maintenance()
    {
        $data['banner_caption'] = "Maintenance";
		$data['banner_img'] = "3.jpg";
		$data['title'] = "Maintenance :: TopNotch Engr.";
		$data['active_mission'] = "active";

        return view('maintenance',$data);    
    
    }
    
    public function installation()
    {
        $data['banner_caption'] = "Installation";
		$data['banner_img'] = "3.jpg";
		$data['title'] = "Installation :: TopNotch Engr.";
		$data['active_mission'] = "active";

        return view('installation',$data);    
    
    }
}
