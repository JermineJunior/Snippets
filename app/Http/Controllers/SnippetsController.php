<?php

namespace App\Http\Controllers;

use App\Snippet;
use App\Tag;
use Illuminate\Http\Request;

class SnippetsController extends Controller
{

    public function index()
    {
        $snippets = Snippet::all();
        return view('snippets.index',compact('snippets'));
    }


    public function create($tag_id = null,Snippet $snippet)
    {
        $tags = Tag::all();
        return view('snippets.create',compact('snippet','tags'));
    }


    public function store(Snippet $snippet)
    {
        $this->validate(request(),[
            'title' => 'required',
            'body'  =>  'required'
        ]);
        Snippet::create([
          'title'       => request('title'),
          'body'        => request('body'),
          'tag_id'      => request('tag_id'),
          'forked_id'   =>request('forked_id')
        ]);
        return redirect('/');
    }


    public function show($tag_id,Snippet $snippet)
    {
        return view('snippets.show',compact('snippet'));
    }

}
