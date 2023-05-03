<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subscribers') }}
        </h2>
    </x-slot>
  <div class="py-12">
    @if(Session::has('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-5 w-full rounded max-w-7xl mx-auto sm:px-6 lg:px-8" role="alert">
                {{ Session::get('error') }}
            </div>
    @endif
    @if(Session::has('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 mb-5 w-full rounded max-w-7xl mx-auto sm:px-6 lg:px-8" role="alert">
                {{ Session::get('success') }}
            </div>
    @endif
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="">
        <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded my-6">
            <div class="rounded-t mb-0 px-0 border-0">
              <div class="flex flex-wrap items-center px-4 py-2">
                <div class="relative w-full max-w-full flex-grow flex-1">
                  <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Subscribers</h3>
                </div>
              </div>
              <div class="block w-full overflow-x-auto ">
                <table class="items-center w-full bg-transparent border-collapse">
                  <thead>
                    <tr class="text-center">
                      <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold">Members</th>
                      <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold">Date</th>
                      <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($subscribers as $subscriber)
                    <tr class="text-gray-700 dark:text-gray-100 text-center">
                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{$subscriber->email}}</th>
                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{$subscriber->created_at}}</td>
                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                          <form action="{{route('subscribers.destroy', $subscriber->id)}}" method="POST">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="block uppercase mx-auto shadow bg-red-800 hover:bg-red-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 px-10 rounded">Delete</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="mx-6 my-6">{{$subscribers->links()}}</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </x-app-layout>
  