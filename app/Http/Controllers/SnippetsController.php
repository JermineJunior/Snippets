<?php

namespace App\Http\Controllers;

use App\{Snippet , Tag};
use App\Http\Requests\CreateSnippetRequest;

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


    public function store(CreateSnippetRequest $form,Snippet $snippet)
    {
       return redirect(
           '/',
           $form->persist($snippet)
       );
    }


    public function show($tag_id,Snippet $snippet)
    {
        return view('snippets.show',compact('snippet'));
    }

}
