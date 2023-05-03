<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Blogs') }}
      </h2>
  </x-slot>
<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    @if(Session::has('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-5 w-full rounded" role="alert">
                {{ Session::get('error') }}
            </div>
    @endif
    @if(Session::has('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 mb-5 w-full rounded" role="alert">
                {{ Session::get('success') }}
            </div>
    @endif
    <a href="{{route('blogs.create')}}" class="inline-block"><button class="block uppercase mb-6 shadow bg-indigo-800 hover:bg-indigo-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 px-10 rounded">Create new blog</button></a>
    <div class="grid gap-12 lg:grid-cols-2">
      @foreach($blogs as $blog)
      <div class="p-1 rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
        <img src="/images/{{$blog->image}}" alt="art cover" loading="lazy" width="500" height="500" class="h-56 sm:h-full w-full sm:w-5/12 object-cover object-top rounded-lg transition duration-500 group-hover:rounded-xl">
        <div class="sm:w-7/12 pl-0 p-5">
          <div class="space-y-2">
            <div class="space-y-4">
              <h4 class="text-2xl font-semibold text-cyan-900">{{$blog->title}}</h4>
              <p class="text-gray-600">{{Str::limit($blog->story, 100)}}</p>
            </div>
            @if ($blog->trashed())
            <div class="flex justify-between">
                <a href="{{route('blogs.restore', $blog->id)}}" class="block w-max text-red-600">Restore</a>
                <div class="text-bold uppercase">Deleted</div>
            </div>  
            @else
                <a href="{{route('blogs.show', $blog->id)}}" class="block w-max text-cyan-600">Read more</a>
            @endif
          </div>
        </div>
      </div>
      @endforeach  
    </div>
    <div class="my-4 mx-4">{{$blogs->links()}}</div>
  </div>
</div>
</x-app-layout>
