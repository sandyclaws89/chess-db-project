@extends('template.basehtml')

@section('content')
<h1>All Champions</h1>
    <section class="home-section">


            @foreach ($name as $champ)
            <div class="card">
                <h2> {{$champ->name}}</h2>
                <img src="{{$champ->img}}" alt="{{$champ->name}}">
                <p> {{$champ->description}} </p>
            </div>
            @endforeach


        {{-- @dd() --}}
    </section>

@endsection



