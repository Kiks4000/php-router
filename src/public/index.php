<?php

//$uri = $_SERVER['REQUEST_URI'];
//
//switch ($uri)
//{
//    case '/article' :
//        require '../templates/article.php';
//        break;
//    case '/contact' :
//        require './src/templates/contact.php';
//        break;
//        default :
//            require '../templates/404.php';
//            break;
//}
class Router
{
    public function onsenfou()
    {
        $uri = $_SERVER['REQUEST_URI'];

        switch ($uri)
        {
            case '/article' :
                require '../templates/article.php';
                break;
            case '/contact' :
                require '../templates/contact.php';
                break;
                default :
                    require '../templates/404.php';
                    break;
        }
    }
}
$router = new Router();
$router->onsenfou();