<?php
use Services\Repository\IuserRepository;


class HomeController extends BaseController {
    private  $user;
    public function __construct(IuserRepository $user){
        $this->user = $user;
         
    }
    public function Index() {

        return View::make('hello');
        
    }

    public function postLogin() {


        $credentials = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );
        

        try {
            $user = $this->user->authenticate($credentials, false);
            
            if ($user) {
               
                return Redirect::route('logins');
            }
        } catch (\Exception $e) {
          
            return Redirect::route('login')->withErrors(array('login' => $e->getMessage()));
        }
    }
    
    public function logOut(){
        var_dump($this->user->getLogout());
   
     //  var_dump($this->user->findAllUsers());
       // return Redirect::route('login');
    }
}
