@component('layout')
@slot('title')
    index
@endslot
<div class="w-full bg-white px-16 py-8">
    @if(count($snippets))
       @foreach ($snippets as $snippet)
           <article class="mb-2 pb-4 border-b border-dashed border-gray-500">
               <h4 class="text-xl text-teal-500 flex items-center">
                    <a href="{{$snippet->path()}}" class="mr-auto">
                        {{$snippet->title}}
                    </a>
                    <span class="px-4 py-1 m-2 bg-gray-100 shadow-sm text-base">
                        {{$snippet->tag->name}}
                    </span>
               </h4>
               <p class="bg-gray-200 p-6">
                   <code>
                       {{$snippet->body}}
                   </code>
               </p>
           </article>
       @endforeach
     @endif  
</div>
@endcomponent