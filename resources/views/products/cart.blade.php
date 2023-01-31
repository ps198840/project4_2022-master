<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    @vite('resources/css/app.css')
</head>
<body>
<x-navbar></x-navbar>
<main class="mx-auto grid grid-cols-2 gap-x-1">
    <div class="col-start-1 font-semibold flex justify-around items-center text-xl rounded-t-2xl bg-green-200 mt-2 mx-24">
        <p>Bestelling</p>
    </div>
    <div class="col-start-1 flex flex-col gap-y-1 px-4 py-3 bg-green-200 rounded-b-md mb-2 mx-24">
        @if(isset($cart))
            @foreach($cart as $key => $item)
                <form class="bg-green-300 grid grid-rows-1 grid-cols-5 rounded-xl px-2" action="{{ route('session.delete', $key) }}" method="POST">
                    @csrf
                    @method('delete')
                    <input class="col-start-1 hidden" name="id" type="number" value="{{$item['id']}}"/>
                    <a class="col-span-2 font-semibold" id="name">{{$item['name']}}</a>
                    <a id="size">{{$item['size']}}</a>
                    <a id="price">&euro;{{$item['price']}}</a>
                    <button class="font-semibold text-green-500 underline hover:line-through hover:text-red-600">Delete</button>
                </form>
            @endforeach
        @else
            <p class="font-semibold text-2xl flex justify-center">Winkelwagen is leeg</p>
        @endif
    </div>
    <div class="col-start-2 row-start-1 font-semibold flex justify-around items-center text-xl rounded-t-2xl bg-green-200 mt-2 mx-16">
        <p>Gegevens</p>
    </div>
    <div class="col-start-2 grid grid-cols-2 p-2 flex bg-green-200 rounded-b-md mb-2 mx-16 ">
    @if(Auth::check())
        @isset($person)
            <p class="row-start-1 font-semibold">Naam:</p>
            <p class="col-start-2">{{$person->first_name}} {{$person->last_name}}</p>
            <p class="row-start-2 font-semibold">Bezorg Adres:</p>
            <p class="col-start-2">{{$person->address}} {{$person->city}}</p>
            <p class="row-start-3 font-semibold">Telefoonnummer:</p>
            <p class="col-start-2">{{$person->phone}}</p>
            <p class="row-start-4 font-semibold">Email:</p>
            <p class="col-start-2">{{$person->personal_email}}</p>
            @endisset
    @else
        <a class="text-green-600 underline hover:text-green-400" href="{{ route('login') }}">Login om te bestellen</a>
    @endif
    </div>

    <div class="mx-auto flex flex-wrap justify-between bg-green-600 text-green-300 rounded-t-md py-1 px-5">
        <p>Totaal:</p> &nbsp;
        <p>&euro;{{$total}}</p>

        <a class="col-start-1 pl-10 font-semibold hover:underline hover:text-green-100" href="{{route('session.clear')}}">Bestellen</a>
    </div>
</main>
<x-footer></x-footer>
</body>
</html>
