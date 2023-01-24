<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{



    public function create()
    {

        return view('create');
    }

    public function store(AuthorRequest $request)
    {
         $data=$request->validated();
         $author = Author::create($data);

         return redirect()->back();
    }


}
