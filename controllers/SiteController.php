<?php


namespace app\controllers;


use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function home(): string
    {
        $params = [
            'name' => "Tolulope"
        ];
        return $this->render('home', $params);
    }

    public function contact(): string
    {
        return $this->render('contact');
    }

    public static function handleContact(Request $request): string
    {
        $body = $request->getBody();
        echo '<pre>';
        var_dump($body);
        echo '</pre>';
        exit;
        return "Handling submitted data";
    }
}