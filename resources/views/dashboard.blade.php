@extends('layouts.dashboard')

@section('content')
    <div class="p-6 text-gray-900">
        {{ __("You're logged in!") }}
    </div>
    <div>
        <a href="{{ route('home') }}">Terug naar website</a> &nbsp;
        <a href="{{ route('session.show') }}">Terug naar winkelwagen</a>
    </div>
@endsection
