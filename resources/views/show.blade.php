@extends('app')

@section('title', 'Evenement')

@section('content')
<div class="container border-start border-bottom justify-content-center">
    <div class="">
            <h4>{{$event->title}}</h4>
            <hr>
        <p>{{$event->description}}</p>
        <p>Le
            <strong>{{$event->date}}</strong> à
            <span>{{$event->place}}</span>
        </p>
        <div class="text-primary fw-bold fs-4">
            @if ($event->price == 0)
                <strong class="text-info">Gratuit</strong>
            @else
                {{$event->price}} FCFA
            @endif
        </div>

    </div>

    <div class="row m-3 gap-2">
        <a class="btn text-white btn-info me-2 col-4 row" href="{{route('event.edit', $event)}}">Modifier</a>
        <form class="col-4 row" action="{{route('event.destroy', $event)}}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger">Supprimer</button>
    </form>
</div>
</div>
@endsection
