<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="w-5/6 mx-auto">
    @include('layouts.header')
    <div class="flex my-12 text-center">
        @foreach ($blogs as $blog)
        <a href="{{route('welcome.blogs.show', $blog->id)}}" class="w-1/3 mx-6">
           <div>
                <img src="/images/{{$blog->image}}" alt="">
                <div class="inline-block uppercase border border-black shadow-xl shadow-black py-2 px-6 my-6">{{$blog->categories->category}}</div>
                <div class="text-xl font-bold">{{$blog->title}}</div>
                <p class="my-6">{{Str::limit($blog->story, 300)}}</p>
            </div> 
        </a>
        @endforeach
    </div>
    <div>
        <div class="text-center my-12 font-bold text-4xl uppercase">Trending Blogs</div>
        @foreach ($newBlogs as $blog)
            <a href="{{route('welcome.blogs.show', $blog->id)}}" class="w-1/3 mx-6">
            <div class="flex mb-6">
                    <img src="/images/{{$blog->image}}" alt="" width="400" height="300">
                    <div class="mx-6">
                        <div class="inline-block uppercase border border-black shadow-xl shadow-black py-2 px-6 my-6">{{$blog->categories->category}}</div>
                        <div class="text-xl font-bold">{{$blog->title}}</div>
                        <p class="my-6">{{Str::limit($blog->story, 300)}}</p>
                    </div>
                </div> 
            </a>
         @endforeach
    </div>
</div>    
    @include('layouts.footer')
    @include('layouts.scripts')
</body>
</html>