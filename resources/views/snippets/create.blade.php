@component('layout')
@slot('title')
    create
@endslot
<div class="w-full bg-white px-16 py-8">
    <h1 class="text-2xl">New Snippet</h1>
    <form action="/snippets" method="POST">
        @csrf
            @if($snippet->id)
                <input type="hidden" name="forked_id" value="{{$snippet->id}}">
            @endif    
        <div class="form-group">
            <label for="title" class="text-gray-800 font-semibold mt-2">Title</label>
        <input type="text" name="title" class="form-control" value="{{$snippet->title}}">
        </div>
        <div class="form-group">
            <label for="body" class="text-gray-800 font-semibold mt-2 ">body</label>
            <textarea name="body" cols="10" rows="10" class="form-control">
                {{$snippet->body}}
            </textarea>
        </div>
        <div class="control">
            <button type="submit" class="btn btn-success">Publish Snippet</button>
        </div>
    </form>
</div>

@endcomponent