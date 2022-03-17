<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
        return view('home');
    }
    public function getTest(){
        return view('test');
    }
    public function getPage($pageName){
        $data = [
            'page' => "",
        ];

        if(in_array($pageName,config('pages'))){
            $data['page'] = $pageName;
            return view($pageName)->with('data',$data);
        }else{
            return abort(404);
        }
    }

}
