<?php

namespace App\Controllers;
use Config\Services;
use App\Models\User;
use App\Controllers\BaseController;

class AuthController extends BaseController
{


    protected $session;

	/**
	 * Authentication settings.
	 */
	protected $config;

    public function __construct()
	{
		// start session
		$this->session = Services::session();
	}


    public function index()
    {
        return view('auth/login');
    }


    public function attemptLogin()
	{
		// validate request
		$rules = [
			'email'		=> 'required|valid_email',
			'password' 	=> 'required|min_length[5]',
		];

		if (! $this->validate($rules)) {
			return redirect()->to(base_url('login'))->withInput()->with('errors', $this->validator->getErrors());
		}

		// check credentials
		$users = new User();
		
		$user = $users->where('email', $this->request->getPost('email'))->first();
		
		if ( is_null($user) || ! password_verify($this->request->getPost('password'), $user['password']) ) 
		{
			return redirect()->to(base_url('login'))->withInput()->with('error', "invalid user credentials");
		}

          // Stroing session values
          $this->setUserSession($user);

          // Redirecting to dashboard after login
        //   dd($user);

          if($user['role'] == "customer"){

            return redirect()->to(base_url('customer/dashboard'));

          }else{

            return redirect()->to(base_url('logout'));
          }
		   
	}


    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
            'email' => $user['email'],
            'gender' => $user['gender'],
            'phone' => $user['phone'],
            'isLoggedIn' => true,
            "role" => $user['role'],
        ];

        session()->set($data);
        return true;
    }
}
