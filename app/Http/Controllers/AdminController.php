<?php

namespace App\Http\Controllers;

use App\Models\FileListing;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $fileList = FileListing::all();
        return view('admin.index',compact('fileList'));
    }


    public function create()
    {
        return view('admin.file_listing.create');
    }


    public function store(Request $request)
    {
        $url = public_path('uploads/file');

        $request->validate([
            'title' => 'required',
            'file.*'  => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip',
        ]);

        $extension = $request->file->extension();
        $fileName  = time().'_'.'.'.$extension;

        $request->file->move($url, $fileName);

        FileListing::create([
            'title' => $request->title,
            'type'  => $request->type,
            'file'  => $fileName,
        ]);

        return redirect('dashboard');
    }

}
