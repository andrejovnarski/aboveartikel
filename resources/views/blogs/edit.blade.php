<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Blog') }}
        </h2>
    </x-slot>
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="w-full rounded-xl bg-white p-4 shadow-2xl shadow-white/40">
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

            <form action="{{route('blogs.update', $blog->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                 <div class="flex flex-col">
                   <label for="text" class="mb-2 font-semibold">Title</label>
                   <input type="text" name="title" id="text" class="w-full rounded-lg border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40" value="{{$blog->title}}" />
                   @error('title')
                     <span class="text-red-500">{{$message}}</span>
                   @enderror
                 </div>
               <div class="mb-4 flex flex-col">
                 <label for="story" class="mb-2 font-semibold">Story</label>
                 <textarea name="story" id="story" cols="15" rows="10" class="w-full rounded-lg border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40">{{$blog->story}}</textarea>
                 @error('story')
                     <span class="text-red-500">{{$message}}</span>
                 @enderror
               </div>
               <div class="mb-4 grid grid-cols-2 gap-4">
                 <div class="mb-4 flex flex-col w-full">
                   <label for="age" class="mb-2 font-semibold">Image</label>
                   <div class="flex flex-col mb-2 w-full object-cover h-4/6 justify-items-start overflow-hidden">
                          <img class="w-1/2 h-full object-cover" src="/images/{{ $blog->image}}">
                          <input type="hidden" name="currentPhoto" value="{{$blog->image}}">
                  </div>
                   <input type="file"name="image" id="age" class="rounded-lg border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40" value="{{$blog->image}}"/>
                   @error('image')
                     <span class="text-red-500">{{$message}}</span>
                   @enderror
                 </div>
                 <div class="mb-4 flex flex-col w-full">
                   <label for="category" class="mb-2 font-semibold">Category</label>
                   <select id="category" name="category" class="rounded-lg border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40">
                     @foreach($categories as $category)
                       <option value="{{$category->id}}"@if($blog->category_id == $category->id) selected @endif>{{$category->category}}</option>
                     @endforeach
                   </select>
                 </div>
               </div>
               <div class="flex justify-between">
                <button type="submit" class="block uppercase mb-6 shadow bg-indigo-800 hover:bg-indigo-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 px-10 rounded">Update</button>
                <div class="w-1/2">
                    <label for="trending">Trending</label>
                    <input type="checkbox" name="trending" id="trending" value="{{$blog->trending}}" @if($blog->trending == 1) checked @endif onclick="check()">
                </div>
              </div> 
             </form>
        </div>
    </div>
    <script src="{{asset('js/checkbox.js')}}"></script>
  </x-app-layout>