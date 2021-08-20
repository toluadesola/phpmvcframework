<?php


namespace app\controllers;


use app\core\Controller;
use app\core\Request;
use app\models\User;

class AuthController extends Controller
{
    public function login(): string
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request): string
    {
        $user = new User();

        if($request->isPost()){
            $user->loadData($request->getBody());

//            echo '<pre>';
//            var_dump($user);
//            echo '</pre>';

            if($user->validate() && $user->save()){
                return 'Success';
            }

            return $this->render('register', [
                'model' => $user
            ]);
        }

        $this->setLayout('auth');
        return $this->render('register', [
            'model' => $user
        ]);
    }
}