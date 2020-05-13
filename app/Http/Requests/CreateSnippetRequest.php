<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSnippetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'body'  =>  'required'
        ];
    }

    public function persist($snippet)
    {
       return $snippet->addPost([ 
        'title'       => request('title'),
        'body'        => request('body'),
        'tag_id'      => request('tag_id'),
        'forked_id'   =>request('forked_id')
        ]);

    }
    
}
