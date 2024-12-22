<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticlesController extends Controller
{
    public function index(Request $request)
    {
        $Articles = Articles::paginate(5);
        return view('articles.index', compact('Articles'));
    }

    public function create()
    {
        
        return view('articles.create');
    }

    public function show($id)
    {
        $article = Articles::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function store(Request $request)
    {   
        Articles::create($request->post());
        return redirect()->route('articles.index')->with('success','the article has been created successfulley!');
    }

    
}
