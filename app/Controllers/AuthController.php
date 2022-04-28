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
        if ($this->session->isLoggedIn) {
                
            return redirect()->to(base_url('admin/dashboard'));
            }

                return view('auth/login');
    }

    public function getRegister(){
        return view('auth/register');
    }

    public function attemptRegister()
	{
		helper('text');

		// save new user, validation happens in the model
		$users = new User();

		$getRule = $users->getRule('registration');

		$users->setValidationRules($getRule);
		
        $user = [
            'fname'          	=> $this->request->getPost('fname'),
            'email'         	=> $this->request->getPost('email'),
            'role'     		=> 'admin',
            'password'     		=> $this->request->getPost('password'),
            'password_confirm'	=> $this->request->getPost('password_confirm'),
            // 'activate_hash' 	=> random_string('alnum', 32)
        ];

        // unset($user['password_confirm']);
        // dd($user);
        if (! $users->save($user)) {
			// return redirect()->back()->withInput()->with('errors', $users->errors());
            return redirect()->to(base_url('admin/register'))->withInput()->with('errors',  $users->errors());
        }

		// send activation email //
		// send email activation is commented no email support //
		
		// helper('auth'); 
        // send_activation_email($user['email'], $user['activate_hash']);

		// success
        return redirect()->to(base_url('admin/login'))->with('success', "Account Registered");
	}

    public function attemptLogin()
    {
        // validate request
        $rules = [
            'email'		=> 'required|valid_email',
            'password' 	=> 'required|min_length[5]',
        ];

        if (! $this->validate($rules)) {
            
            return redirect()->to(base_url('admin/login'))->withInput()->with('errors', $this->validator->getErrors());
        }

        // check credentials
        $users = new User();
        
        $user = $users->where('email', $this->request->getPost('email'))->first();
        
        if ( is_null($user) || ! password_verify($this->request->getPost('password'), $user['password']) ) 
        {
            return redirect()->to(base_url('admin/login'))->withInput()->with('error', "invalid user credentials");
        }

        // Stroing session values
        $this->setUserSession($user);

        // Redirecting to dashboard after login
        //   dd($user);

        if($user['role'] == "admin"){

            return redirect()->to(base_url('admin/dashboard'));

        }else{

            return redirect()->to(base_url('logout'));
        }
        
    }


    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'fname' => $user['fname'],
            // 'lastname' => $user['lastname'],
            'email' => $user['email'],
            // 'gender' => $user['gender'],
            // 'phone' => $user['phone'],
            'isLoggedIn' => true,
            "role" => $user['role'],
        ];

        session()->set($data);
        return true;
    }

    public function logout()
	{
	
        session()->destroy();
        // return redirect()->to('login');
        return redirect()->to(base_url('admin/login'));
	}
}
