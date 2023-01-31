<head>
    @vite('resources/css/app.css')
</head>
<body>
<x-navbar></x-navbar>
<main class="mx-auto">
    <ul class="flex flex-wrap my-2">
        @isset($pizzas)
            @foreach($pizzas as $pizza)
                <form action="{{ route('session.store') }}" method="POST" class="basis-1/2 col-start-1 border ring-1 ring-green-300 bg-green-200 rounded-xl flex flex-row p-2 m-0">
                    @csrf
                    <div class="w-16 h-16 mx-1.5">
                        <img class="object-cover h-16 w-16 rounded-md ring-1 ring-green-300" src='{{$pizza->image}}'/>
                    </div>
                    <div class="flex flex-col justify-around basis-1/2">
                        <div class="flex">
                            <a class="font-semibold">{{$pizza->name}}</a>
                            <a class="text-green-500 px-2">&euro;{{$pizza->price}}</a>
                        </div>
                        <a >{{$pizza->description}}</a>
                        <input name="id" type="number" required value="{{$pizza->id}}" class="invisible ... w-0 h-0">
                    </div>
                    <div class="grid grid-cols-2">
                        <label class="col-start-1" for="size">Formaat</label>
                        <select class="col-start-1 h-10 rounded text-green-600 bg-green-300" id="size" name="size">
                            <option value="Small">Small</option>
                            <option value="Medium">Medium</option>
                            <option value="Large">Large</option>
                        </select>
                        <div class="mx-1">
                            <button class="bg-green-600 hover:bg-green-400 ring-2 ring-green-300 hover:ring-green-600 font-semibold text-green-200 hover:text-green-700 my-4 px-4 rounded-xl">Toevoegen</button>
                            @if(Auth::check())
                                <div class="flex flex-col justify-around mx-2">
                                    <input formaction="{{ route('products.delete', $pizza->id) }}" formmethod="destroy" type="submit" value="Delete" class="px-3 bg-red-500 hover:bg-red-300 ring-2 ring-red-300 hover:ring-red-500 rounded-md text-red-200 hover:text-red-500 font-semibold"/>
                                </div>
                            @endif
                        </div>
                    </div>
                </form><br>
            @endforeach
        @endisset
    </ul>
    <div class="mx-auto flex flex-wrap justify-between bg-green-600 text-green-300 rounded-md p-4">
        <p>Totaal:</p>
        <a class="items-center mt-3 sm:mt-0 hover:underline hover:text-green-100" href="{{route('session.show')}}">Winkelwagen</a>
    </div>
</main>
<x-footer></x-footer>
</body>
