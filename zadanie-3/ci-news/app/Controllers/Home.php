<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;
use CodeIgniter\Model\User_model;

use \myPHPnotes\Microsoft\Auth;
use \myPHPnotes\Microsoft\Handlers\Session;
use \myPHPnotes\Microsoft\Models\User;

require_once ("C:/xampp/htdocs/ci-news/vendor/autoload.php");
class Home extends BaseController
{
    public function index()
    {   
        
        $tenant = "consumers";
        $client_id = "b5c68310-a1fc-4a7f-92b1-625de4fc3ea5";
        $client_secret = "vrk8Q~YRrse92RxRqinTdZC_wGNpbZivWsd5ma9O";
        $callback = "http://localhost:8080/loginwithmicrosoft";
        $scopes = [
            'User.Read',
            'email',
            'offline_access',
            'openid',
            'profile'
        ];
        $microsoft = new Auth($tenant,$client_id, $client_secret, $callback, $scopes);
        header("location: ". $microsoft->getAuthUrl());
        $data['loginButton'] = '<a href="'.$microsoft->getAuthUrl().'" ><img src="uploads/microsoft.png" alt="Login" id="button"></a>';
        return view('login',$data);
    }
    public function profile()
    {
        return view('profile');
    }
    public function loginwithmicrosoft()
    {
        $tenant = "consumers";
        $client_id = "b5c68310-a1fc-4a7f-92b1-625de4fc3ea5";
        $client_secret = "vrk8Q~YRrse92RxRqinTdZC_wGNpbZivWsd5ma9O";
        $callback = "http://localhost:8080/loginwithmicrosoft";
        $scopes = [
            'User.Read',
            'email',
            'offline_access',
            'openid',
            'profile'
        ];
        $Time = new \Datetime('now');
        $dateTime = $Time->format('d-m-y');
        $auth = new Auth(
            $tenant,
            $client_id,
            $client_secret,
            $callback,
            $scopes);
        $token = $auth->getToken(urlencode($_REQUEST['code']), 
            Session::get("state"));
        $auth->setAccessToken($token->access_token);
        $user = new User;

        $db = \Config\Database::connect();

        $data = [
            'imie' => $user->data->getGivenName(),
            'nazwisko'  => $user->data->getSurname(),
            'oauth_token'  => $token->access_token,
            'date_token'  => $dateTime
        ];
        
        $db->table('users')->insert($data);
       
        $profile['data'] = "<p><b>Wyświetlana nazwa: </b>"  .$user->data->getDisplayName() . "</p>
        <p><b>Imię: </b>"  .$user->data->getGivenName() . "</p> 
        <p><b>Nazwisko: </b>"  .$user->data->getSurname() . "</p> 
        <p><b>E-mail: </b>"  .$user->data->getUserPrincipalName() . "</p>
        <p><b>Oauth Token: </b></p><p id ='token'>"  .$token->access_token . "</p>";
        return view('profile',$profile);

    }
}
