@extends('app')

@section('title', 'Création d\'un évenement')

@section('content')
    <div class="container">
        <form class="vstack gap-2 mt-2" action="{{route('event.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label class="form-label" for="">Titre</label>
                <input class="form-control  @error('title')  is-invalid @enderror" value="{{old('title')}}" type="text" name="title" id="">
            </div>
            @error('title')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
            <div class="form-group">
                <label class="form-label"  for="">Description</label>
                <textarea class="form-control @error('description')  is-invalid @enderror" name="description" id="" cols="30" rows="10">{{old('description')}}</textarea>
            </div>
            @error('description')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
            <div class="form-group">
                <label class="form-label"  for="">Date</label>
                <input type="date" name="date" class="@error('date')  is-invalid @enderror form-control" id="" value="{{old('date')}}">
            </div>
            @error('date')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
            <div class="form-group">
                <label class="form-label"  for="">Lieu</label>
                <input type="text" name="place" id=""  value="{{old('place')}}" class="@error('place')  is-invalid @enderror form-control">
            </div>
            @error('place')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
            <div class="form-group">
                <label class="form-label"  for="">Prix</label>
                <input type="number"  value="{{old('price')}}" name="price" id="" class="@error('price')  is-invalid @enderror form-control">
            </div>
            @error('price')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
            <button class="btn btn-primary">Créer</button>
        </form>
    </div>
@endsection
