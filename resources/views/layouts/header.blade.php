<nav class="border-gray-200 px-2 mb-10">
    <div class="container mx-auto flex flex-wrap items-center justify-between">
    
            <button class="font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button" data-dropdown-toggle="dropdown">Read <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
        
            <!-- Dropdown menu -->
            <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4" id="dropdown">
                <ul class="py-1" aria-labelledby="dropdown">
                    @foreach ($categories as $category)
                        <li>
                            <a href="{{route('categories.category', $category->id)}}" class="text-sm hover:bg-gray-100 text-black-700 block px-4 py-2">{{$category->category}}</a>
                        </li> 
                    @endforeach
                </ul>
            </div>
        <a href="{{route('welcome.blogs')}}" class="flex">
        <img src="/images/logo.png" alt="" width="120" height="120">
        </a>
        <div class="flex">
            <div class="font-bold me-4">
                <a href="{{route('login')}}">ADMIN</a>
            </div>
        </div>
    </div>
</nav>