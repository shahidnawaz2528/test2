<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function test(){
        // salutions=['Mrs'];
        // $name = 'some one';
        // return view('form')->with('name',$name);
        $rand_data = ['send','data','controller', 'to', 'view'];
        return view('form', compact('rand_data'));

    }

    public function getData(Request $req){
        // dd($req);
        // return "Form data will be here";
        // dd($req->input('name'));
        // dd($req->name);
        $name = $req->input('name');
        $gender = $req->input('gender');
        $rand_data = ['send','data','controller', 'to', 'view'];

        // $data = $req;
        // return view('form')->with('$data');
        // $name = 'some one received';
        return view('form', compact('rand_data'))->with('namee',$name)->with('gender', $gender);
        // $req->with('count', $this->users->count());
    }
}
