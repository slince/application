<?php
namespace App\Controller;

use Slince\Application\Controller;

class PagesController extends Controller
{
    function index()
    {
//         echo 'hello';
        $this->render();
        $articles = $this->loadModel('Links')->getName(1);
        print_r($articles);
    }
    function show()
    {
        echo 'hi show';
        trigger_error(E_USER_ERROR);
    }
}