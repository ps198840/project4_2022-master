<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    @vite('resources/css/app.css')
</head>
<body>
<x-navbar></x-navbar>
<main class="flex justify-around mx-auto">
    <p class="font-semibold underline">Ferali</p>
    <p class="font-bold underline">gatr</p>
    <p class="font-extrabold">!</p>
    <a href="https://pokemondb.net/pokedex/feraligatr"><img src="https://img.pokemondb.net/sprites/x-y/shiny/feraligatr.png" alt="Feraligatr"></a>
    <p class="font-extralight text-sm text-blue-600">(shiny)</p>
    <a href="https://pokemondb.net/pokedex/feraligatr"><img src="https://img.pokemondb.net/sprites/x-y/normal/feraligatr.png" alt="Feraligatr"></a>
    <p class="text-red-400">(not shiny)</p>
</main>
<x-footer></x-footer>
</body>
</html>
