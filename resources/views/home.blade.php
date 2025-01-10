@extends('app')

@section('title', 'Accueil')

@section('content')
    <div class="container">
        {{-- @session('createSuccess')
            <div class="alert alert-success">
                {{session('createSuccess')}}
            </div>
        @endsession --}}
        <h1>Liste des événements</h1>
        <a href="{{route('event.create')}}" class="btn btn-primary">Créer un nouvel événement</a>
        <div class="row m-2 gap-3">
            @if ($listeDesEvents->isNotEmpty())
            @foreach ($listeDesEvents as $event)

            <div class="d-flex card col-5">
                <a style="text-decoration: none" class="text-dark" href="{{route('event.show', $event)}}">
                <div class=" card-body">
                        <h4>{{$event->title}}</h4>
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
                </a>
                    <div class="row m-3 gap-2">
                        <a class="btn text-white btn-info me-2 col-4 row" href="{{route('event.edit', $event)}}">Modifier</a>
                        <form class="col-4 row" action="{{route('event.destroy', $event)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </div>

            @endforeach
        </div>
            @else
            <h3 class="mt-5 text-center alert alert-warning">Aucun événement</h3>
        @endif
    </div>
@endsection
