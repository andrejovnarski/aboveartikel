<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Blog') }}
        </h2>
    </x-slot>
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="w-full rounded-xl bg-white p-4 shadow-2xl shadow-white/40">
            <div class="flex justify-between w-full">
                <a href="{{route('blogs.edit', $blog->id)}}"><button class="block uppercase mb-6 shadow bg-indigo-800 hover:bg-indigo-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 px-10 rounded">Edit blog</button></a>
                <form action="{{route('blogs.destroy', $blog->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="block uppercase mb-6 shadow bg-red-800 hover:bg-red-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 px-10 rounded">Delete</button>
                </form>
            </div>
                <div class="text-center">
                    <h4 class="text-2xl font-semibold text-cyan-900 my-6">{{$blog->title}}</h4>
                    <img src="/images/{{$blog->image}}" alt="" width="700" height="500" class="mx-auto">
                    <div class="m-6">{{$blog->story}}</div>
                </div>
          </div>
        </div>
    </div>
  </x-app-layout>