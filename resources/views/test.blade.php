<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <p>{{$region->id}}</p> --}}
    {{-- <p>region:{{$region->nom_region}}</p>
    @foreach ($departement as $dept)
        <p>departement:{{$dept->nom_depart}}</p>
    @endforeach

    @foreach ($commune as $com)
        <p>commune:{{$com->nom_commune}}</p>
    @endforeach --}}
    {{-- <p>bureau:{{$bureau->num_bureau}}</p>
    <p>centre:{{$centre->nom_centre}}</p> --}}
    {{-- @foreach ($bureau as $br)
        <p>centre:{{$br->num_bureau}}</p>
    {{-- @endforeach --}}

{{--    
    @foreach ($premiers as $premier)
    <p>le premier est {{$premier->nom}} =>  {{$premier->count}}</p>
    @endforeach

<hr>
    @foreach ($users as $user)
        <p>{{$user->nom}} => {{$user->count}}</p>
    @endforeach
<hr>
    
    @foreach ($trier as $tri)
        <p>{{$tri->nom}} => {{$tri->count}}</p>
    @endforeach
<h1>le gagnant des elections est {{$x->nom}} avec {{$x->count}} voix  soit {{$pourcent}}% des votes</h1>
{{-- <h3>{{$x->nom}}-----------{{$x->count}}</h3> --}}
{{-- <h3>le nombre totale de voix est {{$total}}</h3> --}}


@if ($pourcent>50)
    <h1>le vote se termine au premier tour</h1>
    <h3>le gagnant est {{$premier->nom}}  avec {{$pourcent}}% des votes</h3>
@else
    <h1>le vote pass au second tour</h1>
    <h3>les candidants y participant sont:</h3> 
    @foreach ($deuxpremier as $item)
        <h4>{{$item->nom }} avec {{ $item->count}}  voix et un ballotage {{$item->ballotage}}</h4>
    @endforeach
@endif

</body>

</html>


