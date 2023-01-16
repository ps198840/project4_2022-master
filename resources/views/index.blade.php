<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    @vite('resources/css/app.css')
</head>
<body>
<nav class="flex items-center justify-between flex-wrap bg-green-600 p-3 mx-auto ">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <img src="img/pizz-logo.png" class="mx-1 w-16"/>
        <a class="font-semibold text-xl tracking-tight">Stonks Pizza</a>
    </div>
    <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-green-200 border-teal-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            <a href="{{route('products.index')}}" class="block mt-4 lg:inline-block lg:mt-0 text-green-200 hover:text-white mr-4">Pizza</a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-green-200 hover:text-white mr-4">Over ons</a>
        </div>
        <div>
            @if(Auth::check())
                <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Mijn account</a>
            @else
                <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Inloggen</a>
            @endif
        </div>
    </div>
</nav>
<main>
</main>
</body>
</html>
