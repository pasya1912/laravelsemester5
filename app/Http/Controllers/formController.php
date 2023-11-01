<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function index()
    {
        return view('form.index');

        
    }
    public function action(Request $request){
        $data = [
            'nama' => $request->nama,
            'npm' => $request->npm,
            'nilai' => $request->nilai
        ];
        return view('form.result',$data);
    }

}
