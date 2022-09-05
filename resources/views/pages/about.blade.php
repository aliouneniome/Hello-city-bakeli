@extends('app')

@section('title','About Us | Hello City')


@section('content')
<img src="{{ asset('/images/app_logo.png')}}" alt="KAAY LIVRE" class="my-12 rounded-full shadow-md">
        
    <h2 class="mb-5 text-gray-700">
        Built with <span class="text-pink-500">&hearts;</span> by KAAY COM.
    </h2>

    <p>
        <a href="/"class="text-indigo-500 hover:text-indigo-600 underline">Revenir a la page d'acceuil</a>
    </p>

@endsection