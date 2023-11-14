<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contents=$request->only(['name','sex','email','code','address','building','idea']);
        return view('confirm',compact('contents'));
    }

    public function store(Request $request)
    {
        $contents = $request->only(['name','sex','email','code','address','building','idea']);
        return view('thanks');
    }
}
