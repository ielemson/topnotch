<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Service;

class AdminController extends BaseController
{

    public function __construct()
    {
        if (session()->get('role') != "admin") {
            echo 'Access denied';
            exit;
        }
    }

    public function index()
    {
        $data['title'] = "Admin Dashboard";
        return view('admin/dashboard',$data);
    }

    public function add(){   
         $data['title'] = "Admin Dashboard :: Add Services";
        return view('admin/services/add');
    }


    

    public function addService(){

        // helper('text');

        helper(['form', 'url','text']);

		// save new user, validation happens in the model
		$serviceModel = new Service();
		$getRule = $serviceModel->getRule('storeServices');
		$serviceModel->setValidationRules($getRule);
		
        $file = $this->request->getFile('img');
        if($file->isValid() && !$file->hasMoved()) {
            $serviceImg = $file->getRandomName();
            $file->move('uploads/service', $serviceImg);
        }

        $serviceArr = [
            'title'          	=> $this->request->getPost('title'),
            'description'          	=> $this->request->getPost('description'),
            'img'           	=> $serviceImg,
            'slug'  => url_title($this->request->getPost('title'), '-', true),
           
        ];

        // dd($serviceArr);
        if ($serviceModel->save($serviceArr)) {

            return redirect()->to(base_url('admin/add'))->with('success', "Service Created Sucessfully");
        }
       
        return redirect()->to(base_url('admin/add'))->withInput()->with('errors', $serviceModel->errors());
        
    }


    public function viewServices(){
        helper(['form', 'url','text']);
        $serviceModel = new Service();
        $data['services'] = $serviceModel->findAll();
        return view('admin/services/view',$data);
    }


    public function editService($id=null){

        $serviceModel = new Service();
        // $categoryModel = new Category();

        $data['service'] = $serviceModel->where('id', $id)->first();
        // $data['categories'] = $categoryModel->where('status', 1)->findAll();

        return view('admin/services/edit',$data);

    }


    public function updateService($id=null){
        // helper('text');

        helper(['form', 'url','text']);

		// save new user, validation happens in the model
		$serviceModel = new Service();
        $service = $serviceModel->where('id', $id)->first();
		$getRule = $serviceModel->getRule('storeServices');
		$serviceModel->setValidationRules($getRule);
		$file = $this->request->getFile('img');

        if (file_exists($file))
        {

            if($file->isValid() && !$file->hasMoved()) {
                $serviceImg = $file->getRandomName();
                $file->move('uploads/service', $serviceImg);
            }
    
            $serviceArr = [
                'id'=>$service['id'],
                'title'          	=> $this->request->getPost('title'),
                'description'          	=> $this->request->getPost('description'),
                'img'           	=> $serviceImg,
                'slug'  => url_title($this->request->getPost('title'), '-', true),
               
            ];
        }else{

            $serviceArr = [
                'id'=>$service['id'],
                'title'          	=> $this->request->getPost('title'),
                'description'          	=> $this->request->getPost('description'),
            
                'slug'  => url_title($this->request->getPost('title'), '-', true),
               
            ];
        }
        
       
        // dd($serviceArr);
        if ($serviceModel->save($serviceArr)) {

            return redirect()->to(base_url('admin/add'))->with('success', "Service Created Sucessfully");
        }
       
        return redirect()->to(base_url('admin/add'))->withInput()->with('errors', $serviceModel->errors());
        
        }

    public function deleteSrvice($id=null){

        $serviceModel = new Service();
        // $categoryModel = new Category();

        
       $service =  $serviceModel->where('id', $id)->first();

        $path_cover =  "./uploads/service".'/'.$service['img'];

        if (file_exists($path_cover))
        {
            unlink($path_cover);
        }

        $serviceModel->delete($id);

        $data['services'] = $serviceModel->findAll();
        
        return redirect()->to(base_url('admin/add'))->with('success', "Service Deleted Sucessfully");

    }
}
