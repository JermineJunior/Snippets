@component('layout')
@slot('title')
    show
@endslot
<div class="container m-4">
    <article class="mb-2">
        <h4 class="text-xl flex items-center mb-4">
             <a href="#" class="mr-auto">
                 {{$snippet->title}}
             </a>
             <p class="mt-4 text-gray-800">
             <a href="{{$snippet->path()}}/fork" class="bg-gray-100 rounded-lg px-3 py-2 hover:no-underline shadow-sm ">
                    Fork Snippet
                </a>
            </p>
        </h4>
        <pre class="bg-gray-300 p-6 mb-2"><code>{{$snippet->body}}</code></pre>
        <p class="mb-4">
            <a href="/">Go BACK</a>
        </p>
        @if ($snippet->isAFork())
         <h4 class="text-xl text-teal-500 mt-2">
            Forked From
            <a href="/snippets/{{$snippet->originalSnippet->id}}">
                {{$snippet->originalSnippet->title}}
            </a>
         </h4>
        @endif
        @if ($snippet->forks->count())
            <hr>
            <h4 class="text-xl text-teal-500 mt-2">
                   Forks
            </h4>
            <ol>
                @foreach ($snippet->forks as $fork)
                <li>
                    <a href="{{$fork->path()}}">
                        {{$fork->title}}
                    </a>
                </li>
                @endforeach
            </ol>
        @endif
    </article>

</div>

@endcomponent