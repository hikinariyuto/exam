<?php

namespace App\Http\Controllers;


use App\Models\Content;
use App\Http\Requests\ContentRequest;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContentRequest $request)
    {
        $contents=$request->only(['fullname','gender','email','postcode','address','building','opinion']);
        return view('confirm',compact('contents'));
    }

    public function store(ContentRequest $request)
    {
        $contents = $request->only(['fullname','gender','email','postcode','address','building','opinion']);
        Content::create($contents);
        return view('thanks');
    }
}
