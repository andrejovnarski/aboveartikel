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
    <div class=" my-12">
        <a href="{{url()->previous()}}" class="mb-6 inline-block"><button class="block uppercase shadow bg-indigo-800 hover:bg-indigo-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 px-10 rounded">Back</button></a>
        <div class="text-center mt-6 mx-auto">
            <h4 class="text-2xl font-semibold text-cyan-900 my-6">{{$blog->title}}</h4>
            <img src="/images/{{$blog->image}}" alt="" width="700" height="500" class="mx-auto">
            <div class="m-6">{{$blog->story}}</div>
        </div>
    </div>
</div>    
    @include('layouts.footer')
    @include('layouts.scripts')
</body>
</html>