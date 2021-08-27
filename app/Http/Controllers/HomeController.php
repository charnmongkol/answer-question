<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('welcome');
    }


    
    public function getJSON(Request $request)
    {

        $url = 'https://api.publicapis.org/categories';

        $response = file_get_contents($url);
        $newsData = json_decode($response);

        

        return view('welcome', compact(['newsData']));        

    }

    public function search(Request $request) {
        
    }
}
