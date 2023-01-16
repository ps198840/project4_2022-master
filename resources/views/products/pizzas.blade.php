<head>
    @vite('resources/css/app.css')
</head>
<body>
<nav class="flex items-center justify-between flex-wrap bg-green-600 p-3 mx-auto rounded-md">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <img src="img/pizz-logo.png" class="mx-1 w-16"/>
        <a class="font-semibold text-xl tracking-tight">Stonks Pizza</span>
    </div>
    <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-green-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            <a href="" class="font-bold block mt-4 lg:inline-block lg:mt-0 text-green-200 hover:text-white mr-4">Pizza</a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-green-200 hover:text-white mr-4">Over ons</a>
        </div>
        <div>
            @if(Auth::check())
                <a href="/dashboard" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Mijn account</a>
            @else
                <a href="/dashboard" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Inloggen</a>
            @endif
        </div>
    </div>
</nav>
<main class="mx-auto">
    <ul class="flex flex-wrap">
        @isset($pizzas)
            @foreach($pizzas as $pizza)
                {{--@if($loop->odd)--}}
                    <form action="{{ route('products.delete', $pizza->id) }}" method="POST" class="basis-1/2 m-1 col-start-1 border ring-1 ring-green-300 bg-green-200 rounded flex flex-row p-2 m-0">
                {{--@else--}}
                    <!--<form action="{{ route('products.delete', $pizza->id) }}" method="POST" class="col-start-2 border ring-1 ring-green-300 bg-green-200 rounded flex flex-row p-2 m-0">-->
                {{--@endif--}}
                    @csrf
                    @method('delete')
                    <div class="w-16 h-16 mx-1">
                        <img class="object-cover h-16 w-16 rounded-md ring-1 ring-green-300" src='{{$pizza->image}}'/>
                    </div>
                    <div class="flex flex-col justify-around basis-1/2">
                        <div class="flex">
                            <a class="font-semibold">{{$pizza->name}}</a>
                            <a class="text-green-500 px-2">&euro;{{$pizza->price}}</a>
                        </div>
                        <a >{{$pizza->description}}</a>
                    </div>
                    <div class="grid grid-cols-2">
                    @if(Auth::check())
                        <div class="flex flex-col justify-around mx-2">
                            <a href="/pizzas/{{$pizza->id}}" class="col-start-1 px-3 bg-amber-500 hover:bg-amber-300 ring-2 ring-amber-300 hover:ring-amber-500 rounded-md text-amber-200 hover:text-amber-500 font-semibold">Wijzigen</a>
                            <input type="submit" value="Delete" class="col-start-1 px-3 bg-red-500 hover:bg-red-300 ring-2 ring-red-300 hover:ring-red-500 rounded-md text-red-200 hover:text-red-500 font-semibold"/>
                        </div>
                    @endif
                        <button class="col-start-2 bg-green-600 hover:bg-green-400 ring-2 ring-green-300 hover:ring-green-600 font-semibold text-green-200 hover:text-green-700 my-4 px-4 rounded-xl">Toevoegen</button>
                    </div>
                    </form><br>
            @endforeach
        @endisset
    </ul>
</main>

<footer class="p-4 bg-white rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 bg-green-600 mx-auto">
    <span class="text-sm text-gray-500 sm:text-center dark:text-green-300">© 2023 <a href="https://flowbite.com/" class="hover:underline">Stonks Pizza™</a>.&nbsp Stonks Entertainment™.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm text-green-300 sm:mt-0">
        <li><a href="#" class="mr-4 hover:underline md:mr-6 ">Disclaimer</a></li>
        <li><a href="#" class="hover:underline">Voorwaarden</a></li>
    </ul>
</footer>

</body>
