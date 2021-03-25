<?php

namespace App\Http\Controllers;

use App\Models\FileListing;

class PageController extends Controller
{
    public function index()
    {
        $fileList = FileListing::all();
        $data = view('homepage',compact('fileList'));
        return $data;
    }
}
